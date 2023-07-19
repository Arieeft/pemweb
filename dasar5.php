<?php

// 1. Pengisian Nilai =
$a = 5;

// 2. Pengisian dan Penambahan +=
// $a = $a + 10;
$a += 2;
echo $a;
echo "<hr>";

// 3. Pengisian dan Pengurangan ==
$a -= 2;
echo $a;
echo "<hr>";

// 4. Pengisian dan Perkalian *=
$a *= 2;
echo $a;
echo "<hr>";

// 5. Pengisian dan Pembagian /=
$a /= 2;
echo $a;
echo "<hr>";

// 6. Pengisian dan Sisa Bagi %=
$a %= 2;
echo $a;
echo "<hr>";

// 7. Pengisian dan Penggabungan (String) = .=
$a .= 2;
echo $a; 
echo "<hr>";

// Operator Increment & Decrement
$a = 5;
echo "Normal: $a";
echo "<hr>";
// Increment = ++
$a++;
$a++;
echo "Increment: $a";
echo "<hr>";
// Decrement --
$a--;
$a--;
echo "Decrement: $a";
echo "<hr>";

// Operator Pembanding
$a = 6;
$b = 2;

// Lebih besar = >
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

// Lebih kecil = <
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

// Sama dengan = ==
$c = $a == $b;
echo "<hr>";

// Tidak sama dengan !=
$c = $a != $b; 
echo "$a != $b: $c"; 
echo "<hr>";

// Lebih besar sama dengan >=
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

// Lebih kecil sama dengan <=
$c = $a <= $b; 
echo "$a <= $b: $c";
echo "<hr>";


// Operator Logika
$a = true;
$b = false;

// 1. Logika AND = &&
$c = $a && $b; 
printf("%b && %b = %b",$a, $b,$c); 
echo "<hr>";

// 2. Logika OR = ||
$c = $a || $b; 
printf("%b || %b = %b", $a, $b,$c); 
echo "<hr>";

// 3. Logika NOT = !
$c = !$a;
printf("!%b = %b",$a,$c); 
echo "<hr>";

// Operator Ternary
$suka = false;
$jawab = $suka ? "iya" : "tidak";
echo $jawab;
?>