
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

    public function crearProyecto($nombreProyecto,$descripcionProyecto){

        $codigoProyecto = $this->generarCodigoProyecto();
        while ($this->existeCodigoProyecto($codigoProyecto)) {
            $codigoProyecto = $this->generarCodigoProyecto();
        }

        $idUsuario = $_COOKIE['idUsuario'];
        $idProyecto = $this->insertarProyectoBD($nombreProyecto, $descripcionProyecto, $codigoProyecto);
        $this->insertarIntegranteBD($idUsuario, $idProyecto,'scrum master');
        return $codigoProyecto;
        
    }
    private function generarCodigoProyecto(){
        // 6 digitos
        $codigo = rand(100000,999999);
        return $codigo;

    }
    private function existeCodigoProyecto($codigoProyecto){

        $sql = "SELECT COUNT(*) FROM proyectos WHERE codigo = '$codigoProyecto'";
        $resultado = $this->conexion->getConexion()->query($sql);
        $fila = $resultado->fetch_array();
        return $fila[0] > 0;

    }
    private function insertarProyectoBD($nombreProyecto, $descripcionProyecto, $codigoProyecto){
        $sql = "INSERT INTO proyectos (fechaCreacion, descripcion,nombre,codigo, estatus) VALUES (NOW(), ?, ?,?,'activo')";
        $stmt = $this->conexion->getConexion()->prepare($sql);
        $stmt->bind_param("sss",$descripcionProyecto, $nombreProyecto, $codigoProyecto);
        $stmt->execute();
        // obtenerElidDelProyecto recien insertado
        $idProyecto = $this->conexion->getConexion()->insert_id;
        return $idProyecto;
    }
    private function insertarIntegranteBD($idUsuario, $idProyecto,$rol){
        $sql = "INSERT INTO integrantes (idUsuario, idProyecto, rol, estatus) VALUES (?, ?, '$rol', 'activo')";
        $stmt = $this->conexion->getConexion()->prepare($sql);
        $stmt->bind_param("ii",$idUsuario, $idProyecto);
        $stmt->execute();
    }
}
?>