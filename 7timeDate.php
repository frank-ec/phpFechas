<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$t = time();
print "<p>".$t."</p>";
$fecha = date("d/m/Y",$t);
print "<p>".$fecha."</p>";

$hora = date("h:i:s",$t);
print "<p>".$hora."</p>";

print "<hr>";

print "Dia de la semana l <br>";
$diaSemana = date("l",$t);
print $diaSemana;
print "<hr>";

print "Dia del mes j <br>";
$diaMes = date("j",$t);
print $diaMes;
print "<hr>";

print "Mes F<br>";
$mes = date("F",$t);
print $mes;
print "<hr>";

print "Año Y<br>";
$anio = date("Y",$t);
print $anio;
print "<hr>";

print "Hora H<br>";
$hora = date("H",$t);
print $hora;
print "<hr>";

print "Minutos i<br>";
$min = date("i",$t);
print $min; 
print "<hr>";

print "AM o PM  A<br>";
$ampm = date("A",$t);
print $ampm;
print "<hr>";

print "Hoy es ".$diaSemana." del mes ".$mes." a ".$diaMes." del año ".$anio."
 y son las ".$hora." y ".$min." minutos.";













?>    

</body>
</html>


