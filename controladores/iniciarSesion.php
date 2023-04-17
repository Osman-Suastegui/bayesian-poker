<?php 

include "C:/wamp64/www/bayesian-poker/modelos/iniciarSesion.php";
include("C:/wamp64/www/bayesian-poker/vistas/iniciarSesion.html");

if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $iniciarSesion = new IniciarSesion();
    $resultado = $iniciarSesion->verificarCredenciales($usuario, $contrasena);
    if ($resultado) {
       echo "sesion iniciada <br/>";
       echo "id usuario:" . $_SESSION["idUsuario"];
          
    } else {
        echo "credenciales incorrectas";

    }
}

?>