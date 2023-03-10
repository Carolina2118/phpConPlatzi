<?php
$palabras =array("sol","luna","cielo","tierra","agua", "estrelllas");
    $form ="<from action='analisis.php'>";
    
    for ($i=0 ; $i < count($palabras); $i++ ) {
        $form .= "La palabra: ".str_shuffle($palabras[$i]).""."<br>"."<br>".
        "<input type='text' style='flex-direction:column;border-radius: 
        5px;width: 15em; padding: 4px;' name='palabra ".[$i]."'>".
        "<br>"."<br>"; 
        
    }
$button = "<button type='submit'style='justify-content: center; 
margin-top: 48px; background-color:rgb(49, 179, 31); border-radius:
 6px; width:10em; padding: 6px;font-size: 20px;'>Enviar</button>";
$cierreForm="</from>";

echo $form.$button.$cierreForm;

?>