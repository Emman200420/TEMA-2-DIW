<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $productos =[["nombre" => "Samsung", "precio" => 200], 
    ["nombre" => "LG", "precio" => 1500], 
    ["nombre" => "APPLE", "precio" => 1900]];
    foreach($productos as $producto){
        echo "
        <table border ='1' >
        
        

        <tr align = 'center'>
        <td width ='100'>{$producto['nombre']}</td>
        <td  width ='100' > {$producto['precio']}</td>
        
        </tr>
       

        

        
        
        </table>
        ";
    }
    ?>
</body>
</html>