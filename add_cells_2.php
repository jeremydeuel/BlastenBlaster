<html>
<head></head>
<body>
<ul>
<?php

/* Script to add all cells inside the directory images/cells */
/* Run from this programs root directory with the command "php add_cells.php" from the command line */
require('backend.php');
if (!User::current()->uid==1) exit('INVALID USER!');


$known_cells = array();

$stmt = $db->query("SELECT count(id) AS count from cells WHERE confidence<1")->fetchAll();

$n_new = 1000-$stmt[0]['count'];




print("<h1>Adding ".$n_new." cells</h1>");
if ($n_new>0) {
    # calculate image hashes from cells
    $stmt = $db->query("SELECT path FROM cells;")->fetchAll();
    foreach ($stmt AS $file) {
        array_push($known_cells, hash_file("sha256",$file['path']));
    }
    $new_cells = scandir("images/cells2");
    shuffle($new_cells);
    foreach ($new_cells as $file) {
        if (preg_match("/^cell[ \w]_\w+\.png$/", $file)) {
            if (in_array(hash_file('sha256', 'images/cells2/'.$file), $known_cells)) {
                print("<li>Cell " . $file . " already in old cells, skipping.<li>");
            };
            if (Cell::exists($file)) {
                print("<li>Cell " . $file . " already exists, skipping.</li>");
            } else {
                #$cell = new Cell(0, "images/cells2/".$file, substr($file, 4, 1), 0);
                #$cell->save();
                print("<li>".$n_new.": Cell ".$file." created with cell-id ".$cell->id.".</li>");
                $n_new = $n_new -1;
                if ($n_new<0) {
                    print("<li><b>DONE, all cells imported</b></li>");
                    break;
                }
                
            }
        } else {
            print("<li><i>File ".$file." does not match pattern, skipping</i></li>");
        }
}

}



?>
</ul>
</body>
</html>