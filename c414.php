<?php
// Funci�n include(ejemplo c414.php) 
function xx()
{
if (empty($var1)):
	print "c414.php->  \$var1 no es visible dentro de la funci�n xx<BR>";
endif;	 
 
$var2 = "Esta variable se defini� en la funci�n";

}
xx();
if (empty($var2)):
	// no se espera otra cosa, pero para comprobar que se mantienen
	// todas las reglas de �mbito hacemos esta comprobaci�n
	print "c414.php->  \$var2 no es visible dentro del c�digo principal<BR>";
endif;	
if (!empty($var1)):
	// no se espera otra cosa, pero para comprobar que se mantienen
	// todas las reglas de �mbito hacemos esta comprobaci�n
	// $var1 fue definida en el archivo llamante pero sigue siendo visible
	// sin necesidad de indicar globals
	print "c414.php->  \$var1 es visible dentro del c�digo principal<BR>";
endif;
print "<BR>c414.php-> En el archivo c414.php (include) se sumar� 1 a \$var1<BR>"; 
$var1++;
$var3 = 99;

?> 
 