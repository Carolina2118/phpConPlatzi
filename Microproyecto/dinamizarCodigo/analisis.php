<?php
print_r($_REQUEST);

$palabras = array("sombra","raton", "girasol");
if ($_REQUEST["palabra0"] == $palabras[0]) {
    echo "La palabra ingresada es correcta: ";
}else {
    echo"La palabra ingresada es incorrecta: ".$palabras[0];
}

if ($_REQUEST["palabra1"] == $palabras[1]) {
    echo "La palabra ingresada es correcta: ";
}else {
    echo"La palabra ingresada es incorrecta: ".$palabras[1];
}
if ($_REQUEST["palabra2"] == $palabras[2]) {
    echo "La palabra ingresada es correcta:  ".$palabras[2];
}else {
    
    echo"La palabra ingresada es incorrecta: ".$palabras[2];
} 

?>

