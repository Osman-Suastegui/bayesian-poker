
<?php
include_once "../bayesian-poker/modelos/conexion.php";
class Usuario{



    function cambiarContra($email, $contra,$conexion,$codigo){
        $con = $conexion->getConexion();
        $sql = "UPDATE usuarios SET contrasena = '$contra' WHERE correo = '$email'";
        $con->query($sql);
        $sql = "UPDATE verificaciones SET activo='0' WHERE codigo='$codigo' AND activo='1'";
        $con->query($sql);

    }
    function obtenerRol(){
        $idProyecto = $_GET['idProyecto'];
        $idUsuario = $_COOKIE['idUsuario'];
        $conexion = new Conexion();
        
        $sql = "SELECT rol FROM integrantes WHERE idUsuario= '$idUsuario' AND idProyecto='$idProyecto'";
        $resultado = $conexion->getConexion()->query($sql);
        $rol = $resultado->fetch_assoc()['rol'];
        return $rol;
        

    }

}



?>