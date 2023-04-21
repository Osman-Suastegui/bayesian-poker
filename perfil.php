<?php

// existe cookie usuario si es asi entrar a perfil

if (isset($_COOKIE["usuario"])) {
    include "./controladores/perfil.php";

} else {
    header("Location: ./iniciarSesion.php");
}



?>