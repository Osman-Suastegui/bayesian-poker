<?php
include "../bayesian-poker/modelos/conexion.php";

class RegistrarCodigo
{
    function registrarCodigo($codigo, $email)
    {
        $conexion = new Conexion();
        $con = $conexion->getConexion();
        // obtener id 
        $sql = "SELECT idUsuario FROM usuarios WHERE correo = '$email'";
        $resultado = $con->query($sql);
        $usu = $resultado->fetch_assoc();
        $idUsuario = $usu['idUsuario'];

        $sql = "INSERT INTO verificaciones (idUsuario, codigo, fechaCreacion, activo) VALUES ('$idUsuario', '$codigo', NOW(), '1')";
        $resultado = $con->query($sql);
    }
}
?>