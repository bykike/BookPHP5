<?php
// aplicaci�n: AGENDA
// archivo: inicio.php

// esta funci�n nos ayuda a cargar las clases
// a medida de que se necesiten
function __autoload($miClase)
{
	include_once("Objetos/".$miClase.".php");
}

// se utiliza un archivo de inclusi�n para crear la
// parte constante de las p�ginas

include("header.php");

// crea un almanaque del mes y a�o elegido
$alma = new CAlmanaque($year,$mes);


// si se ha elegido un d�a del almanaque se muestra
// el contenido de la agenda del d�a
// al hacer clic en el bot�n actualizar se modifica
// el contenido del campo y se vueleve a mostrar modificado
// en pantalla

// en la pantalla inicial el campo $dia est� vac�o
// por lo que esta parte no se ejecuta

if($dia <> "")
{
    // crea un objeto Agenda
	$agenda = New Agenda($dia);

    // si se utiliza el formulario de actualizaci�n,
    // se rescata el valor introducido en textarea
    // para actualizar la tabla

	if ($_GET['op'] == "actualizar")
	{
	   $memo= $_GET['entrada'];
       $agenda->modificar($memo);
    }

	$texto = $agenda->getAMemo();

	// carga un formulario
	// para visualizar y modificar
	$lin = "<td class=\"marco\" valign=\"top\">".$nrodia."-".$mes."-".$year ;
	$lin.= "<form name=\"f2\" action=\"inicio.php\" method=\"GET\">";
	$lin.= "<textarea name=\"entrada\"  cols=\"50\" rows=\"20\">" . $texto."</textarea>";

	// el uso de campos ocultos facilita el pase de variables
	// entre una p�gina y la siguiente

	$lin.= "<input type=\"hidden\" value =\"".$dia."\" name=\"dia\">";
	$lin.= "<input type=\"hidden\" value =\"".$nrodia."\" name=\"fdia\">";
	$lin.= "<input type=\"hidden\" value =\"actualizar\" name=\"op\">";
	$lin.= "<input type=\"submit\" value=\"Actualizar\">";
    $lin.= "</form></td>\n";

}
print $lin;
include("footer.php");
?>
