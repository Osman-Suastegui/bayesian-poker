<?php 
include "../bayesian-poker/vistas/recuperarContra.html";
include "../bayesian-poker/modelos/registrarCodigo.php";
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $codigo = rand(100000, 999999);

    $regCod = new RegistrarCodigo();
    $codigoRegistrado = $regCod->registrarCodigo($codigo, $email);
    
    if($codigoRegistrado){
        $url = 'http://localhost:5000/send_email_recuperar_contrasena';
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
            echo "<div class='mensaje-exito'>Se ha enviado el correo exitosamente</div>";

        }else{
            echo "<div class='mensaje-error'>El correo no se pudo enviar</div>";

        }
    }else{
        echo "<div class='mensaje-exito'>Se ha enviado el correo exitosamente</div>";
   
    }
    
    


  
}
?>