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

<style>
::placeholder {
  color: blue;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: blue;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
}
</style>

</head>
<body>
<h1>Validar una fecha con CheckDate</h1>
<form method="post">
    <p>
  
        <label for="mes">Mes: </label>
        <select name="mes" id="mes">
            <?php
            $meses = [1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
            foreach ($meses as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }
            ?>
        </select>
        <label for="dia">dia: </label>
        <select name="dia" id="dia">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option>$i</option>";
            }
            ?>
        </select>
        <label for="anio">Año: </label>
        <input type="text" name="anio" id="anio" list="lista"  placeholder="A red placeholder text.." required>
        <datalist id="lista">
            <?php
            $anio = date('Y');
            $limite = $anio + 5;
            while ($anio <= $limite) {
                echo "<option value='$anio'></option>";
                $anio++;
            }
            ?>
        </datalist>
    </p>
    <p>
        <input type="submit" name="valida" value="Valida Fecha">
    </p>
</form>
<?php
if (isset($_POST["valida"])) {
    $mes = isset($_POST["mes"])?$_POST["mes"]:"0";
    $dia = isset($_POST["dia"])?$_POST["dia"]:"0";
    $anio = isset($_POST["anio"])?$_POST["anio"]:"0";
    
    print "La fecha que enviaste es ";
    if (checkdate($mes, $dia, $anio)) {
        print "correcta";
    } else {
        print "incorrecta";
    }

}
?>
</body>
</html>