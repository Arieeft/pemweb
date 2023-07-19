<?php
// 1. For
for ($i=0; $i < 10; $i++) { 
    echo "Perulangan ke-$i<br>";
}
echo "<hr>";

// 2. While
$a = 0;
while ($a <= 10) { 
    echo "Perulangan ke-$a<br>"; 
    $a++;
}
echo "<hr>";

// 3. Do While
$b = 10;
do {
    echo "Perulangan ke-$b<br>";
    $b--;
} while ($b >= 0);
echo "<hr>";

// 4. Foreach
$makanan = ["Ayam", "Bebek", "Ikan"];
foreach ($makanan as $menu) {
    echo $menu."<br>";
}
?>