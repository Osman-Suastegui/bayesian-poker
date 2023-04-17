<?php
include "C:/wamp64/www/bayesian-poker/modelos/conexion.php";

class IniciarSesion
{

    public function verificarCredenciales($usuario, $contrasena): bool
    {
        $con = new Conexion();        
        $resultado = $con->getConexion()->query("SELECT idUsuario FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
        
        if ($resultado->num_rows > 0) {
            // Iniciar sesión
            session_start();
            $idUsuario = $resultado->fetch_assoc()['idUsuario'];
            $_SESSION["idUsuario"] = $idUsuario;
            $_SESSION["usuario"] = $usuario;
            return true;
        }
    
        return false;
        
    }
    // procesar
    
}
?>