<?php 
//include_once("credenciales.php");
include_once("conexion.php");
include_once("analyticstracking.php");
?>
<!DOCTYPE html>


<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: auto; /* Sit on top */
    padding-top: 10; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 70%;
    height: 70%;
    text-align: center;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
	<title>Psicoexpresate - Acompañamiento para toda la familia</title>
	<link rel="icon" type="image/png" href="psicoexpresate_ico.png" />
</head>
<body onload="Abrir_ventana()">
	<?php if ($imagen): ?>
		<!-- The Modal -->
		<div id="myModal" class="modal">
			<!-- Modal content -->
	  		<div class="modal-content">
				<span class="close">&times;</span>
				<b>Próximo evento:</b><br>
				<img SRC="eventos/<?php echo $nombreimg ?>.jpg" height="90%" width="90%">
			</div>
		</div>
		<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// variables de la imagen
			var imagen = "'.$imagen.'";

			// When the user clicks the button, open the modal 
			function Abrir_ventana() {
				if (imagen) {
				    modal.style.display = "block";
				}
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			    modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}
		</script>
	<?php endif; ?>

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
					<td width="20%" align="center" style="background-color:#BEBABA">
						EVENTOS
					</td>
					<td width="20%" align="center" style="background-color:#E5E0E0">
						<a href="galeria.php">GALERIA</a>
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
			<tr>
				<td width="50%" valign="top">
					<div style="vertical-align:top;">
						<h4>Próximo evento: <?php echo $nombre ?></h4>
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
						?>
						<h3>Fecha: <?php echo $dia[date('w', strtotime($fecha))].', '.date_parse($fecha)['day'].' de '.$mes[date_parse($fecha)['month']].' de '.date_parse($fecha)['year'] ?></h3>
						<?php echo $detalles ?><br>
						<br>
						<b>Facilitado por:</b><br> <?php echo $facilitador ?><br>
						<?php
							if ($perfil) {
								echo $detperfil."<br><br>";
							}
						?>
						Mas información en esta <a href="mailto:info@psicoexpresate.com.ve" target="_blank">dirección de correo</a><br>
						<br> 
						<b>Para llegar:</b> <a href="https://goo.gl/maps/Qdq8fEGEkpH2" target="_blank">Sede Psicoexpresate</a><br>
						<br>
						<?php
							if ($imagen) {
								echo '<div style="text-align:center;">';
								echo '<img SRC="eventos/'.$nombreimg.'.jpg" width="75%" height="75%">';
								echo '</div>';
								echo "<br>";
							}
						?>
					</div>
				</td>
				<td valign="top" align="center">
					<br>
					<div style="vertical-align:top;">
						<iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=psicoexpresate%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FCaracas" style="border-width:0" width="640" height="576" frameborder="0" scrolling="no">
						</iframe>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<script type="text/javascript">
		(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
	</script>
</body>
</html>

<!--
					<h3>El cuerpo enferma cuando el alma quiere dar un mensaje</h3>
					Reserva de cupo: Mediante pago en línea, depósito o transferencia bancaria.<br>
					<br>
					Precios:<br>
					Bs. 8.000,00 para quien se constele 
					<a mp-mode="dftl" href="https://www.mercadopago.com/mlv/checkout/start?pref_id=52173759-83469067-9421-4fad-a7e2-821703ce30d5" name="MP-payButton" class='blue-ar-s-sq-none'>Pagar</a>
					<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
					</script>
					<br>
					Bs. 4.500,00 para el participante 
					<a mp-mode="dftl" href="https://www.mercadopago.com/mlv/checkout/start?pref_id=52173759-bc2b51dd-51c9-41e5-a1cd-b21f92d99c63" name="MP-payButton" class='orange-ar-s-sq-none'>Pagar</a>
					<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
					</script>
					<br>
					<u>Para depósitos o trasferencias bancarias:</u><br>
					<br>					
					Cuentas bancarias:<br>
					Banco Mercantil: 0105-0670-18-8670006251<br>
					Banesco: 0134-0358-97-3582027055<br>
					A nombre de Loredana Frusciante<br>
					CI 10.230.476<br>
					<br>
					Banco Provincial: 0108 0082 03 0100388542<br>
					B.O.D.: 0116 0134 10 0021818819<br>
					A nombre de Luis Rodríguez<br>
					CI 7.132.358<br>
					<br>
					Enviar el comprobante a <a href="mailto:info@psicoexpresate.com.ve" target="_blank">info@psicoexpresate.com.ve</a><br>
					<br>
					<div style="text-align:center;">
						<img SRC="eventos/0317.jpg" width="90%" height="90%">
					</div>
-->