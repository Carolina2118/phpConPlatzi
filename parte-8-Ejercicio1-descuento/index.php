
<?php
$cantidadArticulos = (count($_REQUEST)/2);

$articulos = array();

for ($i=0, $a=1; $i < $cantidadArticulos ; $i++,$a++) { 
    $articulos += ['Artículo '.$a => ($_REQUEST['alto'. $i] *  $_REQUEST['ancho'. $i])]; 
}

arsort($articulos);

echo "Este es el orden de ordenamiento <br/> Teniendo en cuenta que los más grandes tienen los primeros lugares <br/> <br/>";

foreach ($articulos as $articulo => $dimension) {
  echo  $articulo . " tiene una dimensón de " . $dimension . "<br/>";
}
?>