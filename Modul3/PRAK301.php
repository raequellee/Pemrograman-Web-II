<!DOCTYPE html>
<html>
<head>
    <title>Cetak Peserta</title>
</head>
<body>
    <?php
    $jumlah = "";
    if (isset($_POST['cetak'])) {
        $jumlah = $_POST['jumlah'];
    }
    ?>
    <form method="POST">
        Jumlah Peserta : <input type="number" name="jumlah" value="<?= $jumlah ?>" min="1" required><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    
    <?php
    if (isset($_POST['cetak'])) {
        $i = 1;
        while ($i <= $jumlah) {
            if ($i % 2 == 1) {
                echo "<h2 style='color: red;'>Peserta ke-$i</h2>";
            } else {
                echo "<h2 style='color: green;'>Peserta ke-$i</h2>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>