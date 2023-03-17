<!-- PHP -->
<?php
$Jarijari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$phi=3.14;
// NIM
$NIM=4;


if( $NIM == 0 || $NIM == 1 ) {
    $tabung = 3.14 * $Jarijari * $Jarijari * $tinggi;
    echo number_format($tabung, 3);
} else if ( $NIM == 2 || $NIM == 3 ) {
    $kerucut = 1/3 * 3.14 * $Jarijari * $Jarijari * $tinggi;
    echo number_format($kerucut, 3);
} else if ( $NIM == 4 || $NIM == 5 ) {
    $volume = 4/3*$phi*$Jarijari*$Jarijari*$Jarijari;
    // echo number_format($volume, 3);
} else if ( $NIM == 6 || $NIM == 7 ) {
    $prismaAlasSegitiga = 1/2 * $alasPrisma * $tinggiPrisma;
    echo number_format($prismaAlasSegitiga, 3);
} else if ( $NIM == 8 || $NIM == 9 ) {
    $limasAlasPersegiPanjang = 1/3 * $panjang * $lebar * $tinggiLimas;
    echo number_format($limasAlasPersegiPanjang, 3);
} 

?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
</head>
<body>
Hasil volume dari bangun ruang tabung adalah</br>
<!-- PHP -->
    <?php
   echo number_format($volume,3)." m3";
 ?>