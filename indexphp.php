
<!DOCTYPE html>
<html>
<head>
<!--	<style> 
		div.container {
			background-color: white;
		}
		div.encabezado {
			text-align: center;
		}
		div.izquierda {
			width=50%;
		}
		div.derecha {
			padding-top=0;
			width=50%;
		}
		div.pie {
			text-align: right;
			position: absolute;
			background-color: white;
			top: 100%;
		}
	</style>-->
	<title>Calendario</title>
</head>
<body>
	<?php 
		require_once ('lib\mercadopago.php');

		$mp = new MP('5464869870265688', '2iiqyivT935TH6LYgZg3HWKLjK0DX9iA');

		$preference_data = array(
			"items" => array(
				array(
					"title" => "Participación en Constelación familiar",
					"quantity" => 1,
					"currency_id" => "VEF", // Available currencies at: https://api.mercadopago.com/currencies
					"unit_price" => 4500.00
				),
				array(
					"title" => "Solicitud de constelación",
					"quantity" => 1,
					"currency_id" => "VEF", // Available currencies at: https://api.mercadopago.com/currencies
					"unit_price" => 8000.00
				)
			)
		);

		$preference = $mp->create_preference($preference_data);
		include_once("analyticstracking.php") 
	?>
	<br>
	<div class="container">
		<div style="text-align:center;">
			<font face="tahoma" color="green" size="6">PSICOEXPRESATE</font><br>
			<font color="red" size="4">Acompañamiento para toda la familia</font><br>
			Psicología, psicopedagogia, constelaciones familiares, aprendizaje y formación, coaching y programación neurolinguistica<br>
			Contactos: +58(414)275.2679 / +58(414)480.2725 - <a href="mailto:info@psicoexpresate.com.ve" target="_blank">info@psicoexpresate.com.ve</a><br>
			<br>
		</div>
		<table border="1">
			<tr>
				<td width="40%">
					<h4>Próximo evento: Constelación sobre salud</h4>
					<h3>El cuerpo enferma cuando el alma quiere dar un mensaje</h3>
					Precios:<br>
					Bs. 8.000,00 para quien se constele<br>
					Bs. 4.500,00 para los participantes<br>
					<br>
					Reserva de cupo: Mediante pago en línea, depósito o transferencia bancaria.<br>
					<br>
					Para pagar en línea <a href="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" class="blue-M-Rn-Ar" mp-mode="modal">haz clic aquí</a>
					<br>
					<h6>Para trasferencias bancarias:</h6>
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
					Para llegar: <a href="https://goo.gl/maps/Qdq8fEGEkpH2" target="_blank">Sede Psicoexpresate</a><br>
					<br>
					<div style="text-align:center;">
						<img SRC="eventos/0317.jpg" width="90%" height="90%">
					</div>
					<br>
				</td>
				<td valign="top" align="center">
					<br>
					<div style="vertical-align:top;">
						<iframe src="https://calendar.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=psicoexpresate%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FCaracas" style="border-width:0" width="768" height="576" frameborder="0" scrolling="no">
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
