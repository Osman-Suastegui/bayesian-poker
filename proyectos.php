<?php

if (isset($_COOKIE["usuario"])) {
    include "./controladores/proyectos.php";

}else{
    header("Location: ./iniciarSesion.php");
    
}
?>