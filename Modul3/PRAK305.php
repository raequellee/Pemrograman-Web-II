<!DOCTYPE html>
<html>
<head>
    <title>Manipulasi String</title>
</head>
<body>
    <?php
    $input_string = "";
    if (isset($_POST['submit'])) {
        $input_string = $_POST['input_str'];
    }
    ?>
    <form method="POST">
        <input type="text" name="input_str" value="<?= $input_string ?>" required>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['input_str'];
        $panjang = strlen($kata); 
        
        echo "<br><b>Input:</b><br>";
        echo $kata . "<br><br>";
        echo "<b>Output:</b><br>";

        for ($i = 0; $i < $panjang; $i++) {
            $huruf = substr($kata, $i, 1); 
            
            for ($j = 0; $j < $panjang; $j++) {
                if ($j == 0) {
                    echo strtoupper($huruf);
                } else {
                    echo strtolower($huruf);
                }
            }
        }
    }
    ?>
</body>
</html>