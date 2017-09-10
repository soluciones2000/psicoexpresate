<?php 
//include_once("credenciales.php");
include_once("conexion.php");
include_once("analyticstracking.php");
?>
<!DOCTYPE html>


<html>
<head>
	<title>Psicoexpresate - Acompañamiento para toda la familia</title>
	<link rel="icon" type="image/png" href="psicoexpresate_ico.png" />
</head>
<body>
	<div class="container">
		<div style="text-align:center;">
			<font face="tahoma" color="green" size="6">PSICOEXPRESATE</font><br>
			<font color="red" size="4">Acompañamiento para toda la familia</font><br>
			Psicología, psicopedagogia, constelaciones familiares, aprendizaje y formación, coaching y programación neurolinguistica<br>
			Contactos: +58 (424) 407.1820 / +58 (414) 275.2679 / +58 (414) 480.2725 - <a href="mailto:info@psicoexpresate.com.ve" target="_blank">info@psicoexpresate.com.ve</a><br>
		</div>
		<p>
			<table border="0" align="center" width="100%">
				<tr>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="index.php">EVENTOS</a>
					</td>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="galeria.php">GALERIA</a>
					</td>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="recursos.php">RECURSOS</a>
					</td>
					<td width="20%" align="center" style="background-color:#BEBABA">
						REGISTRO DE USUARIOS
					</td>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="reportepago.php">REPORTAR UN PAGO</a>
					</td>
				</tr>
			</table>
		</p>
		<table border="1" align="center" width="60%">
			<tr>
				<td valign="top">
					<div style="vertical-align:top;">
						<h4 align="center">Registro de usuarios</h4>
						<p align="center">Registrese acá para recibir novedades, promociones e información general de nuestros eventos:</p>
						<div style="margin: 0% 15%">
					        <form name="pago" method="post" action="usuario.php">
					            <table border=0>
					            	<tr>
					            		<td>
					            			Nombres:
					            		</td>
					            		<td>
								            <INPUT type="text" name="nombres" maxlength="200" size="50">            			
					            		</td>
					            	</tr>
					            	<tr>
					            		<td>
					            			Dirección de email:
					            		</td>
					            		<td>
								            <INPUT type="text" name="email" maxlength="150" size="50"><br>
					            		</td>
					            	</tr>
					            	<tr>
					            		<td>
					            			Teléfono del participante:
					            		</td>
					            		<td>
								            <INPUT type="text" name="telefono" maxlength="50" size="50"><br>
					            		</td>
					            	</tr>
					            </table>
					            <br>
					            <INPUT type="submit" value="Enviar">
	        				</form>
							<br>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
