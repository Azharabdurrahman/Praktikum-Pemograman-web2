<?php 
require('Model.php');
if (isset($_GET['id_member'])){
    hapusMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member Perpus</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
          .btn-back {
        border: 1px solid #4CAF50;
    }
        body {
            max-width: 900px;
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

        th {
            background-color: #a0a0a0;
            color: #fff;
            padding: 8px;
            text-align: left;
        }

        td {
            background-color: #E8E8E8;
            padding: 8px;
        }

        .container {
            margin-top: 20px;
        }

        .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Member</h2>
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Member</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilMember();
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <a href="FormMember.php" class="btn btn-primary btn-back">Tambah Member</a>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
