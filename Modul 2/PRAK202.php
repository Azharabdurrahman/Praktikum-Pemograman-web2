<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: red;}
    </style>
    <title>Soal 2 - Muhammad Azhar Abdurrahman</title>
</head>
<body>
    <?php
    $namaError = $nimError = $genderError = "";
    $nama = $nim = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaError = "Nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }
        if (empty($_POST["nim"])) {
            $nimError = "NIM tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }
        if (empty($_POST["gender"])) {
            $genderError = "Jenis kelamin tidak boleh kosong";
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Nama: <input type="text" name="nama" value="<?= $nama ?>">
        <span class="error">* <?php echo $namaError;?></span><br>  
        Nim: <input type="text" name="nim" value="<?= $nim ?>">
        <span class="error">* <?php echo $nimError;?></span><br>
        Jenis Kelamin: <span class="error">* <?php echo $genderError;?></span><br>
        <input type="radio" name="gender" value="Laki-laki" <?php if ($gender == "Laki-laki") echo "checked"; ?>>Laki-laki<br>
        <input type="radio" name="gender" value="Perempuan" <?php if ($gender == "Perempuan") echo "checked"; ?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($nama) && !empty($nim) && !empty($gender)) {
            echo "<h1>Output: </h1>";
            echo $nama . "<br>";
            echo $nim . "<br>";
            echo $gender;
        }
    }
    ?>
</body>
</html>