<?php
print "<B><U>Funciones variables (ejemplo c707.php)</U></B><BR><BR>";


$var1 = 2;
if (is_string($var1)) {
	$rutina = "procesa_cadena";
}	
else{
	$rutina = "procesa_entero";
}
// PHP analiza el contenido de la variable $rutina
// y si el contenido de la variable coincide
// con el nombre de una funci�n, intentar� su ejecuci�n

$rutina();

echo "<BR><BR>Fin";

// no se recomienda definir una funci�n con un nombre 
// de una variable. No da error, pero puede confundir
// a quien mantenga el programa 
function rutina() {
	echo "funci�n rutina, puesta para confundir un poco";
}
function procesa_cadena() {
	echo "ejecuci�n de la funci�n procesa cadena";
}
function procesa_entero() {
	echo "ejecuci�n de la funci�n procesa entero";
}
		
 
?>