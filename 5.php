<?php

$l=$_GET['largo'];
$a=$_GET['ancho'];

$triangulo= (($l/2)*$a)/2;
$rectangulo= (($l/2)*$a);

$total= $triangulo+$rectangulo;
echo "Area total: ".$total." cm2";





?>
