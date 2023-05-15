<?php
include "../bayesian-poker/modelos/Usuario.php";
include "../bayesian-poker/modelos/historia.php";

$usuario = new Usuario();
$idProyecto = $_GET['idProyecto'];
$idHistoria = $_GET['idHistoria'];
$rolUsuario = $usuario->obtenerRol($idProyecto);
$historia= new Historia();

if(isset($_POST['decisionScrumMaster'])){
    $idHistoria = $_GET['idHistoria'];
    $valor = $_POST['valorVotoScrumMaster'];
    $historia->votarHistoriaScrumMaster($idHistoria,$valor);
    $idSprint = $_GET['idSprint'];
    header("Location: votar.php?idProyecto=$idProyecto&idSprint=$idSprint&idHistoria=$idHistoria");

}

if(isset($_POST['agregarRonda'])){
    $historia->crearRonda($idHistoria);
    $idSprint = $_GET['idSprint'];
    header("Location: verSprint.php?idProyecto=$idProyecto&idSprint=$idSprint&estatus=activo");
    exit();
}
if(isset($_POST['asignarPromedio'])){
    $historia->asignarPromedioDeTodasLasVotaciones($idHistoria);

    $idSprint = $_GET['idSprint'];
    header("Location: verSprint.php?idProyecto=$idProyecto&idSprint=$idSprint&estatus=activo");
    exit();
}

if($historia->esHistoriaAceptada($idHistoria)){
    $datosHistoria = $historia->obtenerHistoria($idHistoria);
    $valorHistoria = $historia->obtenerValorHistoria($idHistoria);
    include "../bayesian-poker/vistas/votacionTerminada.php";
}
else if($rolUsuario == 'scrum master'){


    include "../bayesian-poker/vistas/votarScrumMaster.php";
    
}else{
    if(isset($_COOKIE['puntaje']) && isset($_POST['motivoHistoria'])){

        $puntaje = $_COOKIE['puntaje'];
        $motivoHistoria = $_POST['motivoHistoria'];
        // convertir a entero
        $puntaje = intval($puntaje);
        $historia->votarHistoria($idHistoria,$puntaje,$motivoHistoria);
        

    }
    

    include "../bayesian-poker/vistas/votarMiembro.php";
    
    
}

?>