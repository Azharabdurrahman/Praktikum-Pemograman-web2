<?php $count = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form action="" method="post">
        <label for="jumlah">Jumlah Peserta :</label>
        <input type="text" name="jumlah"> </br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php if (isset($_POST['submit'])) : ?>
        <?php while ($count <= $_POST['jumlah']) { ?>
            <?php if ($count % 2 == 1) : ?>
                <h1 style="color: red">Peserta ke-<?= $count; ?></h1>
            <?php else : ?>
                <h1 style="color: green">Peserta ke-<?= $count; ?></h1>
            <?php endif; ?>
            <?php $count = $count + 1; ?>
        <?php } ?>
    <?php endif; ?>
</body>
</html>

            

