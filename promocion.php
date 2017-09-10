<?php 

$scope = "local";
//$scope = "produccion";

if ($scope=="local") {
	// local
	$servidor = "localhost";
	$cuenta = "root";
	$password = "myapm";
	$database = "psicoexpresate";
}

if ($scope=="produccion") {
	// Produccion
	$servidor = "localhost:3306";
	$cuenta = "sgcco_psico";
	$password = "psicoexpresate12345**";
	$database = "sgcconsu_psicoexpresate";
}

$link = @mysql_connect($servidor, $cuenta, $password) or die ("Error al conectar al servidor.");
@mysql_select_db($database, $link) or die ("Error al conectar a la base de datos.");
$query = "SELECT * FROM eventos";
$imagen = $row["imagen"];
$nombreimg = $row["nombreimg"];

echo $imagen;
?>
<!DOCTYPE html>


<html>
<head>
</head>
<body>
<?php echo $imagen; ?>
<?php if($imagen): ?>
	<img SRC="eventos/ <?php echo $nombreimg ?>.jpg">
<?php endif; ?>
</body>
</html>
