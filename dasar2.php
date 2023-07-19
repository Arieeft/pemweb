<?php
//echo()
print 'echo(): <br>'; 
echo '<h2>Hello World</h2>';
echo('Hello World<br>');
echo 'Hello', 'World', '<br>';
echo '===========<br>';
echo '<br>';

//print()
print 'print(): <br>'; 
print 'Hello World<br>';
print('Hello World<br>');
// print 'Hello', 'World';
echo '=========<br>';
echo '<br>';

//printf()
print 'printf(): <br>';
$var1 = 'Arie';
printf('Nama saya adalah %s<br>', $var1);
$var2 = 90;
printf('Nilai bahasa indonesia saya adalah: %d<br>', $var2);
$var3 = 90.0;
printf('Nilai bahasa inggirs saya adalah: %.1f<br>', $var3);
$var4 =false;
printf('True/False: %b<br>', $var4);
echo '===========<br>';
echo '<br>';

//Menggabungkan String
print 'Menggabungkan String: <br>';
$var5 = 'Arie';
echo 'Nama saya $var5. ' . $var5 . '<br>';
$var6 = '1';
$var7 = '2';
echo $var6 + $var7 .'<br>';
echo '=============<br>';
echo '<br>';

//Mencetak kutip (')
print 'Mencetak kutip: <br>';
echo 'jum\'at<br>';
echo "jum'at<br>";
echo "Nilai saya adalah: $var6<br>";
echo '=========<br>';
echo '<br>';
?>