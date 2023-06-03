<?php
$jariJari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$phi = 3.14;
$NIM = 4;

if ($NIM == 0 || $NIM == 1) {
    $volumeTabung = $phi * $jariJari * $jariJari * $tinggi;
    echo "Volume tabung adalah: " . number_format($volumeTabung, 3) . " m³";
} else if ($NIM == 2 || $NIM == 3) {
    $volumeKerucut = (1/3) * $phi * $jariJari * $jariJari * $tinggi;
    echo "Volume kerucut adalah: " . number_format($volumeKerucut, 3) . " m³";
} else if ($NIM == 4 || $NIM == 5) {
    $volumeBola = (4/3) * $phi * $jariJari * $jariJari * $jariJari;
    echo "Volume bola adalah: " . number_format($volumeBola, 3) . " m³";
} else if ($NIM == 6 || $NIM == 7) {
    $volumePrismaSegitiga = (1/2) * $panjang * $tinggi;
    echo "Volume prisma segitiga adalah: " . number_format($volumePrismaSegitiga, 3) . " m³";
} else if ($NIM == 8 || $NIM == 9) {
    $volumeLimasPersegiPanjang = (1/3) * $panjang * $lebar * $tinggi;
    echo "Volume limas persegi panjang adalah: " . number_format($volumeLimasPersegiPanjang, 3) . " m³";
}
?>