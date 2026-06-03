<!DOCTYPE html>
<html>
<head>
    <title>Mengurutkan Nama</title>
</head>
<body>
    <?php
    $nm1 = $nm2 = $nm3 = "";
    if (isset($_POST['submit'])) {
        $nm1 = $_POST['nama1'];
        $nm2 = $_POST['nama2'];
        $nm3 = $_POST['nama3'];
    }
    ?>
    <form method="POST">
        Nama: 1 <input type="text" name="nama1" value="<?= $nm1 ?>"><br>
        Nama: 2 <input type="text" name="nama2" value="<?= $nm2 ?>"><br>
        Nama: 3 <input type="text" name="nama3" value="<?= $nm3 ?>"><br>
        <input type="submit" name="submit" value="Urutkan">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama_array = array($nm1, $nm2, $nm3);
        sort($nama_array);
        echo "<br><b>Output</b><br>";
        foreach ($nama_array as $nama) {
            echo $nama . "<br>";
        }
    }
    ?>
</body>
</html>