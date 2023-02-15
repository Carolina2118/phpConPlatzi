<?php
// operadores lógicos
// probando con and.
  $valorA = true;
  $valorB = false;
// probando con &&.
  $valorC = true;
  $valorD = false;
// probando con or. 
  $valorF = false;
  $valorE = true;
 // probando con xor 
  $valorG = true;
  $valorH = false;
//probando con ! negacion.
  $valorP = true;

  $resultado = $valorA and $valorB;  // devulve true si los dos son true o false. 
  $resultados = $valorC && $valorD; 
  $resultadoss = $valorE or $valorF; // devulve true si al menos uno es true.
  $resultadosss = $valorG xor $valorH; // devulve uno u otro el valor el true en caso de que los sean false seran false. 
  $resultadosssP = !$valorP; // devulve lo contrario.
   // comparar las variables entre parentesis.
var_dump($resultado);
var_dump($resultados);
var_dump($resultadoss);
var_dump($resultadosss);
var_dump($resultadosssP);
/* ojo :La función var_dump() muestra el tipo de variable y su contenido, en el caso de los arrays muestra el tipo de contenido de cada campo. 
Es muy parecida a la función var_export(),
la diferencia radica en que esta última muestra el mismo resultado pero en código PHP interpretable.*/
?>