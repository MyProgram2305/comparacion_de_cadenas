<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible"content="IE=edge">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<title></title>
		<link rel="stylesheet"  href="css/bootstrap-grid.min.css">
	</head>
	<body>
	<?php
	$var1 = "hola";
	echo '$var1 es '.$var1;
	echo '<br>';
	$var2 = "hola";
	echo '$var2 es '.$var2;
	echo '<br>';

	if (strcmp($var1, $var2) !== 0) {
		echo '$var1 no es igual a $var2 en una comparación que considera mayúsculas y minúsculas';
	}
	else{
		echo '$var1 y $var2 son iguales en una comparación que considera mayúsculas y minúsculas';
	}
	?>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<img src="img/taco.jpeg" width="50">
</body>
</html>