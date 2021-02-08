<?php
session_start();
$_tiempo = 10 * 60;  //10 segundos  * 60
if(!isset($_SESSION["sesion"])) {
    header("location:login.php");
    exit;
} else if($_SESSION["sesion"]+$_tiempo < time()){
    $_SESSION = [];
    session_destroy();
    header("location:login.php?expiro=true");
    exit;
} else {
    $_SESSION["sesion"] = time();
}    

?>