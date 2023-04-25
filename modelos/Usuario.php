
<?php
// recuperar contra
class Usuario{



    function cambiarContra($email, $contra,$conexion,$codigo){
        $con = $conexion->getConexion();
        $sql = "UPDATE usuarios SET contrasena = '$contra' WHERE correo = '$email'";
        $con->query($sql);
        $sql = "UPDATE verificaciones SET activo='0' WHERE codigo='$codigo' AND activo='1'";
        $con->query($sql);

    }

}



?>