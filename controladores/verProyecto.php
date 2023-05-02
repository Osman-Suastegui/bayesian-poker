<?php
include "./modelos/proyecto.php";

$proyecto = new Proyectos();
$integrantes = $proyecto->obtenerIntegrantesProyecto();
$integrantesActivos = $integrantes[0];
$integrantesInactivos = $integrantes[1];


$maxIntegrantes = max(count($integrantesActivos),count($integrantesInactivos));

if (isset($_POST['abandonarProyecto'])) {
    $proyecto->abandonarProyecto();
    header("Location: ./proyectos.php");
}


include "../bayesian-poker/vistas/verProyecto.php";
?>