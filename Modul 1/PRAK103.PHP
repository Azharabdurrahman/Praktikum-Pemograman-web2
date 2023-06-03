<?php
$celcius = 37.841;
// Menghitung suhu dalam Fahrenheit
$fahrenheit = ($celcius * 9/5) + 32;
// Menghitung suhu dalam Reamur
$reamur = $celcius * 4/5;
// Menghitung suhu dalam Kelvin
$kelvin = $celcius + 273.15;

// Menampilkan hasil konversi suhu
echo "Suhu dalam Fahrenheit: $fahrenheit derajat<br>";
echo "Suhu dalam Reamur: $reamur derajat<br>";
echo "Suhu dalam Kelvin: $kelvin derajat";
?>