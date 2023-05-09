<?php
include "./modelos/proyecto.php";
include "./modelos/usuario.php";
$proyecto = new Proyectos();
$usuario = new Usuario();
$integrantes = $proyecto->obtenerIntegrantesProyecto();
$integrantesActivos = $integrantes[0];
$integrantesInactivos = $integrantes[1];


$maxIntegrantes = max(count($integrantesActivos),count($integrantesInactivos));

if (isset($_POST['abandonarProyecto'])) {
    $proyecto->abandonarProyecto();
    header("Location: ./proyectos.php");
}
if(isset($_POST['deshabilitarProyecto'])){
   $proyecto->deshabilitarProyecto();
   header("Location: ./proyectos.php");

}
if(isset($_POST['deshabilitarRol'])){
    $idUsuario = $_COOKIE['idUsuario'];
    $idProyecto = $_GET['idProyecto'];
    $proyecto->deshabilitarRol($idUsuario,$idProyecto);
    header("Location: ./proyectos.php");
 
 }
$idProyecto = $_GET['idProyecto'];
$rol = $usuario->obtenerRol($idProyecto);
$datosProyecto = $proyecto->obtenerProyecto();

include "../bayesian-poker/vistas/verProyecto.php";
?>