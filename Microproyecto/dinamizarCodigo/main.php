<?php
$palabras =array("sol","luna","cielo","tierra","agua", "estrellas");

$form = "<div style='border-style: double; padding: 10px; border: 100px solid #adabaa; background-color: #d79448;'> 
<p style =' text-align: center;font-size: 40px'>Adivina cual es la palabra</p>
  <form action='analisis.php'> <div style='display:flex; flex-direction:column;  padding: 10px; border: 9px solid #4CAF50; align-items: center;'> ";

for ($i=0 ; $i < count($palabras); $i++ ) {
    $form .= "La palabra: ".str_shuffle($palabras[$i])." ". 
    "<input type='text' name='palabra".$i."'>".
    "<br>"; 
    
}

$button = "<button type='submit' style='justify-content: center; margin-top: 48px;
 background-color:rgb(49, 179, 31); border-radius: 6px;
 width:10em; padding: 6px;font-size: 20px;'>Enviar</button>";
$cierreForm = "</from>";

echo $form.$button.$cierreForm;



?>