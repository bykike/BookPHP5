<HTML>
	<HEAD>
		<TITLE>Definici�n de matrices</TITLE>
	</HEAD>
	<BODY>	
		<CENTER><H3>Uso del constructor array() (ejemplo c504.php)</H3> 
		<?php 
		
			$Estad = array(1=>"Alemania", "Austria","Pa�s"=> "B�lgica");
			 
		?> 
		<TABLE BORDER="1" CELLPADDING="1" CELLSPACING="2">
			<TR ALIGN="center" >
				<TD>Elemento</TD>
				<?php
					foreach ($Estad as $clave => $valor)
						echo"<TD>$clave</TD>";
				?>
			</TR>
			<TR ALIGN="center" >
				<TD>Valor</TD>
				<?php
		   			foreach ($Estad as $clave => $valor)
			  			echo "<TD> $valor </TD>";
				?>		 
			</TR>
		</TABLE>
	</BODY>
</HTML>