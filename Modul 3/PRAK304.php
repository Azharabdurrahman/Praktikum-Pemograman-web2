<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
    <?php
    $jumlahBintang = NULL;
    $gambarBintang = "<img style='width: 70px;' src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' >";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlahBintang = $_POST['bintang'];
    }

    if (isset($_POST['tambah'])) {
        $jumlahBintang += 1;
    }

    if (isset($_POST['kurang'])) {
        $jumlahBintang -= 1;
    }

    if (empty($jumlahBintang)) {
        ?>
        <form action="" method="post">
            <label for="bintang">Jumlah Bintang :</label>
            <input type="text" name="bintang"> <br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
    }
    ?>
    <?php if (!empty($jumlahBintang)) {
        echo "Jumlah Bintang : $jumlahBintang "; ?>

        <br><br>
        <?php for ($i = 0; $i < $jumlahBintang; $i++) {
            echo "$gambarBintang";
        } ?>

        <form action="" method="post">
            <input type="text" name="bintang" value="<?= $jumlahBintang ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>
    <?php } ?>
    </body>
</html>
