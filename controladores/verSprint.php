<?php
    include "../bayesian-poker/modelos/sprint.php";
    include "../bayesian-poker/modelos/historia.php";
    include "../bayesian-poker/modelos/Usuario.php";
    $claseUsuario = new Usuario();
    $rol = $claseUsuario->obtenerRol($_GET['idProyecto']);


    $sprint = new Sprint();
    $idProyecto = $_GET['idProyecto'];
    $idSprint = $_GET['idSprint'];
    $nombreSprint = $sprint->obtenerNombreSprint($idSprint);
    $claseHistoria = new Historia();
    $historias = array();
    if($_GET['estatus'] == 'activo'){
        $historias = $claseHistoria->obtenerHistoriasActivas($idSprint);
    }else{
        $historias = $claseHistoria->obtenerHistoriasInactivas($idSprint);
    }
    

    include "../bayesian-poker/vistas/verSprint.php";

?>