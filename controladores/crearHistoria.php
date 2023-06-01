<?php
include_once "../bayesian-poker/modelos/historia.php";

$idProyecto = $_GET['idProyecto'];
$idSprint = $_GET['idSprint'];


// nombreHistoria
if(isset($_POST["nombreHistoria"]) && isset($_POST["descripcionHistoria"]) ){
    $historia = new Historia();
    $notificacion = new Notificaciones();
    $nombreHistoria = $_POST["nombreHistoria"];
    $descripcionHistoria = $_POST["descripcionHistoria"];
    if (empty($_POST["nombreHistoria"]) || empty($_POST["descripcionHistoria"])) {
        echo "<div class='mensaje-error'>los campos no pueden estar vacios</div>";
    }else{   
        $historia->crearHistoria($nombreHistoria,$descripcionHistoria);
    }


}
include "../bayesian-poker/vistas/crearHistoria.php";



?>