<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $compra =["peras", "manzana","platano"];
    foreach($compra as $fruta){
        echo "<li>$fruta</li>"
    }
    ?>
</body>
</html>