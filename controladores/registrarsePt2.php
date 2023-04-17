<?php
    include "C:/wamp64/www/bayesian-poker/modelos/registrarse.php";
    include "C:/wamp64/www/bayesian-poker/vistas/registrarsePt2.html";

if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"]) && isset($_POST["genero"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $genero = $_POST["genero"];
    session_start();

    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellido"] = $apellido;
    $_SESSION["edad"] = $edad;
    $_SESSION["genero"] = $genero;

}
   
if(isset($_POST["usuario"]) && isset($_POST["contrasena"])  && isset($_POST["email"])){
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $email = $_POST["email"];

    session_start();
    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $edad = $_SESSION["edad"];
    $genero = $_SESSION["genero"];

    $registrarse = new Registrarse();
    $registrarse->registrarUsuario($nombre, $apellido, $edad, $genero, $usuario, $contrasena, $email);
   
}

    
?>