<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Gambar</title>
</head>
<body>
    <?php
    $tinggi = ""; $alamat = "";
    if(isset($_POST['cetak'])) {
        $tinggi = $_POST['tinggi'];
        $alamat = $_POST['alamat'];
    }
    ?>
    <form method="POST">
        Tinggi: <input type="number" name="tinggi" value="<?= $tinggi ?>" min="1" required><br>
        Alamat Gambar: <input type="text" name="alamat" value="<?= $alamat ?>" required><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    <br>
    <?php
    if (isset($_POST['cetak'])) {
        $i = 1;
        while ($i <= $tinggi) {
            $j = 1;
            while ($j < $i) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                $j++;
            }
            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$alamat' width='20px' height='20px'>";
                $k--;
            }
            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>