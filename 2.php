<?php

$categoria=$_POST['cat'];
$sueldo=$_POST['sueldo'];
$t=0;

switch ($categoria) {
			case '1':
				echo "El total de su Salario es de: $".$t = $sueldo*(15/100)+($t+$sueldo);
				break;

				case '2':
				echo "El total de su Salario es de: $".$total = $sueldo*(10/100)+($total+$sueldo);
				break;

				case '3':
				echo "El total de su Salario es de: $".$total = $sueldo*(8/100)+($total+$sueldo);
				break;

        case '4':
				echo "El total de su Salario es de: $".$total = $sueldo*(7/100)+($total+$sueldo);
				break;

				default:
				echo "Se ha cometido un error, favor de intentar nuevamente";
				break;
			}



?>
