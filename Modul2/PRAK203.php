<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <?php
    $nilai = ""; $dari = ""; $ke = "";
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
    }
    ?>

    <form method="POST">
        Nilai: <input type="text" name="nilai" value="<?= $nilai ?>" required><br><br>
        
        Dari:<br>
        <input type="radio" name="dari" value="Celcius" <?= ($dari == "Celcius") ? "checked" : "" ?> required> Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit" <?= ($dari == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur" <?= ($dari == "Rheamur") ? "checked" : "" ?>> Rheamur<br>
        <input type="radio" name="dari" value="Kelvin" <?= ($dari == "Kelvin") ? "checked" : "" ?>> Kelvin<br><br>
        
        Ke:<br>
        <input type="radio" name="ke" value="Celcius" <?= ($ke == "Celcius") ? "checked" : "" ?> required> Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" <?= ($ke == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur" <?= ($ke == "Rheamur") ? "checked" : "" ?>> Rheamur<br>
        <input type="radio" name="ke" value="Kelvin" <?= ($ke == "Kelvin") ? "checked" : "" ?>> Kelvin<br><br>
        
        <input type="submit" name="submit" value="Konversi">
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $hasil = 0; $s = "";
        if ($dari == "Celcius") {
            if ($ke == "Celcius") { $hasil = $nilai; $s = "°C"; }
            elseif ($ke == "Fahrenheit") { $hasil = ($nilai * 9/5) + 32; $s = "°F"; }
            elseif ($ke == "Rheamur") { $hasil = $nilai * 4/5; $s = "°R"; }
            elseif ($ke == "Kelvin") { $hasil = $nilai + 273.15; $s = "°K"; }
        } elseif ($dari == "Fahrenheit") {
            if ($ke == "Celcius") { $hasil = ($nilai - 32) * 5/9; $s = "°C"; }
            elseif ($ke == "Fahrenheit") { $hasil = $nilai; $s = "°F"; }
            elseif ($ke == "Rheamur") { $hasil = 4/9 * ($nilai - 32); $s = "°R"; }
            elseif ($ke == "Kelvin") { $hasil = ($nilai - 32) * 5/9 + 273.15; $s = "°K"; }
        } elseif ($dari == "Rheamur") {
            if ($ke == "Celcius") { $hasil = $nilai * 5/4; $s = "°C"; }
            elseif ($ke == "Fahrenheit") { $hasil = ($nilai * 9/4) + 32; $s = "°F"; }
            elseif ($ke == "Rheamur") { $hasil = $nilai; $s = "°R"; }
            elseif ($ke == "Kelvin") { $hasil = ($nilai * 5/4) + 273.15; $s = "°K"; }
        } elseif ($dari == "Kelvin") {
            if ($ke == "Celcius") { $hasil = $nilai - 273.15; $s = "°C"; }
            elseif ($ke == "Fahrenheit") { $hasil = ($nilai - 273.15) * 9/5 + 32; $s = "°F"; }
            elseif ($ke == "Rheamur") { $hasil = 4/5 * ($nilai - 273.15); $s = "°R"; }
            elseif ($ke == "Kelvin") { $hasil = $nilai; $s = "°K"; }
        }
        echo "<b>Hasil Konversi: </b>" . number_format($hasil, 1) . " " . $s;
    }
    ?>
</body>
</html>