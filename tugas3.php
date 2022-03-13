<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
<body>
    <h1>contoh program tipe data</h1>
    <br>
    <h3><b>Integer : </b></h3>
    <?php
        $a = 10;
        $b = 5;
        $c = $a - $b;

        echo "$a + $b adalah $c";
    ?>

    <h3><b>float : </b></h3>
    <?php
    $nilaiMatematika = 5.1;
    $nilaiBahasaIndonesia = 9.3;
    
    $rataRata = ($nilaiMatematika + $nilaiBahasaIndonesia) / 2;
    

    echo "Matematika: $nilaiMatematika <br>";
    echo "Bahasa Indonesia: $nilaiBahasaIndonesia <br>";
    echo "Rata-rata: $rataRata";
    ?>

    <h3><b>String : </b></h3>
    <?php
    $namaDepan = "Fadhillah"; 
    $namaBelakang = "Ramadhan"; 
    $namaLengkap = "$namaDepan $namaBelakang";

    echo " nama depan = $namaDepan <br>";
    echo " nama belakang = $namaBelakang <br>";
    echo " nama lengkap = $namaLengkap"
    ?>

    <h3><b>Boolean : </b></h3>
    <?php
        $a=10;
        $b=20;
        $c= $a < $b;
        $d= $a > $b;
        echo " 10 < 20 adalah ";
        var_dump($c);

        echo "<br> 10 > 20 adalah ";
        var_dump($d);
    ?>

    <h3><b>array : </b></h3>
    <?php
    $siswa = array ('Fadhil', 'Tono', 'Tini');
    echo '<pre>';print_r($siswa); echo '</pre>';
    ?>

    <h3><b>Konstanta : </b></h3>
    <?php
define('hasil1', 60 * 3); 

const hasil2 = 60 * 3; 

echo " ini hasil dari define : <br>";
echo" 60 x 3 adalah ".hasil1;

echo "<br> ini hasil dari const : <br>";
echo" 60 x 3 adalah ".hasil2;
?>

<hr>

<h1>contoh program operator</h1>
<br>
<h3>operator asigment</h3>
<?php

$a = 5;
$a += 10; 
echo"5 += 10 hasilnya adalah $a <br>";

$b = 5;
$b -= 20; 
echo"5 -= 20 hasilnya adalah $b <br>";

$c=5;
$c *= 100;
echo"5 *= 100 hasilnya adalah $c <br>";

$d=5;
$d /= 10; 
echo"5 /= 10 hasilnya adalah $d <br>";
?>

<h3>Aritmatika</h3>
<?php
$a = 5;
$b = 10;

echo"operator aritmatika standar <br>";
$c=$a + $b;
$d=$a - $b ;
$e=$a * $b;
$f=$a / $b;
echo "$a + $b = $c <br>";
echo "$a - $b = $d <br>";
echo "$a * $b = $e <br>";
echo "$a / $b = $f <br>";

echo "<br>modulus <br>"; 
echo "$a % $b =   $a % $b <br>";

echo "<br>Increment <br>";
echo"++10 = ".++$b;

echo "<br>";

echo "<br>Decrement <br>";
echo"--10 = ".--$b;
?>

<h3>Relational</h3>
<?php
$a = 6;
$b = 2;

echo "menggunakan operator relasi lebih besar (a > b) <br>"; 
$c = $a > $b;
echo "$a > $b = $c";
echo "<br><br>";

echo "menggunakan operator relasi lebih kecil (a < b) <br>"; 
$c = $a < $b;
echo "$a < $b: $c";
echo "<br><br>";

echo"menggunakan operator relasi lebih sama dengan (a == b) <br>"; 
$c = $a == $b;
echo "$a == $b: $c";
echo "<br><br>";

echo "menggunakan operator relasi lebih tidak sama dengan (a != b) <br>";
$c = $a != $b;
echo "$a != $b: $c";
echo "<br><br>";

echo"menggunakan operator relasi lebih besar sama dengan (a >= b) <br>"; 
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<br><br>";

echo"menggunakan operator relasi lebih kecil sama dengan (a <= b) <br>"; 
$c = $a <= $b;
echo "$a <= $b : $c";
?>

<h3>Logika</h3>
<?php
$x = 100;  
$y = 50;


echo"Logika AND (&&) <br>"; 

if ($x == 100 && $y == 50) {
    echo "Operator (&&) akan menghasilkan true apabila nilai kiri dan kanan bernilai true.";
}

echo"<br><br>";

echo"Logika OR ( || ) <br>";
if ($x == 100 || $y == 80) {
    echo "operator (||) akan menghasilkan false saat nilai kiri dan kanan bernilai false";
}

echo "<br><br>";

echo"Logika NOT ( ! ) <br>";
if ($x !== 90) {
    echo "Jika operator (!) bernilai true, maka operator ini akan menghasilkan nilai false.";
}
?>

</body>
</html>