<?php

include "../bayesian-poker/modelos/sprint.php";
include "../bayesian-poker/modelos/proyecto.php";

$sprintClase = new Sprint();
$sprints = $sprintClase->obtenerSprints();
$proyectoClase = new Proyectos();
$nombreProyecto  = $proyectoClase->obtenerNombreProyecto();

include "../bayesian-poker/vistas/proyectoSprints.php";

?>