<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Validar una fecha con CheckDate</title>
    <style>
        @import url('css/bootstrap.css');
		@import url('css/bootstrap-datepicker.css'); */
        @import url('css/fontello.css');
		   
    </style>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/bootstrap-datepicker.js"></script>

<script>
                // Llamando a datepicker
                $(function(){
                    $('.datepicker').datepicker({
                        language: "es",	
						format: "yyyy-mm-dd", // No cambiar por / afecta a la url que se envia por $_GET https://uxsolutions.github.io/bootstrap-datepicker/
						todayBtn: true,
    					clearBtn: true,
						daysOfWeekHighlighted: "0,6",
					 });
                });    
</script>

</head>
<body>
<h1>Recibiendo la fecha desde datepicker</h1>
<form method="post">
    <p>
    <input type="text" class="datepicker" name="fecha" required="" value="<?php echo date('Y-m-d');?>">             
    </p>

    <p>
        <input type="submit" name="valida" value="Separar Fecha">
    </p>
</form>
<?php
if (isset($_POST["valida"])) {
    $fecha = isset($_POST["fecha"])?$_POST["fecha"]:"0";
    /* Fecha en formato entero, es decir, que represente los segundos
     transcurridos desde la fecha Unix*/
    $fechaComoEntero = strtotime($fecha);
    /*  Asumimos que $fechaComoEntero es
        como su nombre lo dice una variable entera, que
        calculamos con los ejemplos mostrados arriba
        */
    $year = date("Y", $fechaComoEntero);
    $month = date("m", $fechaComoEntero);
    $day = date("d", $fechaComoEntero);

    print $fechaComoEntero."<br>";
    print $year."<br>";
    print $month."<br>";
    print $day."<br>";

}
?>
</body>
</html>