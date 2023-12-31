<?php
// agregar.php

include("header.php");

$oper = "";
if( isset( $_GET['oper'] ) )
{
	$oper = $_GET['oper'];
}

// esta p�gina se llama de dos maneras:
// primero con oper en blanco
// segundo con oper=agregar
switch($oper)
{
	case "agregar":
		if( isset( $_POST['t�tulo'] ) && !empty( $_POST['t�tulo'] ) &&
		    isset( $_POST['texto'] ) && !empty( $_POST['texto'] ) )
		{
			// detecta uso de escape
			if( get_magic_quotes_gpc() )
			{
				$_POST['t�tulo'] = stripslashes( $_POST['t�tulo'] );
				$_POST['texto'] = stripslashes( $_POST['texto'] );
			}

			// crea un objeto Art�culo
			$art = new Art�culo( 0, $_POST['t�tulo'], $_POST['texto'] );

			// lo inserta en la tabla
			$art->insertar();

			print("Art�culo a�adido a la base de datos.");
		}
		else
			print("Faltan datos en el formulario de entrada");

		break;


	default:
		// la primera vez que se llama a esta p�gina oper estar�
		// en blanco
		// se crea un formulario con el par�metro oper = agregar
		// y que llama a esta misma p�gina
		print("Formulario de entrada de art�culos : <br/><br/>");
		print("<form action=\"agregar.php?oper=agregar\" method=\"post\">");
		print("<table>\n");

		print("<tr><td valign=\"top\">Tema del art�culo:</td><td><input type=\"text\" name=\"t�tulo\"></td>");
		print("<td><input type=\"submit\" value=\"Registrar\"></td></tr>\n");
		print("<tr><td valign=\"top\">Texto :</td><td colspan=\"2\"><textarea name=\"texto\" rows=\"20\" cols=\"50\"></textarea></td></tr>\n");

		print("</table>\n");
		print("</form>");
}

include("footer.php");
?>
