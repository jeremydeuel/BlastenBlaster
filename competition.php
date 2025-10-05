<?php
require_once("backend.php");
if (is_null(User::current()->username)) {
    header('Location: /login.php');
    die();
}
include("base_layout.php");

?>
<style>
.blood-cell-image {
    max-width: 100%;
    width: auto; 
    height: auto; 
    border-radius: 50%; 
    object-fit: cover; 
    margin: 2px; 
    display: block; 
    #margin-top: calc(50%);
}
button {
        background-color: #E7E7E7;
        color: #0028A5;
        border: none;
        padding: 10px;
        margin: 3px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-align: justify;
        align-items: center; 
    }

button:hover {
    background-color: #BDC9E8;
}

    #timer-display {
            font-size: 20px;
            color: #BF0D3E;
            margin-top: 20px;
            height: auto;
            width: auto;
        }
    #timer-canvas {
    margin: 2px; 
    height: 100px;
    width: 100px;

        }

    .circle {
    width: 20px!important; 
    height: 20px!important; 
    border-radius: 50%; 
    margin: 2px; 
    background-color: #662288;
    border: 3px solid #8888ff;
    float: left;
        }
        
    #circle-counter {
    height: 50px;
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
        #image-container {
    height: 200px; 
    display: flex;
    justify-content: center; 
    align-items: center;
    margin-bottom: 20px;
    }
    #cell-image-container {
        justify-content: center;
        align-items: center;
        min-width: 200px;
    }
    #mainrow {
        height: 300px;
    }
    @media (max-width: 767px) {
        .cellType.desc {
        display: none; 
        }
        #mainrow {
            height: auto;
        }
        button {
            padding: 0; 
            width: 50px; 
            height: 50px; 
            margin: 5px; 
        }
        #start-game {
            width: 135px;
            padding-left: 20px;
        }
        .cell-button span {
            display: none; 
        }
         .cell-button img {
            width: 100%; 
            height: 100%; 
        }
    }
    @keyframes fadeInOut {
        0% { opacity: 0; transform: scale(1); }
        50% { opacity: 1; transform: scale(3); } /* Scale up to 150% */
        100% { opacity: 0; transform: scale(1); }
        }
    .highlight-level {
        animation: fadeInOut 3s ease;  /* Set the duration and easing of the animation */
        color: #A4D233;  /* Change this color to whatever you prefer */
        font-size: 100px; /* Change font size to make it more visible */
        font-weight: bold; /* Optionally make the text bold */
    }
</style>
<body>
<div class="container py-3">
  <header>
    <?php include('menubar.php'); ?>
  </header>
  <main>
  <div class="row" id="mainrow">
    <div class="col-5">
        <div class="row">
            <div class="col-12"><?php echo $_['level'];?>: <span id="level">LEVEL</span></div>
            <div class="col-12"><?php echo $_['remaining cells'];?>: <span id="counter-display">ZELLEN</span></div>
            <div id="circle-counter"></div>
            <div class="col-12">
                <div id="start-game-button">
                    <button id="start-game"><?php echo $_['start game'];?></button>
                </div>
                <canvas id="timer-canvas" width="100" height="100"></canvas>
                <div id="feedback" style="margin-top: 2px; font-size: 12pt;">&nbsp;</div>
            </div>
        </div>
      </div>
    
    <div class="col-7" id="cell-image-container">
        <img src="" id="cell-image" class="blood-cell-image" alt="Cell Image">
    </div>
  </div>
  <div class="button-row" id="cell-type-buttons"></div>

  </main>
    
    <script>
    const cellTypesJSON = "<?php echo $_['celltypes file path'];?>";
    const langDict = <?php echo json_encode($_['js lang']);?>;
</script>
    <script src="competition.js?v=14"></script>
    </main>
    </div>
</body>
</html>