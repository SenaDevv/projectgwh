<?php
$namaHeroMl = "Zhask";
$Level = 6;

switch ($Level) {
    case 1:
    case 2:
    case 3:
        echo "Nama Hero: ".$namaHeroMl." <br>Level: ".$Level." <br>Hero belum bisa memakai ulti";
        break;
    case 4:
    case 5:
        echo "Nama Hero: ".$namaHeroMl." <br>Level: ".$Level." <br>Hero sudah bisa memakai ulti";
        break;
    
    default:
        echo "Invalid jir";
        # code...
        break;
}
?>