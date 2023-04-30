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
}
?>