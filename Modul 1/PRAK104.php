<?php

$daftarSmartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
// var_dump($daftarSmartphone);
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            font-family: sans-serif;
            color: #232323;
        }
        table, th, td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <!-- Membuat Tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <?php foreach($daftarSmartphone as $smartphone) :  ?>
        <tr>
            <td><?= $smartphone; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
