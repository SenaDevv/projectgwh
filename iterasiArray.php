<?php
    $hero = [
        "role" => ["Warrior", "Tank", "Assassin", "Mage", "Support"],
        "weapon" => ["Sword", "Shield", "Dagger", "Staff", "Bow"],
        "weaponDmg" => [100, 150, 200, 120, 80]
    ];

    foreach ($hero as $key => $value) {
        foreach ($value as $val) {
            echo $val."<br />";
        }
        // echo $hero[$key][2]."<br>";
    }
    //  echo $hero["role"][4]."<br>";
    // var_dump($hero)."<br>";
?>