<?php



$precio = $_REQUEST['precio'];
$descuento= $_REQUEST['descuento'];

function calcular($precio,$descuento) {
  $porcentajeDescuento = 100 - $descuento;
  $precioDescuento = ($precio * $porcentajeDescuento) / 100;

  return $precioDescuento;
}

echo calcular($precio,$descuento);



?>