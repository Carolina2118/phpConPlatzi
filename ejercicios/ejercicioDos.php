<?php 
 function arbol($ciclo){

for ($i=0 ; $i < $ciclo ; $i++) {
    echo str_repeat("🌳", $i) . "\n";
}

 }

arbol(10);

?>