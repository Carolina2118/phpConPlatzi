<?php

$nombre1 = "carolina";
$apellido2 = "Lobos";
// concatenando dos valores 
echo $nombre1 .' '. $apellido2;



function concatenacion($nombre3, $apellido4){
    echo $nombre3.''.$apellido4;
}
concatenacion("Sebastian","Nuñez");


function sumarNumeros($numeros){
    $suma = 0;
    for ($i=0; $i < 4; $i++) { 

        $suma = $suma + $numeros[$i];
    }
    echo"La suma de los valores de array es :".$suma;
}

 $numeros = array(1,2,3,4);
 sumarNumeros($numeros);

 

?>
