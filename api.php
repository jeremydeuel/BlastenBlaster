<?php
require_once('backend.php');
header('Access-Control-Allow-Origin: *');

if (in_array('return', array_keys($_GET))) {
    header("Location: /");
    die();       
}
if (in_array('cell', array_keys($_GET))) {
    /*
     * API call to get a random cell
     * API api.php?cell=types
     * types = string with concatenated cell types, e.g. api.php?cell=fga
     */
     if (in_array('competition',array_keys($_GET))) {
        $cell = Cell::get_random_competition_cell($_GET['cell']);
        header("Content-Type: application/json");
        $j = $cell->competition_json();
        echo $j;
        exit();
     }
    $cell = Cell::get_random_cell($_GET['cell']);
    header("Content-Type: application/json");
    echo $cell->json();
    exit();
} elseif (in_array('cid', array_keys($_GET)) & in_array('guess', array_keys($_GET))) {
    /*
     * API call to record a single guess
     * stores the user if logged in.
     * api.php?cid=[cid]&guess=[guess]
     * cid = integer, cell-id
     * guess = guessed cell type, string
     * user id is inferred from session if logged in. Otherwise this is set to 0.
     */
    $cell = Cell::get($_GET['cid']);
    if (is_null($cell)) {
        echo json_encode(array('error'=>'invalid cell'));
        exit();
    }
    if (!is_null(User::current())) {
        add_guess($_GET['cid'], User::current()->id, $_GET['guess'], User::current()->proficiency);
    }
    header("Content-Type: application/json");
    if ($cell->type==$_GET['guess'] or $cell->confidence < 1) { #always return true for cells with confidence < 1
        echo json_encode(array('correct'=>true));
        exit();
    }
    echo json_encode(array('correct'=>false, 'guess'=>$_GET['guess'], 'correct_answer'=>$cell->type ));
    exit();
} elseif (in_array('user', array_keys($_GET))) {
    header("Content-Type: application/json");
    if (User::current()) {
        echo json_encode(array('uid'=>User::current()->id,
            'username'=> User::current()->username,
            'proficiency' => User::current()->proficiency));
    } else {
        echo json_encode(array('id'=>'0', 'username'=> null, 'proficiency'=>0));
    }
    exit();
    
} elseif (in_array('score',array_keys($_GET))) {
    header("Content-Type: application/json");
    if (User::current()) {
        if (in_array('proficiency',array_keys($_GET))) {
            User::current()->addScore(intval($_GET['score']),intval($_GET['proficiency']));
        } else {
            User::current()->addScore(intval($_GET['score']),0);
        }
        
        echo json_encode(array('uid'=>User::current()->uid,
            'username'=> User::current()->username,
            'proficiency' => User::current()->proficiency));
    } else {
        echo json_encode(array('error'=> 'not logged in'));
    }
    exit();

}

?> ERROR: INVALID API REQUEST