<?php

$belanja = 90000;

if ($belanja >= 100000) {
    echo "Selamat anda mendapatkan hadiah A";
} elseif ($belanja >= 90000) {
    echo "Selamat anda mendapatkan hadiah B";
} elseif ($belanja >= 80000) {
    echo "Selamat anda mendapatkan hadiah C";
} elseif ($belanja >= 70000) {
    echo "Selamat anda mendapatkan hadiah D";
} else {
    echo "Anda kurang beruntung";
}

switch ($belanja) {
    case $belanja >= 100000: 
        echo "Selamat anda mendapatkan hadiah A"; 
        break;

    case $belanja >= 90000: 
        echo "Selamat anda mendapatkan hadiah B"; 
        break;

    case $belanja >= 80000: 
        echo "Selamat anda mendapatkan hadiah c"; 
        break;

    default:
        echo "Anda kurang beruntung"; 
        break;
    }
    
    echo "Apakah kamu suka cokelat?<br>"; 
    $suka = false; 
    echo $suka? "Aku juga suka!" : "Sayang sekali";
?>