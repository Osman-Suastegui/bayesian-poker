<?php

include "../bayesian-poker/modelos/perfil.php";
$usuario = $_COOKIE["usuario"];
$perfil = new Perfil();

if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"]) && isset($_POST["sexo"])) {
   $perfil->actualizarPerfil($_POST["nombre"], $_POST["apellido"], $_POST["edad"], $_POST["sexo"], $usuario);
}



$datosPerfil = $perfil->obtenerPerfil($usuario);
$nombre = $datosPerfil["nombre"];
$apellido = $datosPerfil["apellido"];
$edad = $datosPerfil["edad"];
$sexo = $datosPerfil["sexo"];
$correo = $datosPerfil["correo"];

include "../bayesian-poker/vistas/perfil.php";






?>