<?php
// 1. Membuat Variabel
$var1 = 'Naufal';
// a. Awalannya tidak menggunakan angka atau simbol
// $!var = "wow";
// $7var = 20;
// b. Awalan dapat menggunakan simbol uderscore ( _ )
$_var = "WOW"; 
// c. Kalau variabel terdiri 2 suku kata maka dapat menggunakan underscore atau camelCa
$var_nama = "Naufal"; 
$varNama = "Naufal"; 

// d. Bersifat case sensitive
$rumah = "Cluster A";
$Rumah = "Cluster B"; 
// 2. Mengambil Variabel
$var2 = "Bambang"; 
$var2 = "Arie"; 
echo "Nama saya $var2 <br>";
echo 'Nama saya ' . $var2 . '<br>';
// 3. Tipe Data
// a. String = Kalimat
// b. Char K
// c. Integer = Angka
// d. Float Pecahan =
// e. Boolean = True/False
// f. Objek
// g. Array Menyimpan banyak data =
// h. NULL = Menyimpan data kosong $varString "Naufal"; =
$varInt = 90;
$varFloat = 90.0; 
$varBoolean = True;

// $varObjek = new User();
$varArray1 = array ("Nasi", "Rendang", "Capcay");
$varArray2 = ["Nasi", "Rendang", "Capcay"];
$varNull = NULL;
echo "varNull = $varNull <br>";
echo 'Tipe Data: '.gettype($varNull). '<br>';

// 4. Konversi Tipe Data
$varAngka = 90;
$varAngka = (string) $varAngka; 
$varAngka = (double) $varAngka;
echo "varAngka $varAngka, Tipe datanya adalah: ". gettype($varAngka) . "<br>";

// 5. Menghapus Variabel 
$varData = "Mahasiswa"; 
echo $varData."<br>"; 
unset ($varData); 
echo $varData;
?>