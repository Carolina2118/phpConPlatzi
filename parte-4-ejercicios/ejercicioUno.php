<?php 
/*--
$estudiante = 0;

if ($estudiante >=4) {
    echo "El estudiante tendrá sus juguetes en la parte inferior de la bodega.";

} if ($estudiante >=7){
echo "El estudiante tendrá sus juguetes en la parte media de la bodega.";
} 

?>

*/
?>
<?php
$student =5;
switch ($student) {
    case  ($student <=5):
    echo "Tendrás tu espacios en la parte inferior de la bodega.";
    break;
    case($student >5 && $student <7):
          echo "Tendrán sus espacios en la parte media de la bodega.";
        break;
        case ($student >=7):
        echo "Tendrán sus espacios en la parte alta de la bodega.";
            break;
    default:
        echo" No tengan registro de su edad pero igual tendrán un espacio de almacenamiento en la bodega de al lado.";
        break;
}

?>