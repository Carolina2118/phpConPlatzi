<?php

$palabras = array("sombra","raton", "girasol");
$palabrasDesordenadas = array();

for ($i=0; $i < 3; $i++) { 

   $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
}

print_r($palabrasDesordenadas);


echo"
<div style='border-style: double; padding: 10px; border: 100px solid #adabaa; background-color: #d79448;'>

<p style =' text-align: center;font-size: 40px'>Adivina cual es la palabra</p>

    <form action='analisis.php'>
        <div style='display:flex; flex-direction:column;  padding: 10px; border: 9px solid #4CAF50; align-items: center;'>
            <p style='flex-direction:column;text-align: center; font-size: 20px;'> En el jardín estoy y en tus pies siempre voy.</p>
                <P style='text-align: center;font-size: 25px;' >ARBMOS </P>
                <input type='text' name='palabra0' style='flex-direction:column;border-radius: 5px;width: 15em; padding: 4px;'>
            <p style='text-align: center;font-size: 20px;'>Hay quienes huyen de mí por temor y quienes me conectan en el ordenador</P>

            <P style='text-align: center;font-size: 25px;'>ONTRA</P>
                <input type='text'name='palabra1' style='border-radius: 5px;width: 15em; padding: 4px;'>
            <p style='text-align: center;font-size: 20px;'>Siempre mirando al sol y no soy un caracol.
                Giro y giro sin fin y no soy un bailarín.</p>

            <p style='text-align: center;font-size: 25px;'> SORALGI</p>
                <input type='text' name='palabra2' style='border-radius: 5px;width: 15em; padding: 4px;'>
            <br><br>
                <button type='submit' style='justify-content: center; margin-top: 48px; background-color:rgb(49, 179, 31); border-radius: 6px; width:10em; padding: 6px;font-size: 20px;'>Enviar</button>
        </div>
    </form>
</div>
";

?>