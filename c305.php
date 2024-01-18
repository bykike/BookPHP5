<?php
// Globales (ejemplo c305.php)

function PruebaSinGlobal()
{ 
    $var++; 
	echo "Prueba sin global. \$var  :". $var . "<BR>"; /* qu� valor muestra $var */
	// al no haber definici�n global y no usar
	// $GLOBALS, $var es una variable local
	// por eso imprime 1 en lugar de 21
} 
function PruebaConGlobal()
{ 
    global $var;
	$var++;
	echo "Prueba con global. \$var  :". $var . "<BR>"; /* qu� valor muestra $var */
	// $var ya no es local 
	// imprime 21 
} 
function PruebaConGlobals()
{ 
    $GLOBALS["var"]++;
	echo "Prueba Con GLOBALS. \$var  :". $GLOBALS["var"] . "<BR>"; /* qu� valor muestra $var */
	// $var ya no es local  
	// imprime 22
}
$var = 20; /* variable global */  
PruebaSinGlobal();
PruebaConGlobal();
PruebaConGlobals(); 
?>
