<?php

include "../bayesian-poker/modelos/sprint.php";
include "../bayesian-poker/modelos/proyecto.php";
include "../bayesian-poker/modelos/usuario.php";

$sprintClase = new Sprint();
$sprints = $sprintClase->obtenerSprints();
$proyectoClase = new Proyectos();
$nombreProyecto  = $proyectoClase->obtenerNombreProyecto();
$claseUsuario = new Usuario();
$idProyecto = $_GET['idProyecto'];

$rol = $claseUsuario->obtenerRol($idProyecto);

include "../bayesian-poker/vistas/proyectoSprints.php";

?>