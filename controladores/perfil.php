<?php

include "../bayesian-poker/modelos/perfil.php";

$perfil = new Perfil();
session_start();
$usuario = $_SESSION["usuario"];
$datosPerfil = $perfil->obtenerPerfil($usuario);
$nombre = $datosPerfil["nombre"];
$apellido = $datosPerfil["apellido"];
$edad = $datosPerfil["edad"];
$sexo = $datosPerfil["sexo"];
$correo = $datosPerfil["correo"];

include "../bayesian-poker/vistas/perfil.php";






?>