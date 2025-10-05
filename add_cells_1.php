<?php

/* Script to add all cells inside the directory images/cells */
/* Run from this programs root directory with the command "php add_cells.php" from the command line */
require('backend.php');
if (!User::current()->uid==1) exit('INVALID USER!');

if (!php_sapi_name() == "cli") {
    // enforce this script is only called by the command line
    echo("ERROR: call this file only via cli");
    exit();
}
foreach (scandir("images/cells") as $file) {
    if (preg_match("/^cell[ \w]_\w+\.png$/", $file)) {
        if (Cell::exists($file)) {
            print("Cell " . $file . " already exists, skipping.\n");
        } else {
            $cell = new Cell(0, $file, substr($file, 4, 1), 0);
            $cell->save();
            print("Cell ".$cell->path." created with cell-id ".$cell->cid.".\n");
        }
    }
}

?>