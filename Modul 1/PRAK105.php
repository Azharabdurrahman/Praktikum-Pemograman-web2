<?php
$daftarSamsung = [
    'S22' => 'Samsung Galaxy S22',
    'S22P' => 'Samsung Galaxy S22+',
    'SXC5' => 'Samsung Galaxy Xcover 5'
];
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        /* CSS */
        .samsung {
            font-weight: 800;
            background-color: red;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Membuat tabel -->
    <table border="1">
        <tr>
            <td class="samsung">Daftar Smartphone Samsung</td>
        </tr>
        <?php foreach ($daftarSamsung as $key => $value) : ?>
            <tr>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
