<?php
session_start();

if (!isset($_SESSION['bintang'])) {
    $_SESSION['bintang'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $_SESSION['bintang'] = $_POST['jumlah'];
    } elseif (isset($_POST['tambah'])) {
        $_SESSION['bintang']++;
    } elseif (isset($_POST['kurang'])) {
        if ($_SESSION['bintang'] > 0) {
            $_SESSION['bintang']--;
        }
    }
}

$jumlah_bintang = $_SESSION['bintang'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bintang Interaktif</title>
</head>
<body>

    <?php if ($jumlah_bintang == 0): ?>
        <form method="POST">
            Jumlah bintang <input type="number" name="jumlah" min="1" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php else: ?>
        Jumlah bintang <?= $jumlah_bintang ?><br><br>
        
        <?php
        for ($i = 0; $i < $jumlah_bintang; $i++) {
            echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png' width='55px' height='50px'> ";
        }
        ?>
        <br><br>
        <form method="POST">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>
    <?php endif; ?>

</body>
</html>