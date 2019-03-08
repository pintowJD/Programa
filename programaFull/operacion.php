<?php
$x = $_POST['num1'];
$y = $_POST['num2'];
$op = $_POST['opcion'];
function operacion($x, $y, $op){
  $resultado =  $x.$op.$y;  eval("\$resultado2=$resultado;");    echo $resultado2;}
echo operacion($x,$y,$op);

// if ($op=="+") {
// 	$Total = $x + $y;
// 	echo "El total es"." ".$Total;
// }
//
// elseif ($op=="-") {
// 	$Total = $x - $y;
// 	echo "El total es"." ".$Total;
// }
//
// elseif ($op=="*") {
// 	$Total = $x * $y;
// 	echo "El total es"." ".$Total;
// }
//
// else {
// 	$Total = $x / $y;
// 	echo "El total es"." ".$Total;
// 	return $Total;
// }


 ?>
