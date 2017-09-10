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
					<td width="20%" align="center" style="background-color:#BEBABA">
						GALERIA
					</td>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="recursos.php">RECURSOS</a>
					</td>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="registro.php">REGISTRO DE USUARIOS</a>
					</td>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="reportepago.php">REPORTAR UN PAGO</a>
					</td>
				</tr>
			</table>
		</p>
		<table border="1">
			<?php
				$mes = array(
					1 => 'enero',
					2 => 'febrero',
					3 => 'marzo',
					4 => 'abril',
					5 => 'mayo',
					6 => 'junio',
					7 => 'julio',
					8 => 'agosto',
					9 => 'septiembre',
					10 => 'octubre',
					11 => 'noviembre',
					12 => 'diciembre'
				);
				$dia = array(
					0 => "Domingo",
					1 => "Lunes",
					2 => "Martes",
					3 => "Miércoles",
					4 => "Jueves",
					5 => "Viernes",
					6 => "Sábado"
				);
				date_default_timezone_set('America/Caracas');

       			$query = "SELECT * FROM eventospasados order by fecha DESC";
				$result = mysql_query($query,$link);
				while($row = mysql_fetch_array($result)) {
					$pnombre = utf8_encode($row["nombre"]);
					$pfecha = $row["fecha"];
					$pfoto1 = $row["foto1"];
					$pfoto2 = $row["foto2"];
					$pfoto3 = $row["foto3"];
					$pfoto4 = $row["foto4"];
					$pfoto5 = $row["foto5"];
					$pfoto6 = $row["foto6"];
					$pfoto7 = $row["foto7"];
					$pfoto8 = $row["foto8"];
					$pfoto9 = $row["foto9"];
					echo '<tr>';
						echo '<td valign="top">';
							echo '<div style="vertical-align:top;">';
								echo '<h4> Evento: '.trim($pnombre).'</h4>';
								echo '<h3> Fecha: '.$dia[date('w', strtotime($pfecha))].', '.date_parse($pfecha)['day'].' de '.$mes[date_parse($pfecha)['month']].' de '.date_parse($pfecha)['year'].'</h3>';
								echo '<p align="center">';
									echo '<img SRC="eventospasados/'.trim($pfoto1).'.jpg" width="30%" height="22.5%">';
									echo '<img SRC="eventospasados/'.trim($pfoto2).'.jpg" width="30%" height="22.5%">';
									echo '<img SRC="eventospasados/'.trim($pfoto3).'.jpg" width="30%" height="22.5%">';
									echo '<br>';
									echo '<img SRC="eventospasados/'.trim($pfoto4).'.jpg" width="30%" height="22.5%">';
									echo '<img SRC="eventospasados/'.trim($pfoto5).'.jpg" width="30%" height="22.5%">';
									echo '<img SRC="eventospasados/'.trim($pfoto6).'.jpg" width="30%" height="22.5%">';
									echo '<br>';
									echo '<img SRC="eventospasados/'.trim($pfoto7).'.jpg" width="30%" height="22.5%">';
									echo '<img SRC="eventospasados/'.trim($pfoto8).'.jpg" width="30%" height="22.5%">'; 
									echo '<img SRC="eventospasados/'.trim($pfoto9).'.jpg" width="30%" height="22.5%">';
								echo '</p>';
							echo '</div>';
						echo '</td>';
					echo '</tr>';
				}
			?>
		</table>
	</div>
</body>
</html>