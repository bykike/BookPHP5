<?php
print "<B><U>Clonaci�n de objetos (ejemplo c820.php)</U></B><BR><BR>";

// Definici�n de la clase Prueba
class Prueba {
 	static $contador = 0;
	

	function __construct() {
	    print "entra a construct<BR>";
		$this->contador = self::$contador++;
	}

	function __clone() {
		print "<BR>entra a clone<BR>";
                $this->contador = self::$contador++;
	 	$this->cliente = "nuevo cliente";
		$this->direcci�n = "nueva direcci�n";
	}
	  
}	

 
$objPrueba = new Prueba;

$objPrueba->cliente = "cliente original";
$objPrueba->direcci�n = "direcci�n original";
print "Objeto original<BR>";
// el objeto original
print "Contador " . $objPrueba->contador . "<BR>";
print $objPrueba->cliente . "<BR>"; 
print $objPrueba->direcci�n . "<BR>"; 

$CloPrueba = clone $objPrueba;
print "Objeto clonado<BR>";
// el objeto clonado
print "Contador " . $CloPrueba->contador . "<BR>";
print $CloPrueba->cliente . "<BR>"; 
print $CloPrueba->direcci�n . "<BR>"; 
?>