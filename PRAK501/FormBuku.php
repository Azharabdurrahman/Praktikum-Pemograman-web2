<?php
require('Model.php');

if (isset($_GET['id_buku'])) {
    editbuku();
}
?>

<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        h2 {
            margin-bottom: 20px;
        }
        
        form table {
            width: 100%;
            border-collapse: collapse;
        }
        
        form td {
            padding: 10px;
            vertical-align: top;
        }
        
        form input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        form button {
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
            color: #4CAF50;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
        }
        
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .form-group button {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Form Buku</h2>
    <form action="" method="post">
    <?php
        if( isset($_GET['id_buku']) ) {
            $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
            $result = mysqli_query($conn, $sql);

            foreach($result as $res) :
        
    ?>
        
        <table>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_buku'])) {
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
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_buku'])) {
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
    <a href="Buku.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        tambahBuku($_POST['id_buku'],$_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updateBuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>
</body>

</html>
