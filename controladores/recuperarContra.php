<?php 
include "../bayesian-poker/vistas/recuperarContra.html";
include "../bayesian-poker/modelos/registrarCodigo.php";
if (isset($_POST['email'])) {
    $email = $_POST['email'];
//    /send_email_recuperar_contrasena
    $url = 'http://localhost:5000/send_email_recuperar_contrasena';
    $codigo = rand(100000, 999999);
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
        echo "se envio el correo correctamente";
        $regCod = new RegistrarCodigo();
        $regCod->registrarCodigo($codigo, $email);
    }else{
        echo "El correo no se envio";
    }


  
}
?>