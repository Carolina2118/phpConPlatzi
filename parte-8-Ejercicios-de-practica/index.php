<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO FOR HIM</title>
</head>
<body>
    <h1>GO FOR HIM</h1>
   <H3>te regalamos el</H3>
    <h3> 35% de descuento</h3>
    <input type="text" name= "Producto" >
    <input type="number" name ="valor">
<input type="number" name =" descuento">

</body>
</html>


<?php
$from = "<from action='analisis.php'></from>";

$button = "<button type='submit' style='justify-content: center; margin-top: 48px;
 background-color:rgb(49, 179, 31); border-radius: 6px;
 width:10em; padding: 6px;font-size: 20px;'>Enviar</button>";

$cierreForm = "</from>";

echo $form.$button.$cierreForm;

?>