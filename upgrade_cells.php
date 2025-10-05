<?php



/* Script to add all cells inside the directory images/cells */
/* Run from this programs root directory with the command "php add_cells.php" from the command line */
require('backend.php');
if (!User::current()->id==1) exit('INVALID USER!');

if (isset($_POST) && array_key_exists('method',$_POST)) {
    $stmt = $db->prepare('UPDATE cells SET type=:type, confidence=1 WHERE id=:id');
    $stmt->bindParam(':type', $_POST['new_type'], PDO::PARAM_STR);
    $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
    $stmt->execute();
    print(json_encode($_POST));
    exit(0);
}

?>
<html>
<head>
<style>
body {font-family: Helvetica, Arial, sans-serif}
.cell_div {
margin: 3px;
padding: 5px;
border: 1px solid #888888;
float: left;
}
</style>
</head>

<body>
<script language="javascript">

change_cell = (id, new_type) => {
    let formData = new FormData()
    formData.append('method', 'change_cell');
    formData.append('id', id);
    formData.append('new_type', new_type);
    fetch("upgrade_cells.php", {
        method: "POST",
        body: formData
    }).then((response) => {
        console.log(response);
        return(response.text());
    }).then((json) => {
        console.log(json);
        ignore_cell(id);
    });
}

ignore_cell = (id) => {
    document.getElementById(`cell_${id}`).remove();
}
</script>
<?php

$cells = $db->query('SELECT id, path, confidence, cells.type AS type, JSON_ARRAYAGG(guesses.type) AS guess FROM guesses LEFT JOIN cells on guesses.cid = cells.id WHERE proficiency > 2 AND (cells.type <> guesses.type OR confidence < 1) GROUP BY uid, date, cid HAVING count(guesses.type) > 3')->fetchAll();

foreach ($cells as $cell) {
    
    $guesses = array();
    #$n_guesses = count($cell['guess']);
    $n = 0;
    foreach (json_decode($cell['guess']) as $guess) {
        if (!array_key_exists($guess,$guesses)) {
            $guesses[$guess] = 0;
        }
        $guesses[$guess] += 1;
        $n++;
    }
    
    $best_guess = "None";
    $best_guess_n = 0;
    
    foreach(array_keys($guesses) as $key) {
        if ($guesses[$key] > $best_guess_n) {
            $best_guess = $key;
            $best_guess_n = $guesses[$key];
        }
    }
    
    if ($best_guess_n/$n < 0.7) continue;
    if ($best_guess == $cell['type']) continue;
    
    print('<div class="cell_div" id="cell_'.$cell['id'].'"><img src="'.$cell['path'].'" width="256" height="256" /><br />Orig: '.$cell['type'].'<br />New: '.$best_guess.' ('.$best_guess_n.' of '.$n.')<br />Confidence: '.$cell['confidence'].'<br /><a href="javascript:change_cell('.$cell['id'].',\''.$best_guess.'\');">Change</a> | <a href="javascript:ignore_cell('.$cell['id'].');">Ignore</a></div>');
}

?>
</body>
</html>