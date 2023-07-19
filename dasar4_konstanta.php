<?php
// $var = 10;
// $var = 20;

// const SEBUAH_NILAI = 5;

// SEBUAH NILAI = 10;
// API_KEY

// const PHI = 3.14;
const API_KEY = "214323463423417697";

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'rahasia123');
define('DB_NAME', 'perpustakaan');

echo "Nama Server: ". DB_SERVER. "<br>";
echo "API KEY: ". API_KEY . "<br>";

//Contoh penerapan konstanta 
define('VERSION', '2.3.0');

const SITE_NAME = "SMK Telkom Jakarta";
const BASE_URL = "https://www.smktelkom-jkt.sch.id";

echo "Site name: ". SITE_NAME . "<br>"; echo "URL: " . BASE_URL . "<br>"; 
echo "Version: ". VERSION. "<br>";
?>