<?php 
class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $bd = "bayesianpoker";
    private $conexion;
  
    public function __construct() {
        $this->conectar();
    }
  
    public function conectar() {
      $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->bd);

      if ($this->conexion->connect_error) {
        die("Error de conexión: " . $this->conexion->connect_error);
      }
    }
  
    public function getConexion() {
      return $this->conexion;
    }
  
    public function desconectar() {
      $this->conexion->close();
    }
  }
?>
