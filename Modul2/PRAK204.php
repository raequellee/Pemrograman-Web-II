<!DOCTYPE html>
<html>
<head>
    <title>Ejaan Bilangan Cacah</title>
</head>
<body>
    <?php
    $nilai = ""; 
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
    }
    ?>

    <form method="POST">
        Nilai: <input type="text" name="nilai" value="<?= $nilai ?>" required><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $hasil = "";
        
        if ($nilai == 0 && $nilai != "") { 
            $hasil = "Nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            $hasil = "Satuan";
        } elseif ($nilai >= 11 && $nilai < 20) {
            $hasil = "Belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai < 100)) {
            $hasil = "Puluhan";
        } elseif ($nilai >= 100 && $nilai < 1000) {
            $hasil = "Ratusan";
        } elseif ($nilai >= 1000) {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        }

        if ($hasil != "") {
            echo "<br><b>Hasil: </b><b>" . $hasil . "</b>";
        }
    }
    ?>
</body>
</html>