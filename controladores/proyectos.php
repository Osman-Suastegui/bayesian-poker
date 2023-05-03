<?php
include "../bayesian-poker/modelos/proyecto.php";

$proy = new Proyectos();
$proyectos = $proy->obtenerProyectos();

include "../bayesian-poker/vistas/misproyectos.php";
?>