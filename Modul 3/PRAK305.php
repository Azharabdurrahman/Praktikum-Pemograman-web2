<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5 - Muhammad Azhar Abdurrahman</title>
</head>
<body>
    <form action="" method="post">
            <input type="text" name="kata">
            <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <?php if( isset($_POST['submit']) ) : ?>
        <?php
            $kata = $_POST['kata'];
            $karakter = str_split($kata);
            foreach($karakter as $index => $char) {
                for($i = 1; $i <= count($karakter); $i++) {
                    if ($i === 1) {
                        echo strtoupper($char);
                    } else {
                        echo strtolower($char);
                    }
                }
            }
        ?>
    <?php endif; ?>
</body>
</html>
