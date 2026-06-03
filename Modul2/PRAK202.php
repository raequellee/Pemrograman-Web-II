<!DOCTYPE html>
<html>
<head>
    <title>Validasi Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $namaErr = $nimErr = $jkErr = "";
    $nama = $nim = $jk = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaErr = "nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }

        if (empty($_POST["nim"])) {
            $nimErr = "nim tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }

        if (empty($_POST["jk"])) {
            $jkErr = "jenis kelamin tidak boleh kosong";
        } else {
            $jk = $_POST["jk"];
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama" value="<?php echo $nama;?>">
        <span class="error">* <?php echo $namaErr;?></span><br>
        
        Nim: <input type="text" name="nim" value="<?php echo $nim;?>">
        <span class="error">* <?php echo $nimErr;?></span><br>
        
        Jenis Kelamin: <span class="error">* <?php echo $jkErr;?></span><br>
        <input type="radio" name="jk" value="Laki-Laki" <?php if (isset($jk) && $jk=="Laki-Laki") echo "checked";?>> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if (isset($jk) && $jk=="Perempuan") echo "checked";?>> Perempuan<br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>

    <?php
    if (isset($_POST['submit']) && empty($namaErr) && empty($nimErr) && empty($jkErr)) {
        echo "<b>Output:</b><br>";
        echo $nama . "<br>";
        echo $nim . "<br>";
        echo $jk . "<br>";
    }
    ?>
</body>
</html>