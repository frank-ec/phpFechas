<?php
if (isset($_POST["fecha"])) {
	$f = $_POST["fecha"];
	list($a,$m,$d) = explode("-",$f);
	if (checkdate($m, $d, $a)) {
		$edad = (date("md")<$m.$d?date("Y")-$a-1:date("Y")-$a);
		print "<p>Tienes ".$edad." años</p>";
	} else {
		print "<p>Fecha en formato erróneo</p>";
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cálculo de edades</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post">
	<p>
		<label for="fecha">Escribe tu fecha de nacimiento:</label>
		<input type="text" name="fecha" placeholder="YYYY-MM-DD">
	</p>
	<p>
		<input type="submit" name="envia" value="Enviar fecha">
	</p>
</form>
</body>
</html>