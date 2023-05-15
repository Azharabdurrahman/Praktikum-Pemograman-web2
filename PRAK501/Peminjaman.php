<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])){
    hapusPeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman </title>
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

        td {
            background-color: #E8E8E8;
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
    <div class="container">
        <h2>Peminjaman</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilPeminjaman();
                ?>
            </tbody>
        </table>
        <br>
        <a href="FormPeminjaman.php" class="btn btn-success">Tambah Peminjaman</a>
    </div>
</body>
</html>
