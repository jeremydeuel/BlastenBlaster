const imgPath = "";
const iconPath = "images/cell_types/";
const cellImagePlaceholderID = "cell-image";
const cellTypeButtonRowID = "cell-type-buttons";
const feedbackElementID = "feedback";

let cellImages = [];
let cellTypes = [];
let currentCid = null
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

function alternativeMapping(key) {
    switch (key) {
        case '0': return 't';
        case '/': return 'r';
        case '*': return 'e';
        case '+': return 'w';
        case '-': return 'g';
        case '1': return 'b';
        case '2': return 'v';
        case '3': return 's';
        case '4': return 'x';
        case '5': return 'a';
        case '6': return 'd';
        case '.': return 'f';
        case '7': return 'h';
        case '8': return 'c';
        case '9': return 'q';
        default: return key;
    }
}


function checkAnswer(selectedAnswer) {
    if (!isGameActive) return;
    selectedAnswer = alternativeMapping(selectedAnswer);
    const feedbackElement = document.getElementById(feedbackElementID); 
    const counterDisplay = document.getElementById('counter-display'); 

    const guessStatus = encodeURIComponent(selectedAnswer);
    
        fetch(`api.php?cid=${currentCid}&guess=${guessStatus}`, {
        method: 'GET'
    })
    .then(response => {
        return response.json().then(data => {
            if (!response.ok) {
                console.error('Error storing answer:', data);
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            if (data.correct) {
                feedbackElement.textContent = langDict['correct!']; 
        feedbackElement.style.color = "green"; 
        correctAnswersCount++;
        incorrectAnswersCount = 0;

        if (counter > 0) {
            counter -= 1; 
            createCircleCounter(counter); 
        }
        
        counterDisplay.textContent = `${counter}`; 

        setTimeout(() => {
            feedbackElement.textContent = " "; 
        }, 1500);

        // Check if counter has reached 0
        if (counter === 0) {
            clearInterval(timerInterval);
            document.getElementById('timer-canvas').style.display = 'none';  
            currentLevel++; 
            const levelElement = document.getElementById('level');
    
            
            levelElement.classList.add('highlight-level');
            levelElement.textContent = `${currentLevel}`; 

            
            setTimeout(() => {
            levelElement.classList.remove('highlight-level');
            }, 1500); 
     
            storeCurrentLevel(); 
            counter = 10; 
            isGameActive = false; 
             // Hide the cell image when moving to the next level
            document.getElementById(cellImagePlaceholderID).style.display = 'none';
            document.getElementById('start-game-button').style.display = 'block'; 
            feedbackElement.textContent += langDict['next level'];
            createCircleCounter(counter);
            //console.log("Game is now active:", isGameActive);
            setTimeout(() => {
                feedbackElement.textContent = " "; 
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
                feedbackElement.textContent = " ";
                //console.log("Game is now active:", isGameActive);
                if (isGameActive) { 
                    displayRandomImage(); 
                }    
            }, 100);  
        }
            } else { // answer not correct
                
        incorrectAnswersCount++; 
        if (currentLevel >= 4) {
            counter += 2; 
        }

        feedbackElement.textContent = langDict['try again']; 
        feedbackElement.style.color = "#BF0D3E"; 
        
        // Check if the user has guessed incorrectly twice
        if (incorrectAnswersCount === 2) {
            feedbackElement.textContent = langDict['try another']; 
            feedbackElement.style.color = "#F3AB00";
            
            
            
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
            //console.log('Answer stored successfully:', data);
        });
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
    return;
    
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
    context.fillStyle = '#E7E7E7'; 
    context.fill();

    // Draw progress arc
    context.beginPath();
    context.arc(centerX, centerY, radius, -Math.PI / 2, (-Math.PI / 2) + (Math.PI * 2 * percentage), false);
    context.lineTo(centerX, centerY);
    context.fillStyle = '#A4D233'; 
    context.fill();
    context.fillStyle = '#0028A5'; 
    context.font = '20px Arial'; 
    context.textAlign = 'center'; 
    context.textBaseline = 'middle'; 
    context.fillText(`${Math.max(0, timeRemaining)}`, centerX, centerY); 
}

function storeCurrentLevel() {
    console.log("Storing current level..."); // Verify function execution

    fetch(`api.php?score=${currentLevel}&proficiency=${currentLevel}`, {
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
        const response = await fetch("api.php?user", {
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
        if (data.username == undefined) {
            window.location = '/login.php';
        }
    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
        currentLevel = 1; // Defaulting to level 1 on error
    }
}

function updateScoreBoard() {
    const scoreBoard = document.getElementById('score-board');
    scoreBoard.textContent = `${langDict['correct']}: ${correctAnswersCount} | ${langDict['incorrect']}: ${incorrectAnswersCount}`;
}

function updateCounterDisplay() {
    const counterDisplay = document.getElementById('counter-display'); 
    counterDisplay.textContent = `${langDict['counter']}: ${counter}`; 
    updateCartoonDisplay(); 
}

function displayRandomImage() {
    const types = 'trewaqxbvscgfdhyznm'
    if (currentLevel < 2) {
        const types = 'aqxbvsgfd'
    } else if (currentLevel < 4) {
        const types = 'rewtahcaqxbvsgfd'
    }

    fetch(`api.php?cell=${encodeURIComponent(types)}&competition`, {
        method: 'GET'
    })
        .then(response => {
            return response.json().then(data => {
                if (!response.ok) {
                    console.error('Error retrieving new cell:', data);
                    throw new Error('Network response was not ok: ' + response.statusText);
                }
                //console.log("current cell", data)
                let cellImagePlaceholder = document.getElementById(cellImagePlaceholderID);
                cellImagePlaceholder.src = imgPath + data.path
                cellImagePlaceholder.alt = `Cell image of type ${data.type}`
                currentCid = data.cid
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
        //console.log("Start Game button clicked"); 
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
    //console.log("Start Game button clicked"); 
    // Clear any previous feedback message
    document.getElementById(feedbackElementID).textContent = ""; // Clear the feedback message
    isGameActive = true; // Set the game as active
    //console.log("Game is now active:", isGameActive);
    document.getElementById('start-game-button').style.display = 'none'; 
    document.getElementById(cellImagePlaceholderID).style.display = 'block'; 
    timeRemaining = 60;
    //document.getElementById('timer-display').textContent = `Time Left: ${timeRemaining} seconds`; 
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
            //console.log("Game is now active:", isGameActive);

            // Reset counter and remaining cells here
            counter = 10; 
            document.getElementById('counter-display').textContent = counter; 
            createCircleCounter(counter);

            document.getElementById(feedbackElementID).textContent = langDict['timeOver']; 
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
    if ('abcdefghijklmnopqrstuvwxyz1234567890./+*-'.includes(keyPressed)) {
     checkAnswer(keyPressed);
    }
}


function calculateTimeForLevel(level) {
    const k = 1.1; // adjust 'k' for more or less drastic change in remaining time
    return Math.floor(60 * (1 / Math.pow(k, level - 1))); 
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

