<?php
include "../bayesian-poker/modelos/proyecto.php";
include "../bayesian-poker/vistas/misproyectos.html";

$proy = new Proyectos();
$proyectos = $proy->obtenerProyectos();



foreach($proyectos as $h) {
    foreach($h as $clave => $valor) {
        echo "Clave: " . $clave . ", Valor: " . $valor . "<br>";
    }
}
?>