<?php
include "../bayesian-poker/modelos/conexion.php";

class Historia {

    public function crearHistoria($nombre,$descripcion){
        $idProyecto = $_GET['idProyecto'];
        $idSprint = $_GET['idSprint'];
        $idUsuario = $_COOKIE['idUsuario'];
        $conexion = new Conexion();
        $sql = "SELECT $idProyecto FROM integrantes WHERE idUsuario = '$idUsuario' AND idProyecto = '$idProyecto'";
        $resultado = $conexion->getConexion()->query($sql);
        if($resultado->num_rows > 0){
            $sql = "INSERT INTO historiasusuario (idSprint, nombre, descripcion, fechaCreacion,estatus,metodoDeAceptacion) VALUES ('$idSprint', '$nombre', '$descripcion', NOW(),'creada',null)";
            $resultado = $conexion->getConexion()->query($sql);
        }
    
    }
}
?>