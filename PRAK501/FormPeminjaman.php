<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editPeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form table {
            width: 100%;
            border-collapse: collapse;
        }

        form td {
            padding: 10px;
        }

        form input[type="text"],
        form input[type="date"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            margin-top: 10px;
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>Form Peminjaman</h2>
    <form action="" method="post">
    <?php
        if( isset($_GET['id_peminjaman']) ) {
        $sql = "SELECT * FROM tgl_peminjaman WHERE id_peminjaman = " . $_GET['id_peminjaman'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
    ?>
        <table>
            <tr>
                <td>ID Peminjaman Mahasiswa</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php 
            endforeach; 
        } else {
        ?>
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php } ?>
    </form>
    <br>
    <a href="Peminjaman.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
</body>
</html>