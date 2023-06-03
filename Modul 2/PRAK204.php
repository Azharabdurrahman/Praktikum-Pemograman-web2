<?php
$hasil = "";
if (isset($_POST["konversi"])) {
    $nilai = $_POST["nilai"];

    if ($nilai == 0) {
        $hasil = "Nol";
    } else if ($nilai > 0 && $nilai < 10) {
        $hasil = "Satuan";
    } else if ($nilai == 10) {
        $hasil = "Puluhan";
    } else if ($nilai > 10 && $nilai < 20) {
        $hasil = "Belasan";
    } else if ($nilai >= 20 && $nilai < 100) {
        $hasil = "Puluhan";
    } else if ($nilai >= 100 && $nilai < 1000) {
        $hasil = "Ratusan";
    } else {
        $hasil = "Anda Menginput Melebihi Limit Bilangan";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal 4 - Muhammad Azhar Abdurrahman</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <li>
            <p>Output yang diinginkan :</p>
        </li>
        <li>
            <label for="nilai">Nilai :</label>
            <input type="text" name="nilai" id="nilai">
        </li>
        <li>
            <button type="submit" name="konversi">Konversi</button>
        </li>
        <!-- Outputnya -->
        <?php if (isset($_POST["konversi"])) : ?>
            <li>
                <h1>Hasil: <?= $hasil; ?></h1>
            </li>
        <?php endif ?>
    </form>
</body>

</html>
