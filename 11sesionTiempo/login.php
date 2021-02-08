<?php
if (isset($_POST["login"])) {
	session_start();
	if ($_POST["usuario"]=="franklin" && $_POST["clave"]=="12345") {
		$_SESSION["sesion"]=time();
		header("location:accesoSecreto.php");
		exit;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Entrada al sistema</title>
</head>
<body>
<h1>Limitar el tiempo de una sesión</h1>
<form method="post">
	<p>
		<label for="usuario">Usuario:</label>
		<input type="text" name="usuario" id="usuario">
	</p>
	<p>
		<label for="clave">Clave de acceso:</label>
		<input type="password" name="clave" id="clave">
	</p>
	<p>
		<input type="submit" name="login" id="Entrar">
	</p>
	
</form>
<?php
	if (isset($_GET["expiro"])) {
		print "<p> Sesion caducada, reingresar <p>";
	}
?>

</body>
</html>