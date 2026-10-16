<?php
$namaHeroMl = "Zhask";
$Level = 6;
    if ($Level < 4) {
        echo "Nama Hero: ".$namaHeroMl." <br>Level: ".$Level." <br>Hero belum bisa memakai ulti";
    } else if ($Level >= 4) {
        echo "Nama Hero: ".$namaHeroMl." <br>Level: ".$Level." <br>Hero sudah bisa memakai ulti";
    } else {
        echo "Invalid jir";
    }
?>