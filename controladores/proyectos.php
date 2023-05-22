<?php
include_once "../bayesian-poker/modelos/proyecto.php";
include_once "../bayesian-poker/modelos/usuario.php";
include_once "../bayesian-poker/modelos/notificaciones.php";

$proy = new Proyectos();
$proyectosTotales = $proy->obtenerProyectos();
$claseUsuario = new Usuario();
$proyectos = [];

if (isset($_POST['aceptarMiembro'])){
    $claseUsuario = new Usuario();

    $datos = explode('|', $_POST['aceptarMiembro']);
    $idProyecto = $datos[0];
    $usuarioAceptado = $datos[1];
    $idMiembroAceptado = $claseUsuario->obtenerIdUsuario($usuarioAceptado);
    $idNotificacion = $datos[2];
    
    $proyecto = new Proyectos();
    $notificacion = new Notificaciones();

    $proyecto->insertarIntegranteBD($idMiembroAceptado,$idProyecto,'miembro');
    $notificacion->MiembroAceptado($idMiembroAceptado,$idProyecto);
    $notificacion->eliminarNotificacion($idNotificacion);
}
// rechazarMiembro
if (isset($_POST['rechazarMiembro'])){
    $datos = explode('|', $_POST['rechazarMiembro']);
    $idProyecto = $datos[0];
    $usuarioRechazado = $datos[1];
    $idMiembroRechazado = $claseUsuario->obtenerIdUsuario($usuarioRechazado);
    $idNotificacion = $datos[2];
    
    $notificacion = new Notificaciones();

    $notificacion->rechazarSolicitudProyecto($idMiembroRechazado, $idProyecto);
    $notificacion->eliminarNotificacion($idNotificacion);
}
if (isset($_POST['codigoProyecto'])){
    $proyecto = new Proyectos();
    $codigoProyecto = $_POST['codigoProyecto'];

    if(!$proyecto->existeCodigoProyecto($codigoProyecto)){
        echo "El código de proyecto no existe";
    }else{  
        $usuario= $_COOKIE['usuario'];
        $notificacion = new Notificaciones();
        $notificacion->solicitarUnirseProyecto($codigoProyecto,$usuario);

        header("Location: proyectos.php");

    }

    
}


foreach ($proyectosTotales as $proyecto) {
    $idProyecto =  $proyecto['idProyecto'];
    $rol = $claseUsuario->obtenerRol($idProyecto);


    if($rol == 'miembro' && $proyecto['estatus'] == 'activo' &&  $proy->estaScrumMasterActivo($idProyecto)){
            $proyectos[] = array(
                "idProyecto" => $proyecto['idProyecto'],
                "nombre" => $proyecto['nombre'],
                "descripcion" => $proyecto['descripcion'],
                "estatus" => $proyecto['estatus']
            );
    }

    if($rol == 'scrum master'){
        $proyectos[] = array(
            "idProyecto" => $proyecto['idProyecto'],
            "nombre" => $proyecto['nombre'],
            "descripcion" => $proyecto['descripcion'],
            "estatus" => $proyecto['estatus']
        );
    }
}



include "../bayesian-poker/vistas/misproyectos.php";
?>