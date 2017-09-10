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
?>
