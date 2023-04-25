<?php 
include "../bayesian-poker/vistas/recuperarContra2.html";
include "../bayesian-poker/modelos/conexion.php";

include "../bayesian-poker/modelos/validarCodigoContra.php";
include "../bayesian-poker/modelos/usuario.php";





$con = new Conexion();
setcookie ("email", $_GET['correo'], time() + 3600);
setcookie("codigo", $_GET['codigo'], time() + 3600);

if(isset($_GET["codigo"])){
    $codigo = $_GET["codigo"];
}

if(isset($_COOKIE["codigo"])){
    $codigo = $_COOKIE["codigo"];
}
$validar = new ValidarCodigoContra();
$valido = $validar->validarCodigo($codigo,$con);



if($valido){
    if(isset($_POST['contra'])){
        echo "el codigo es valido";
        $contrasena = $_POST['contra'];
        $usuario = new Usuario();
        $usuario->cambiarContra($_COOKIE['email'], $contrasena,$con,$codigo);
        // eliminar cookies
        

        

        header("Location: iniciarSesion.php");
    }

}else{
    echo "no es valido";
}





?>