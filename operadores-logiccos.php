<?php
// operadores lógicos
  $valorA = true;
  $valorB = true;
  
  $resultado = ($valorA and $valorB);  
   // comparar las variables entre parentesis.
var_dump($resultado);
/* ojo :La función var_dump() muestra el tipo de variable y su contenido, en el caso de los arrays muestra el tipo de contenido de cada campo. 
Es muy parecida a la función var_export(),
la diferencia radica en que esta última muestra el mismo resultado pero en código PHP interpretable.*/
?>