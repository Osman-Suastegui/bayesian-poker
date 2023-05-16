<?php
include_once "../bayesian-poker/modelos/historia.php";
$historia = new Historia();
$idHistoria = $_GET['idHistoria'];
$datosHistoria = $historia->obtenerHistoria($idHistoria);
?>
<div class="container m-4 mx-auto rounded " style="background-color: #EEFBFB; height: auto;">

    <div class="d-flex justify-content-between align-items-start">
        <h3 class="align-self-start my-1"><?php echo $datosHistoria['nombre'] ?></h3>

    </div>
    <div class="border-bottom border-info"></div>


    <div class="mb-3">

        <textarea style="resize: none; overflow: hidden; height: 190px;" class="form-control my-2" rows="3" placeholder="[Descripcion de Historia de Usuario]"
        ><?php echo $datosHistoria['descripcion'] ?></textarea>

    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start m-3 p-3">
    <button class="btn btn-success" type="button" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Mostrar historial</button>
        <?php
        if($rolUsuario == 'scrum master'){
            ?>
            <button class="btn btn-secondary" type="button">Editar historia</button>
            <?php
        }
        ?>
        <a href="http://localhost:3000/verSprint.php?idProyecto=<?php echo $_GET['idProyecto']; ?>&idSprint=<?php echo $_GET['idSprint']; ?>&estatus=activo" class="btn btn-primary">Volver</a>

    </div>
</div>
<?php
    include "../bayesian-poker/vistas/historialRondas.php";
?>

