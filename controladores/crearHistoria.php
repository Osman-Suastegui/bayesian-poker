<?php
include "../bayesian-poker/modelos/historia.php";

$idProyecto = $_GET['idProyecto'];
$idSprint = $_GET['idSprint'];


// nombreHistoria
if(isset($_POST["nombreHistoria"]) && isset($_POST["descripcionHistoria"]) ){
    $historia = new Historia();
    $nombreHistoria = $_POST["nombreHistoria"];
    $descripcionHistoria = $_POST["descripcionHistoria"];
   
    $historia->crearHistoria($nombreHistoria,$descripcionHistoria);


}
include "../bayesian-poker/vistas/crearHistoria.php";



?>