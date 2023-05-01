<?php
include "../bayesian-poker/modelos/conexion.php";
class Sprint{


    public function crearSprint($nombre,$descripcion){

        $idProyecto = $_GET['idProyecto'];
        $idUsuario = $_COOKIE['idUsuario'];
        $conexion = new Conexion();
        // verificar que ese idProyecto pertenece al usuario
        $sql = "SELECT $idProyecto FROM integrantes WHERE idUsuario = '$idUsuario' AND idProyecto = '$idProyecto'";
        $resultado = $conexion->getConexion()->query($sql);
        if($resultado->num_rows > 0){
            //insercion del sprint en la base de datos
            $sql = "INSERT INTO sprint (idProyecto, nombre, descripcion, fechaCreacion) VALUES ('$idProyecto', '$nombre', '$descripcion', NOW())";
            $resultado = $conexion->getConexion()->query($sql);
        }
        
    }

    public function editarSprint($nombre,$descripcion){

        $idProyecto = $_GET['idProyecto'];
        $idSprint = $_GET['idSprint'];  
        $idUsuario = $_COOKIE['idUsuario'];
        $conexion = new Conexion();
        // verificar que ese idProyecto pertenece al usuario
        $sql = "SELECT $idProyecto FROM integrantes WHERE idUsuario = '$idUsuario' AND idProyecto = '$idProyecto'";
        $resultado = $conexion->getConexion()->query($sql);
        if($resultado->num_rows > 0){
            //insercion del sprint en la base de datos
            $sql = "UPDATE sprint SET nombre = '$nombre', descripcion = '$descripcion' WHERE idProyecto = '$idProyecto' AND idSprint = '$idSprint'";
            $resultado = $conexion->getConexion()->query($sql);
        }
        
    }
    public function obtenerSprint($idSprint,$idProyecto){
        $conexion = new Conexion();
        $idUsuario = $_COOKIE['idUsuario'];

        $sql = "SELECT $idProyecto FROM integrantes WHERE idUsuario = '$idUsuario' AND idProyecto = '$idProyecto'";
        $resultado = $conexion->getConexion()->query($sql);
        if($resultado->num_rows > 0){
            $sql = "SELECT nombre,descripcion FROM sprint WHERE idSprint = '$idSprint' AND idProyecto = '$idProyecto'";
            $resultado = $conexion->getConexion()->query($sql);
            if($resultado->num_rows > 0){
                $sprint = $resultado->fetch_assoc();
                return $sprint;
            }
        }
        $sprint = array('nombre' => "", 'descripcion' => "");
        return $sprint;

        
    }
}
?>