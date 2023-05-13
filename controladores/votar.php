<?php
include "../bayesian-poker/modelos/Usuario.php";
include "../bayesian-poker/modelos/historia.php";

$usuario = new Usuario();
$idProyecto = $_GET['idProyecto'];
$idHistoria = $_GET['idHistoria'];
$rolUsuario = $usuario->obtenerRol($idProyecto);
$historia= new Historia();
if($historia->esHistoriaAceptada($idHistoria)){
    include "../bayesian-poker/vistas/votacionTerminada.php";
}
else if($rolUsuario == 'scrum master'){
    include "../bayesian-poker/vistas/votarScrumMaster.php";
    
}else{
    include "../bayesian-poker/vistas/votarMiembro.php";
}

?>