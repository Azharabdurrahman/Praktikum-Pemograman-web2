<?php 
require('Model.php');
if (isset($_GET['id_buku'])){
    hapusBuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Perpus</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            width: 900px;
            margin: auto;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #a0a0a0;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 4px;
        }

        a:hover {
            background-color: #45a049;
        }

        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2 class="text-center">Buku</h2>
    <div class="container">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilBuku();
                ?>
            </tbody>
        </table>
        <br>
        <a href="FormBuku.php" class="btn btn-success">Tambah Buku</a>
    </div>
</body>
</html>
