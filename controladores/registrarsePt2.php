<?php
    include "../bayesian-poker/modelos/registrarse.php";
    include "../bayesian-poker/vistas/registrarsePt2.html";

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
    
    $_SESSION['usuario'] = $usuario;
    
  
    $url = 'http://localhost:5000/send_email';
    $codigo = rand(1000, 9999);
    $data = array(
        'destinatario' => $email,
        "codigoDeValidacion" => $codigo
    
    );

    // Configurar la solicitud POST con cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    $response = curl_exec($ch);
    curl_close($ch);

  
    
     if($response == "1"){
        echo "El correo se envio correctamente";
        $registrarse = new Registrarse();
        $registrarse->registrarUsuario($nombre, $apellido, $edad, $genero, $usuario, $contrasena, $email,$codigo);
        header("Location: alertaEmail.php");

    }else{
        echo "El correo no se envio";
    }

   
}

    
?>