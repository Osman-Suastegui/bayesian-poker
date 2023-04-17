<?php 
include "C:/wamp64/www/bayesian-poker/modelos/conexion.php";

class Registrarse{
    private $conexion;
    public function __construct(){
        $this->conexion = new Conexion();
    }
    public function registrarUsuario($nombre, $apellido, $edad, $genero, $usuario, $contrasena, $email){
        $stmt = $this->conexion->getConexion()->prepare("INSERT INTO usuarios(nombre, apellido, edad, sexo, correo,usuario ,contrasena) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss", $nombre, $apellido, $edad, $genero, $email, $usuario, $contrasena);
        $stmt->execute();
        $stmt->close();
       
    }

}
?>