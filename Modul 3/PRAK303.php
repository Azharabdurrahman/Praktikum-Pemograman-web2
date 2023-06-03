<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <form action="" method="post">
            <label for="bawah">Batas Bawah :</label>
            <input type="text" name="bawah"> <br>
            <label for="atas">Batas Atas :</label>
            <input type="text" name="atas"> <br>
            <button type="submit" name="submit">Cetak</button>
        </form>
        <br>
        <?php
        $nilaiAwal;
        $nilaiAkhir;
        ?>
        <?php if (isset($_POST['submit'])) : ?>
            <?php
            $nilaiAwal = $_POST['bawah'];
            $nilaiAkhir = $_POST['atas'];
            ?>
            <?php do { ?>
                <?php if (($nilaiAwal + 7) % 5 == 0) : ?>
                    <img style="width: 20px;" src="star-images-9441.png" alt="">
                <?php else : ?>
                    <?= $nilaiAwal; ?>
                <?php endif; ?>
                <?php $nilaiAwal = $nilaiAwal + 1; ?>
            <?php } while ($nilaiAwal <= $nilaiAkhir); ?>
        <?php endif; ?>
    </body>
</html>
