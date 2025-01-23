const imgPath = "images/cells/";
const iconPath = "images/cell_types/";
const cellsJSON = "images/cells.json";
const cellTypesJSON = "images/types.json";

const cellImagePlaceholderID = "cell-image";
const cellTypeButtonRowID = "cell-type-buttons";
const feedbackElementID = "feedback";
const feedbackCommentID = "feedback-comment";



const gameLevel = [['d','f','a','x','c','h'], ['d','f','a','x','c','h','p','b','v','s','g'],['d','f','a','x','c','h','p','b','v','s','g','n','m','t','r','e','w']];

let cellImages = [];
let cellTypes = [];
let currentType = null;
let selectedLevel = 0; 
let correctAnswersCount = 0; 
let incorrectAnswersCount = 0; 



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
    const feedbackComment = document.getElementById(feedbackCommentID); 
    const bannerElement = document.getElementById("banner");
    console.log("Hallo");


    const guessStatus = encodeURIComponent(selectedAnswer);
    const currentCid = encodeURIComponent(currentType);
    
    // Fetch request to store current answer and type
    fetch(`api.php?cid=${currentCid}&guess=${guessStatus}`, {
        method: 'GET'
    })
    .then(response => {
        return response.json().then(data => {
            if (!response.ok) {
                console.error('Error storing answer:', data);
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            // Handle response if needed
            console.log('Answer stored successfully:', data);
        });
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });



    if (selectedAnswer === currentType) {
        feedbackElement.textContent = "Richtig!"; 
        feedbackElement.style.color = "green"; 
        bannerElement.style.display = "none"; 
        setTimeout(() => {
            feedbackElement.textContent = ""; 
            displayRandomImage(gameLevel[selectedLevel]); 
        }, 1000);

        
    } else {
        feedbackElement.textContent = `Falsch! Probier's nochmal!`; 
        feedbackElement.style.color = "red"; 

        bannerElement.style.display = "block";
        bannerElement.innerHTML = `
            Der Zelltyp welcher du gewählt hast würde so aussehen:<br />`
        // Get  three random images of selected anser if incorrect answer
        for (let i=0; i<3; i++) {
            console.log(`Fetching random image ${i} from api.php?cell=${encodeURIComponent(selectedAnswer)}`)
            fetch(`api.php?cell=${encodeURIComponent(selectedAnswer)}`, {
                method: 'GET'
            })
                .then(response => {
                    return response.json().then(data => {
                        if (!response.ok) {
                            console.error('Error retrieving new cell:', data);
                            throw new Error('Network response was not ok: ' + response.statusText);
                        }
                        console.log(data)
                        let img = document.createElement('img')
                        img.src = imgPath + data.path
                        img.style='border-radius: 128px;width: 128px; height: 128px; margin: 10px;'
                        bannerElement.appendChild(img)
                    });
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
    }
    
   // console.log(selectedAnswer); // Debugging
}











function displayRandomImage (types) {
    // Fetch request to store current answer and type
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
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    
}

function getFirstThreeImages(cellType) {

    const images = cellImages[cellType]; 
    if (images && images.length > 0) {
        return images.slice(0, 3); 
    }
    return []; 
}




function displayCellTypeButtons() {
    const buttonRow = document.getElementById(cellTypeButtonRowID);
    buttonRow.innerHTML = '';

    const keysForCurrentLevel = gameLevel[selectedLevel];

    for (const cellType of cellTypes) {
        if (keysForCurrentLevel.includes(cellType.key)) {
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

            button.addEventListener('click', function () { checkAnswer(cellType.key); });
            buttonRow.appendChild(button);
        }
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


function setupLevelSelector() {
    const levelSelect = document.getElementById("level-select");
    console.log("selectedLevel")
    
    selectedLevel = parseInt(levelSelect.value);

    
    levelSelect.addEventListener('change', function() {
        selectedLevel = parseInt(levelSelect.value); 
        displayRandomImage(gameLevel[selectedLevel]); 
        displayCellTypeButtons(); 
    });
}


function closeImage() {
    document.getElementById('image-overlay').style.display = 'none';
}


async function initPage () {
    await initializeCellImages(cellsJSON);
    await initializeCellTypes(cellTypesJSON);
    setupEventListeners(); 
    setupLevelSelector(); 
    displayRandomImage(gameLevel[selectedLevel]);
    displayCellTypeButtons();
    
}


// handle keyboard input for selecting answers
function handleKeyboardInput(event) {
    const keyPressed = event.key.toLowerCase(); 

    
    for (const cellType of cellTypes) {
        if (cellType.key === keyPressed) {
            checkAnswer(cellType.key); 
            break; 
        }
    }
}


// initialize event listeners
function setupEventListeners() {
    
    setupLevelSelector();

    
    document.addEventListener('keydown', handleKeyboardInput);
}


document.addEventListener('DOMContentLoaded', async function() {
    await initPage(); 
});