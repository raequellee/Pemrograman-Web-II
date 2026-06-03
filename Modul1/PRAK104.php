<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border: 1px solid black; 
            border-spacing: 2px; 
        }
        th, td {
            border: 1px solid black; 
            padding: 1px 1px;
            font-family: "Times New Roman", Times, serif; 
            text-align: left;
        }
        th {
            font-size: 20px;
        }
        td {
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php
$smartphone = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php foreach($smartphone as $hp) : ?>
    <tr>
        <td><?php echo $hp; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>