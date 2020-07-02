<?php

$altura=$_GET['altura'];
$diametro=$_GET['diametro'];
$r=$diametro/2;

define('PI', 3.1416);
$circulo= round((PI*(pow($r,2))),2)/2;

$triangulo= ($diametro*$altura)/2;


echo "El área de la figura es: ".($area=$triangulo+$circulo);

?>
