
<?php
include "../bayesian-poker/modelos/conexion.php";

class Proyectos
{
    private $conexion;
    private $proyectos;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function obtenerProyectos()
    {
        $idUsuario = $_COOKIE['idUsuario'];
        $idProyectos = $this->conexion->getConexion()->query("SELECT idProyecto FROM integrantes WHERE idUsuario = '$idUsuario' and estatus = 'activo'");

        $ids = [];
        while ($fila = $idProyectos->fetch_assoc()) {
            $ids[] = $fila['idProyecto'];
        }
        $idString = implode(',', $ids); 
        

        if (count($ids) > 0) {
            $detallesProyectos = $this->conexion->getConexion()->query("SELECT nombre, descripcion,idProyecto FROM proyectos WHERE idProyecto IN ($idString)");
            
            $mapDatosProyectos = [];

            while ($fila = $detallesProyectos->fetch_assoc()) {
                $datos = array(
                    "idProyecto" => $fila['idProyecto'],
                    "nombre" => $fila['nombre'],
                    "descripcion" => $fila['descripcion']
                );
                $mapDatosProyectos[] = $datos;
            }
            return $mapDatosProyectos;

        }
        return [];

        

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

    public function obtenerIntegrantesProyecto(){
        $idProyecto = $_GET['idProyecto'];
        $sql = "SELECT idUsuario,estatus FROM integrantes WHERE idProyecto = '$idProyecto'";
        $resultado = $this->conexion->getConexion()->query($sql);
        $integrantesActivos= [];
        $integrantesInactivos= [];
        $idsUsuarios = [];
        while ($fila = $resultado->fetch_assoc()) {
        $idsUsuarios[] = [$fila['idUsuario'],$fila['estatus']];
        }
        for ($i=0; $i < count($idsUsuarios); $i++) { 
            $idUsuario = $idsUsuarios[$i][0];
            $sql = "SELECT nombre, apellido FROM usuarios WHERE idUsuario = '$idUsuario'";
            $resultado = $this->conexion->getConexion()->query($sql);
            $fila = $resultado->fetch_assoc();
            $nombre = $fila['nombre'];
            $apellido = $fila['apellido'];
            $nombreCompleto = $nombre . " " . $apellido;
            if ($idsUsuarios[$i][1] == 'activo') {
                $integrantesActivos[] = $nombreCompleto;
            }else{
                $integrantesInactivos[] = $nombreCompleto;
            }
        }
        return [$integrantesActivos,$integrantesInactivos];
    }

    public function abandonarProyecto(){
        $idUsuario = $_COOKIE['idUsuario'];
        $idProyecto = 11;
        $sql = "UPDATE integrantes SET estatus = 'inactivo' WHERE idUsuario = '$idUsuario' AND idProyecto = '$idProyecto'";
        $this->conexion->getConexion()->query($sql);
    }
    public function deshabilitarProyecto(){
        $idProyecto = $_GET['idProyecto'];
        $sql = "UPDATE proyectos set estatus='inactivo' where idProyecto='$idProyecto'";
        $this->conexion->getConexion()->query($sql);
    }

    public function obtenerProyecto(){
        $idProyecto = $_GET['idProyecto'];
        $sql = "SELECT nombre, descripcion,codigo FROM proyectos WHERE idProyecto = '$idProyecto'";
        $resultado = $this->conexion->getConexion()->query($sql);
        $fila = $resultado->fetch_assoc();
        $nombre = $fila['nombre'];
        $descripcion = $fila['descripcion'];
        $codigo = $fila['codigo'];
        $datos = array(
            "nombreProyecto" => $nombre,
            "descripcionProyecto" => $descripcion,
            "codigoProyecto" => $codigo
        );
        return $datos;

    }

}
?>