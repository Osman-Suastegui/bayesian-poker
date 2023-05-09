<?php
include_once "../bayesian-poker/modelos/conexion.php";

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

    public function obtenerHistoriasActivas($idSprint){
        // las historias activas son las que tienen el estatus en deliberada y creada
        $sql = "SELECT * FROM historiasusuario WHERE idSprint = '$idSprint' AND (estatus = 'creada' OR estatus = 'deliberada')";
        $conexion = new Conexion();
        $resultado = $conexion->getConexion()->query($sql);
        $historias = array();
        if($resultado->num_rows > 0){
            while($historia = $resultado->fetch_assoc()){
                $historias[] = $historia;

            }
        }
        return $historias;


    }
    public function obtenerHistoriasInactivas($idSprint){
        // las historias activas son las que tienen el estatus en"aceptada"
        $sql = "SELECT * FROM historiasusuario WHERE idSprint = '$idSprint' AND estatus = 'aceptada'";
        $conexion = new Conexion();
        $resultado = $conexion->getConexion()->query($sql);
        $historias = array();
        if($resultado->num_rows > 0){
            while($historia = $resultado->fetch_assoc()){
                $historias[] = $historia;

            }
        }
        return $historias;


    }
}
?>