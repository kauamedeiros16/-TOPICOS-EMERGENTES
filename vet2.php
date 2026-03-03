<?php 
$numeros = [ 23, 24, 25, 26, 27];
$numeros[] = 28;
unset($numeros[3]);
foreach ($numeros as $num) {
 echo $num . "<br>";
}
?>