<?php
$palabras =array("sol","luna","cielo","tierra","agua", "estrelllas");
    $form ="<from action='analisis.php'>";
    
    for ($i=0 ; $i < count($palabras); $i++ ) {
        $form .= "La palabra: ".str_shuffle($palabras[$i])." "."<br>"."<br>".
        "<input type='text' name='palabra ".$i."'>".
        "<br>"."<br>"; 
        
    }
$button = "<button type='submit'>Enviar</button>";
$cierreForm="</from>";

echo $form.$button.$cierreForm;

?>