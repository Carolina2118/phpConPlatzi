<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Descuentos</title>
</head>
<body>
  <h1>Calcular descuento</h1>
  <form method="get" action="analisis.php">
    <h2>Poné tu precio y tu descuento deseado y nosotros lo calculamos</h2>
    <input type="number" placeholder="precio" name="precio" value="">
    <input type="number" placeholder="descuento" name="descuento" value="">
    <input value="calcular" type="submit">

    <style>

input[type=number] {
    -moz-appearance:textfield;
}
</style>
  </form>
</body>
</html>
