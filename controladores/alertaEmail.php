<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../static/css/mensajesIniciarSesion.css">
</head>
<body>

<?php
include "../bayesian-poker/vistas/alertaEmail.html";
include "../bayesian-poker/modelos/validarCodigo.php";
include "../bayesian-poker/modelos/conexion.php";


if (isset($_POST["codigoValidacionEmail"]) ) {
    $codigoValidacionEmail = $_POST["codigoValidacionEmail"];
    // conexion
    $con = new Conexion();
    $validar = new ValidadorCodigo($con);
    session_start();
    $usuario = $_SESSION["usuario"];
    
    if($validar->validarCodigo($usuario, $codigoValidacionEmail)){
        $sql = "update usuarios SET emailValidado='1' WHERE usuario='$usuario'";
        $con->getConexion()->query($sql);

        // header("Location: bienvenidobayesianpoker.php");


        header("Location: ../vistas/alertaCreacionCuenta.html");
    }else{
        echo "<div class='mensaje-error'>Codigo incorrecto</div>";
    }

}

?>

</body>
</html>