<?php 

include "../bayesian-poker/modelos/iniciarSesion.php";
include "../bayesian-poker/vistas/iniciarSesion.html";

if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $iniciarSesion = new IniciarSesion();
    $resultado = $iniciarSesion->verificarCredenciales($usuario, $contrasena);
    if ($resultado == "1") {
        header("Location: proyectos.php");          
    } else if($resultado == "2") {
        echo "email no validado";

    }else{
        echo "usuario o contraseña incorrectos";
    }
}


?>