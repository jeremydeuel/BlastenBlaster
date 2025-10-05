<?php
require_once('backend.php');
if (!User::current()->id==1) exit('INVALID USER!');
foreach(scandir('images/cells') as $i) {
    if (strlen($i)<10) continue;
    print($i);
    $type = $i[4];
    $confidence = 1;
    $path = 'images/cells/' . $i;
    $cell = Cell::exists($path);
    if (!is_null($cell)) {
        print(" exists with id=");
        print($cell->id);
        print("<br />");
        continue;
    }
    $cell = new Cell(0, $path, $type, $confidence);
    $cell->create();
    print(" created with id=");
    print($cell->id);
    print("<br />");
}
?>
Done.