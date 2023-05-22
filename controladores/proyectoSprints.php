<?php

include "../bayesian-poker/modelos/sprint.php";
include "../bayesian-poker/modelos/proyecto.php";
include "../bayesian-poker/modelos/usuario.php";

$sprintClase = new Sprint();
$sprints = $sprintClase->obtenerSprints();
$proyectoClase = new Proyectos();
$idProyecto = $_GET['idProyecto'];
$nombreProyecto  = $proyectoClase->obtenerNombreProyecto($idProyecto);
$claseUsuario = new Usuario();

$rol = $claseUsuario->obtenerRol($idProyecto);

include "../bayesian-poker/vistas/proyectoSprints.php";

?>