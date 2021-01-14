
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
		$cad1="SALSA";
		$cad2="salsa";
		echo '$cad1= '.$cad1.'<br>';
		echo '$cad2= '.$cad2;
		$resultado = strcasecmp($cad1,$cad2);
		echo "<br>";

		if (!$resultado) {
			echo "Son iguales sin tomar en cuenta las mayusculas y minusculas";
		}else{
			echo "No son iguales";
		}
	?>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<img src="img/taco.jpeg" width="50">
</body>
</html>