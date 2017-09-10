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
						RECURSOS
					</td>
					<td width="20%" align="center" style="background-color:#BEBABA">
						<a href="registro.php">REGISTRO DE USUARIOS</a>
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
<!--						<h4>Evento: <?php echo $nombre ?></h4> -->
						<h4 align="center">Registro de usuarios</h4>
						<div style="margin: 0% 15%" align="center">
						<?php
			            	// Usuarios
							$query = "SELECT * FROM usuarios where email='".trim($_POST["email"])."'";
							$result = mysql_query($query,$link);
							$row = mysql_fetch_array($result);
				            if ($row<1) {
								$query = "INSERT INTO usuarios (nombres, email, telefono) VALUES ('".$_POST["nombres"]."','".$_POST["email"]."',".$_POST["telefono"].")";
								$result = mysql_query($query,$link);
								echo "Registro exitoso, Muchas gracias.<br><br>";
							} else {
								echo "Este email ya está registrado, Muchas gracias.<br><br>";
							}
						?>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>