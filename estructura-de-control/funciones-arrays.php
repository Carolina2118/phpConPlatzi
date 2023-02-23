<?php 
#aca le indicamos que es un ARRAY . Y SU RESPUESTA ES TRUE
$nombre = array("Ana","Juan","Camila");
var_dump(is_array($nombre));

# aca indicamos que no es un array pero pedimos que nos de el resultado de un array y es false 
$nombre1 ="Ana";
var_dump(is_array($nombre1));


?>