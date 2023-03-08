<?php

$palabras = array("sombra","raton", "girasol");
$palabrasDesordenadas = array();

for ($i=0; $i < 3; $i++) { 

   $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
}

print_r($palabrasDesordenadas);


echo"
<form action='analisis.php' style = 'padding-left: 270px;
padding-right: 270px;'>
<div style ='background: linear-gradient(to right, #093637, #44A08D);'>
<p>Te dare una pista.</p>
<p> En el jardín estoy y en tus pies siempre voy.</p>
<P>ARBMOS </P>

<input type='text' name='palabra0' style='border-radius: 5px;'>

<p>Hay quienes huyen de mí por temor y quienes me conectan en el ordenador</P>
<P>ONTRA</P>

<input type='text' name='palabra1' style='border-radius: 5px;'>

<p>Siempre mirando al sol y no soy un caracol. Giro y giro sin fin y no soy un bailarín.</p>
<p> SORALGI</p>

<input type='text' name='palabra2' style='border-radius: 5px;'>

<br><br>

<button type='submit' style='background-color:rgb(49, 179, 31); margin-left: 54px;border-radius: 6px;'>Enviar</button>
</div>
</form>
";

?>