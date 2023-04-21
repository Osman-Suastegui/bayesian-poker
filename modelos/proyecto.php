
<?php 
include "../bayesian-poker/modelos/conexion.php";

class Proyectos{
    private $conexion;
    private $proyectos;

    public function __construct(){
        $this->conexion = new Conexion();
        
     
    }

    public function obtenerProyectos(){
        session_start();
        $idUsuario = $_SESSION['idUsuario'];
        $proyectos = $this->conexion->getConexion()->query("SELECT idProyecto FROM integrantes WHERE idUsuario = '$idUsuario'");
        // $resultado->fetch_assoc()['idUsuario']
        while($proyectos->fetch_assoc()['idProyecto']){
             
        }
        return $this->proyectos;
    }
}
?>