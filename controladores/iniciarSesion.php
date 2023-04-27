<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../static/css/mensajesIniciarSesion.css">
</head>
<body>

<?php 


include "../bayesian-poker/vistas/iniciarSesion.html";
include "../bayesian-poker/modelos/iniciarSesion.php";

if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $iniciarSesion = new IniciarSesion();
    $resultado = $iniciarSesion->verificarCredenciales($usuario, $contrasena);
    if ($resultado == "1") {
        header("Location: proyectos.php");          
    } else if($resultado == "2") {
        echo "<div class='mensaje-advertencia'>Email no validado</div>";

    } else {
        echo "<div class='mensaje-error'>Usuario o contraseña incorrectos</div>";

    }

}

?>

</body>
</html>
