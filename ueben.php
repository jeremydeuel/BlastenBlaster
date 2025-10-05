<?php
require_once("backend.php");
include("base_layout.php");
?>
<body>
<title><?php echo $_['practice mode'];?></title>
<style>
    body {
        background-color: #202124;
        color: #fff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        text-align: center;
        max-width: 1000px;
        margin: 50px auto;
        padding: 20px;
        background-color: #333;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .game-screen {
        display: block; /* Ensure the game is not visible initially */
    }
    
    h1 {
        margin-bottom: 20px;
        font-size: 2em; /* Default header size */
    }

    .blood-cell-image {
        max-width: 100%;
        width: 200px; /* Fixed width */
        height: 200px; /* Fixed height */
        border-radius: 50%; /* Makes it round */
        object-fit: cover; /* Ensures the image covers the entire area without stretching */
        margin-bottom: 30px;
    }

    button {
        background-color: #444;
        color: #fff;
        border: none;
        padding: 10px;
        margin: 3px;
        border-radius: 1px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-align: justify;
        display: flex; /* Use flexible box for alignment */
        align-items: center; /* Center items vertically */
    }

    button:hover {
        background-color: #555;
    }

    select {
        width: 100px;  
        height: 50px; 
        text-align: start;
        margin-bottom: 20px;
    }

    .button-row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .cell-button img {
        width: 40px;  
        height: 40px; 
        margin-right: 10px; 
        object-fit: contain; 
    }

    .overlay {
            position: fixed;
            top: 60px;
            left: 0;
            width: 100%;
            height: calc(100%-50px);
            background-color: rgba(0, 0, 0, 0.8);
            display: none;  /* Hidden by default */
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Make sure it's on top */
        }

        .overlay img {
            max-width: 90%; /* Responsive image */
            max-height: 90%;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #f00;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        button.open-image {
            
            top: 20px;
            right: 20px;
            background-color: #444;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        button.open-image:hover {
            background-color: #555;
        }  

    /* Mobile Styles */
    @media (max-width: 767px) {
        body {
            background-color: #f0f0f0; /* Change background for mobile */
        }

        .container {
            padding: 10px; /* Less padding on mobile */
            font-size: 90%; /* Slightly smaller font size */
        }

        h1 {
            font-size: 1.5em; /* Set header size smaller for mobile */
            margin-bottom: 10px; /* Adjust the spacing below the header */
        }

        .cellType.desc {
        display: none; /* Hide text on mobile devices */
        }

        .blood-cell-image {
            width: 120px; /* Adjust size of images on mobile */
            height: 120px;
        }

        button {
            padding: 0; /* Remove padding for the buttons for mobile */
            width: 60px; /* Set a specific width for buttons */
            height: 60px; /* Set a specific height for buttons */
            margin: 5px; /* Slight margin for spacing */
        }

        .cell-button img {
            width: 50px; /* Adjust icon size for mobile */
            height: 50px; /* Adjust icon size */
            margin-right: 0; /* No margin on the right since text is removed */
        }

        /* Assuming you have a class for the buttons without text */
        .cell-button span {
            display: none; /* Hide text for buttons on mobile */
        }

        select {
            width: 100%; /* Full-width select for mobile */
            height: 20px;
        }
    }

    /* Desktop Styles */
    @media (min-width: 768px) {
        /* Desktop-specific styles can go here, but your existing styles apply by default */
        button {
            padding: 10px; /* Default button padding on desktop */
        }
        
        .blood-cell-image {
        max-width: 60%;
        width: 200px; /* Fixed width */
        height: 200px; /* Fixed height */
        border-radius: 50%; /* Makes it round */
        object-fit: cover; /* Ensures the image covers the entire area without stretching */
        margin-bottom: 10px;
        }
    }
    
    .blastenblaster-menubar a {
    color: #aaaaaa!important;
    }
    .blastenblaster-menubar svg {
    color: #aaaaaa!important;
  -webkit-filter: invert(100%); /* safari 6.0 - 9.0 */
          filter: invert(100%);
    }
</style>
</head>
<body>
<div class="container py-3">
    <header class="text-white">
        <?php include('menubar.php'); ?>
    </header>
    <script>
    const cellTypesJSON = "<?php echo $_['celltypes file path'];?>";
    const langDict = <?php echo json_encode($_['js lang']);?>;
</script>
    <script type="text/javascript" src="script.js?v=3"></script>

    <div class="container">
    <script>
    function openImage() {
    document.getElementById('image-overlay').style.display = 'flex';
}
    </script>
        <div class="game-screen" id="game-container">
            <button class="open-image" onclick="openImage()"><?php echo $_['keyboard'];?></button>
            <h1><?php echo $_['which celltype'];?></h1>
            <label for="level-select"><?php echo $_['choose level'];?></label>
            <div>
                <select id="level-select">
                    <option value="0"><?php echo $_['level'];?> 1</option>
                    <option value="1"><?php echo $_['level'];?> 2</option>
                    <option value="2"><?php echo $_['level'];?> 3</option>
                </select>
                
            </div>
            
            <img src="" id="cell-image" class="blood-cell-image" alt="Cell Image">
            <div class="button-row" id="cell-type-buttons"></div>
            <div id="feedback" style="margin-top: 20px; font-size: 20px;"></div>
            <div id="feedback-comment" style="margin-top: 20px; font-size: 20px;"></div>
            <div id="banner" style="display: none;"><?php echo $_['would look like'];?>:</div>
        </div>
    </div>

    <div class="overlay" id="image-overlay">
        <button class="close-btn" onclick="closeImage()">X</button>
        <img id="overlay-image" src="images\KeyboardWithIcons.png" alt="Overlay Image">
    </div>
    
  
    </body>
    </html>