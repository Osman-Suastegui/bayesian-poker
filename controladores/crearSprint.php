<?php

include "../bayesian-poker/modelos/sprint.php";
if (isset($_GET['idProyecto'])){
    $idProyecto = $_GET['idProyecto'];
}
if(isset($_POST['nombreSprint']) && isset($_POST['descripcionSprint'])){
    

    $nombre = $_POST['nombreSprint'];
    $descripcion = $_POST['descripcionSprint'];
    $sprint = new Sprint();
    $sprint->crearSprint($nombre,$descripcion);
}

include "../bayesian-poker/vistas/crearSprint.php";

?>