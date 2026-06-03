<!DOCTYPE html>
<html>
<head>
    <title>Deret Angka dan Bintang</title>
</head>
<body>
    <?php
    $bawah = ""; $atas = "";
    if(isset($_POST['cetak'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
    }
    ?>
    <form method="POST">
        Batas Bawah: <input type="number" name="bawah" value="<?= $bawah ?>" required><br>
        Batas Atas: <input type="number" name="atas" value="<?= $atas ?>" required><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    <br>
    <?php
    if (isset($_POST['cetak'])) {
        $i = $bawah;
        if ($bawah <= $atas) {
            do {
                if (($i + 7) % 5 == 0) {
                    echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png' width='20px' height='20px'> ";
                } else {
                    echo $i . " ";
                }
                $i++;
            } while ($i <= $atas);
        } else {
            echo "Batas Bawah harus lebih kecil atau sama dengan Batas Atas.";
        }
    }
    ?>
</body>
</html>