const imgPath = "images/cells/";
const iconPath = "images/cell_types/";
const cellsJSON = "images/cells.json";
const cellTypesJSON = "images/types.json";
const cellImagePlaceholderID = "cell-image";
const cellTypeButtonRowID = "cell-type-buttons";
const feedbackElementID = "feedback";

let cellImages = [];
let cellTypes = [];
let currentType = null;
let selectedLevel = 0; 
let correctAnswersCount = 0; 
let incorrectAnswersCount = 0; 
let counter = 10; 
let timeRemaining; 
let timerInterval; 
let currentLevel = [];
let isGameActive = false;

class CellImageMetaData {
    constructor(data) {
        this.type = data.type;
        this.sample = data.sample;
        this.id = data.id;
        this.path = data.path;
    }
}

/*
    Metadata for available cell types
*/
class CellTypeMetaData {
    constructor(data) {
        this.key = data.key; 
        this.desc = data.desc; 
        this.img = data.img;
    }
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Functions and event handlers//////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function checkAnswer(selectedAnswer) {
    const feedbackElement = document.getElementById(feedbackElementID); 
    const counterDisplay = document.getElementById('counter-display'); 

    const guessStatus = encodeURIComponent(selectedAnswer);
    const currentCid = encodeURIComponent(currentType);
    
        fetch(`api.php?cid=${currentCid}&guess=${guessStatus}`, {
        method: 'GET'
    })
    .then(response => {
        return response.json().then(data => {
            if (!response.ok) {
                console.error('Error storing answer:', data);
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            console.log('Answer stored successfully:', data);
        });
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
    
    if (selectedAnswer === currentType) {
        feedbackElement.textContent = "Correct! Well done."; 
        feedbackElement.style.color = "green"; 
        correctAnswersCount++;
        incorrectAnswersCount = 0;

        if (counter > 0) {
            counter -= 1; 
            createCircleCounter(counter); 
        }
        
        counterDisplay.textContent = `${counter}`; 

        // Check if counter has reached 0
        if (counter === 0) {
            clearInterval(timerInterval);
            document.getElementById('timer-canvas').style.display = 'none';  
            currentLevel++; 
            // Grab the level element
            const levelElement = document.getElementById('level');
    
            
            levelElement.classList.add('highlight-level');
            levelElement.textContent = `${currentLevel}`; 

            
            setTimeout(() => {
            levelElement.classList.remove('highlight-level');
            }, 1500); // Match duration with CSS animation
     
            storeCurrentLevel(); 
            counter = 10; 
            isGameActive = false; 
             // Hide the cell image when moving to the next level
            document.getElementById(cellImagePlaceholderID).style.display = 'none';
            document.getElementById('start-game-button').style.display = 'block'; 
            feedbackElement.textContent += "Glückwunsch! Auf ins nächste Level!";
            createCircleCounter(counter);
            console.log("Game is now active:", isGameActive);
            setTimeout(() => {
                feedbackElement.textContent = ""; 
                if (isGameActive) {
                    displayRandomImage(); 
                    displayCellTypeButtons(); 
                    document.getElementById(cellImagePlaceholderID).style.display = 'none';
                    document.getElementById('start-game-button').style.display = 'block'; 
                    createCircleCounter(counter);
                }    
            }, 3000);  
        } else {
            setTimeout(() => {
                feedbackElement.textContent = "";
                console.log("Game is now active:", isGameActive);
                if (isGameActive) { // Add this check
                    displayRandomImage(); 
                }    
            }, 100);  
        }
    } else {

        incorrectAnswersCount++; 
        if (currentLevel >= 4) {
            counter += 2; 
        }

        feedbackElement.textContent = `Incorrect! Try it again!`; 
        feedbackElement.style.color = "red"; 
        
        // Check if the user has guessed incorrectly twice
        if (incorrectAnswersCount === 2) {
            feedbackElement.textContent = "Let's try another one..."; 
            feedbackElement.style.color = "yellow";
            
            
            
            setTimeout(() => {
                if (isGameActive) { 
                    displayRandomImage(); 
                }
            }, 200); 
            
            incorrectAnswersCount = 0; 
        }
        createCircleCounter(counter);
    }

    counterDisplay.textContent = `${counter}`; 
}

function drawTimerCanvas(percentage) {
    const canvas = document.getElementById('timer-canvas');
    const context = canvas.getContext('2d');
    const radius = canvas.width / 2 - 5; 
    const centerX = canvas.width / 2;
    const centerY = canvas.height / 2;

    // Clear the canvas for redrawing
    context.clearRect(0, 0, canvas.width, canvas.height);

    // Draw the background circle
    context.beginPath();
    context.arc(centerX, centerY, radius, 0, Math.PI * 2, false);
    context.fillStyle = '#444'; 
    context.fill();

    // Draw progress arc
    context.beginPath();
    context.arc(centerX, centerY, radius, -Math.PI / 2, (-Math.PI / 2) + (Math.PI * 2 * percentage), false);
    context.lineTo(centerX, centerY);
    context.fillStyle = '#f1216a'; 
    context.fill();
    context.fillStyle = '#fff'; 
    context.font = '20px Arial'; 
    context.textAlign = 'center'; 
    context.textBaseline = 'middle'; 
    context.fillText(`${Math.max(0, timeRemaining)}`, centerX, centerY); 
}

function storeCurrentLevel() {
    console.log("Storing current level..."); // Verify function execution

    fetch(`api.php?achievement=${currentLevel}&proficiency=${currentLevel}`, {
        method: 'GET', // Using GET to store the level
        credentials: 'include' // Include any cookies/session IDs if necessary
    })
    .then(response => {
        // Check if the response is okay
        if (!response.ok) {
            return response.json().then(data => {
                console.error('Error storing current level:', data);
                throw new Error('Network response was not ok: ' + response.statusText);
            });
        }
        return response.json(); // Properly parse the successful response
    })
    .then(data => {
        console.log('Current level stored successfully:', data); // Log the success response
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error); // Handle the error
    });
}

async function loadCurrentLevel() {
    console.log("Loading current level...");
    try {
        const response = await fetch(`api.php?user`, {
            method: 'GET',
            credentials: 'include'
        });

        console.log('Response received:', response);
        if (!response.ok) {
            const errorData = await response.json();
            console.error('Error loading current level:', errorData);
            throw new Error('Network response was not ok: ' + response.statusText);
        }

        const textResponse = await response.text(); // Get the response as text for logging
        console.log('Raw Response Text:', textResponse); // Log it to see the exact output

        const data = JSON.parse(textResponse); // Try parsing the text response directly
        console.log('API Response:', data);
        
        // Set currentLevel from proficiency
        if (data.proficiency !== undefined) {
            currentLevel = data.proficiency; // Set currentLevel to proficiency
            document.getElementById('level').textContent = `${currentLevel}`;
        } else {
            throw new Error("Invalid response structure");
        }
    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
        currentLevel = 1; // Defaulting to level 1 on error
    }
}

function updateScoreBoard() {
    const scoreBoard = document.getElementById('score-board');
    scoreBoard.textContent = `Correct: ${correctAnswersCount} | Incorrect: ${incorrectAnswersCount}`;
}

function updateCounterDisplay() {
    const counterDisplay = document.getElementById('counter-display'); 
    counterDisplay.textContent = `Counter: ${counter}`; 
    updateCartoonDisplay(); 
}

function displayRandomImage() {
    const types = 'trewaqxbvscgfdhyznm'

    
    if (currentLevel < 2) {
        const types = 'aqxbvsgfd'
    } else if (currentLevel < 4) {
        const types = 'rewtahc'
    }
    console.log("Random Type Selected:", types);

    fetch(`api.php?cell=${encodeURIComponent(types)}`, {
        method: 'GET'
    })
        .then(response => {
            return response.json().then(data => {
                if (!response.ok) {
                    console.error('Error retrieving new cell:', data);
                    throw new Error('Network response was not ok: ' + response.statusText);
                }

                let cellImagePlaceholder = document.getElementById(cellImagePlaceholderID);
                cellImagePlaceholder.src = imgPath + data.path
                cellImagePlaceholder.alt = `Cell image of type ${data.type}`
                currentType = data.type

                // Log the current image type to the console
                console.log("Current Image Type:", currentType);
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });


}

function displayCellTypeButtons() {
    const buttonRow = document.getElementById(cellTypeButtonRowID);
    buttonRow.innerHTML = '';

    const filteredCellTypes = cellTypes.filter(cellType => cellType.key !== " " && cellType.key !== "y");

    for (const cellType of filteredCellTypes) {
        const button = document.createElement('button');
        button.className = 'cell-button';

        const img = document.createElement('img');
        img.src = iconPath + cellType.img;
        img.alt = `${cellType.desc}`;

        const keyText = document.createElement('span');
        keyText.className = 'cell-type-key'; 
        keyText.textContent = `[${cellType.key}]`; 
            
        const descText = document.createElement('span');
        descText.className = 'cell-type-text'; 
        descText.textContent = cellType.desc; 

        button.appendChild(img);
        button.appendChild(keyText); 
        button.appendChild(descText);

        button.addEventListener('click', function () { 
            checkAnswer(cellType.key); });
        buttonRow.appendChild(button);
    }
}




async function initializeCellImages(myJsonFileToLoad) {
    try {
        // fetch and load json file 
        const response = await fetch(myJsonFileToLoad);
        if (!response.ok) {
            throw new Error('Network response was not ok: the JSON file ' + myJsonFileToLoad + ' could not be loaded. Please check if it exists.');
        }
        const dataArray = await response.json();

        // copy data from the JSON into local variable
        for (const data of dataArray) {
            if (!cellImages[data.type]) {
                cellImages[data.type] = [];
            }
            cellImages[data.type].push(new CellImageMetaData(data));
        }
    } catch (error) {
        console.error('There was a problem with the fetch operation: ', error);
    }
}

async function initializeCellTypes(myJsonFileToLoad) {
    try {
        
        const response = await fetch(myJsonFileToLoad);
        if (!response.ok) {
            throw new Error('Network response was not ok: the JSON file ' + myJsonFileToLoad + ' could not be loaded. Please check if it exists.');
        }
        const dataArray = await response.json();
        
        for (const data of dataArray) {
            cellTypes.push(new CellTypeMetaData(data));
        }
    } catch (error) {
        console.error('There was a problem with the fetch operation: ', error);
    }
}

// Initialize game when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('start-game').addEventListener('click', function() {
        console.log("Start Game button clicked"); 
        document.getElementById('start-game-button').style.display = 'none'; 
        document.getElementById(cellImagePlaceholderID).style.display = 'block'; 
        startTimer(); 
        displayRandomImage(); 
    });
    
    initPage(); 
});

function openImage() {
    document.getElementById('image-overlay').style.display = 'flex';
}

function closeImage() {
    document.getElementById('image-overlay').style.display = 'none';
}

async function initPage () {
    await initializeCellImages(cellsJSON);
    await initializeCellTypes(cellTypesJSON);
    
    await loadCurrentLevel(); 

    
    // Hides the cell image and buttons until the Start Game button is clicked
    document.getElementById(cellImagePlaceholderID).style.display = 'none'; 
    document.getElementById('counter-display').textContent = counter;
    displayCellTypeButtons(); // Display all cell type buttons
    setupEventListeners() 
    createCircleCounter(counter);
}

// Start Game Button functionality
document.getElementById('start-game').addEventListener('click', function() {
    console.log("Start Game button clicked"); 
    // Clear any previous feedback message
    document.getElementById(feedbackElementID).textContent = ""; // Clear the feedback message
    isGameActive = true; // Set the game as active
    console.log("Game is now active:", isGameActive);
    document.getElementById('start-game-button').style.display = 'none'; 
    document.getElementById(cellImagePlaceholderID).style.display = 'block'; 
    timeRemaining = 60;
    document.getElementById('timer-display').textContent = `Time Left: ${timeRemaining} seconds`; 
    correctAnswersCount = 0; 
    incorrectAnswersCount = 0; 
    createCircleCounter(counter); 
    startTimer(); 
    displayRandomImage(); 
});

function startTimer() {
    timeRemaining = calculateTimeForLevel(currentLevel); 
    document.getElementById('timer-canvas').style.display = 'block';
    clearInterval(timerInterval); 
    timerInterval = setInterval(() => {
        timeRemaining--; 
        const percentage = Math.max(0, timeRemaining) / calculateTimeForLevel(currentLevel);
        drawTimerCanvas(percentage);
        if (timeRemaining <= 0) {
            
            clearInterval(timerInterval);
            isGameActive = false; // Set the game as inactive
            console.log("Game is now active:", isGameActive);

            // Reset counter and remaining cells here
            counter = 10; 
            document.getElementById('counter-display').textContent = counter; 
            createCircleCounter(counter);

            document.getElementById(feedbackElementID).textContent = 'Time is up! Try again!'; 
            document.getElementById(cellImagePlaceholderID).style.display = 'none'; 
            document.getElementById('start-game-button').style.display = 'block'; 
        }
    }, 1000); 
}


function createCircleCounter(numCircles) {
    const circleCounter = document.getElementById('circle-counter');
    circleCounter.innerHTML = ''; 

    
    for (let i = 0; i < numCircles; i++) {
        const circle = document.createElement('div');
        circle.className = 'circle'; 
        circleCounter.appendChild(circle); 
    }
}


function handleKeyboardInput(event) {
    const keyPressed = event.key.toLowerCase(); 
    for (const cellType of cellTypes) {
        if (cellType.key === keyPressed) {
            checkAnswer(cellType.key); 
            break; 
        }
    }
}


function calculateTimeForLevel(level) {
    const k = 1.1; // adjust 'k' for more or less drastic change in remaining time
    return Math.floor(30 * (1 / Math.pow(k, level - 1))); 
}

function preloadImage(src) {
    return new Promise((resolve, reject) => {
        const img = new Image();
        img.src = src;
        img.onload = () => resolve(); 
        img.onerror = () => reject(new Error(`Image load error: ${src}`)); 
    });
}

// initialize event listeners
function setupEventListeners() {
    document.addEventListener('keydown', handleKeyboardInput);
}

