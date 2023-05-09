<?php
include "../bayesian-poker/modelos/proyecto.php";
include "../bayesian-poker/modelos/usuario.php";
$proy = new Proyectos();
$proyectosTotales = $proy->obtenerProyectos();
$claseUsuario = new Usuario();
$proyectos = [];


foreach ($proyectosTotales as $proyecto) {
    $idProyecto =  $proyecto['idProyecto'];
    $rol = $claseUsuario->obtenerRol($idProyecto);


    if($rol == 'miembro' && $proyecto['estatus'] == 'activo' &&  $proy->estaScrumMasterActivo($idProyecto)){
            $proyectos[] = array(
                "idProyecto" => $proyecto['idProyecto'],
                "nombre" => $proyecto['nombre'],
                "descripcion" => $proyecto['descripcion'],
                "estatus" => $proyecto['estatus']
            );
    }

    if($rol == 'scrum master'){
        $proyectos[] = array(
            "idProyecto" => $proyecto['idProyecto'],
            "nombre" => $proyecto['nombre'],
            "descripcion" => $proyecto['descripcion'],
            "estatus" => $proyecto['estatus']
        );
    }
}



include "../bayesian-poker/vistas/misproyectos.php";
?>