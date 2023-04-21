<?php 

include "../bayesian-poker/modelos/iniciarSesion.php";
include "../bayesian-poker/vistas/iniciarSesion.html";

if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $iniciarSesion = new IniciarSesion();
    $resultado = $iniciarSesion->verificarCredenciales($usuario, $contrasena);
    if ($resultado) {
        echo "sesion iniciada <br/>";
        echo "id usuario:" . $_SESSION["idUsuario"];
        header("Location: proyectos.php");

          
    } else {
        echo "credenciales incorrectas";

    }
}

?>