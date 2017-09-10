<?php 
require_once ('lib\mercadopago.php');

$mp = new MP('5464869870265688', '2iiqyivT935TH6LYgZg3HWKLjK0DX9iA');

$preference_data = array(
	"items" => array(
		array(
			"title" => "Multicolor kite",
			"quantity" => 1,
			"currency_id" => "VEF", // Available currencies at: https://api.mercadopago.com/currencies
			"unit_price" => 10.00
		)
	)
);

$preference = $mp->create_preference($preference_data);
?>
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>Pay</title>
	</head>
	<body>
		<a href="<?php echo $preference['response']['init_point']; ?>">Pay</a>
	</body>
</html>
-->

<!DOCTYPE html>
<html>
	<head>
		<title>Pay</title>
	</head>
	<body>
		<a href="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" class="blue-M-Rn-Ar" mp-mode="modal">Pagar</a>

<!-- Pega este código antes de cerrar la etiqueta </body> -->
<!--		<script type="text/javascript">
			(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
		</script>
	</body>
</html>

<!--
<!DOCTYPE html>
<html>
	<head>
		<title>Pay</title>
	</head>
	<body>
		<a href="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" class="blue-M-Rn-Ar" mp-mode="modal" onreturn="execute_my_onreturn">Pagar</a>

		<script type="text/javascript">
			function execute_my_onreturn (json) {
			    if (json.collection_status=='approved'){
		    	    alert ('Pago acreditado');
			    } else if(json.collection_status=='pending'){
    	    		alert ('El usuario no completó el pago');
			    } else if(json.collection_status=='in_process'){    
        			alert ('El pago está siendo revisado');    
			    } else if(json.collection_status=='rejected'){
    	    		alert ('El pago fué rechazado, el usuario puede intentar nuevamente el pago');
			    } else if(json.collection_status==null){
        			alert ('El usuario no completó el proceso de pago, no se ha generado ningún pago');
		    	}
			}
		</script>
	</body>
</html>
-->