<?php
include "../bayesian-poker/modelos/sprint.php";

$idProyecto = $_GET['idProyecto'];
$idSprint = $_GET['idSprint'];

if (isset($_POST['submit']) && $_POST['submit'] === 'guardar') {
    if(isset($_POST['nombreSprint']) && isset($_POST['descripcionSprint'])){
        $nombre = $_POST['nombreSprint'];
        $descripcion = $_POST['descripcionSprint'];
        $sprint = new Sprint();
        $sprint->editarSprint($nombre,$descripcion);
        
    }

}
if(isset($_POST['submit']) && $_POST['submit'] === 'deshabilitarSprint') {
    $sprint = new Sprint();
    $idSprint = $_GET['idSprint'];
    $idProyecto = $_GET['idProyecto'];

    $sprint->deshabilitarSprint($idSprint,$idProyecto);
    header("Location: ./proyectoSprints.php?idProyecto=$idProyecto");


}


$sprint = new Sprint();
$sprint = $sprint->obtenerSprint($idSprint,$idProyecto);
$nombreSprint = $sprint['nombre'];
$descripcionSprint = $sprint['descripcion'];


include "../bayesian-poker/vistas/editarSprint.php";

?>