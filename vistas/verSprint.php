<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #203647;">

  <?php
  include "../bayesian-poker/vistas/header.php";

  ?>


  <div class="container border border-info m-3 mx-auto p-3" style="height: auto; width: auto; ">
    <h1 class="fs-3 fw-bold text-center" style="color: white;"><?php echo $nombreSprint?></h1>
    <p class="fs-6 fw-normal text-center" style="color: white;">Elige la una historia de usuario para acceder a las votaciones, tambien puedes ver la informacion del sprint</p>
    <div class="border-bottom border-info"></div>

    <div class="list-group m-3">
      <?php
      if($_GET['estatus'] == 'activo'){
      ?>
       
        <a href="http://localhost:3000/verSprint.php?<?php echo 'idProyecto=' . $_GET['idProyecto'] . '&idSprint=' . $_GET['idSprint'] . '&estatus=inactivo'; ?>" class="list-group-item list-group-item-action active" aria-current="true">
          Historias activas
        </a>
      
      <?php
      }else{
        ?>
        <a href="http://localhost:3000/verSprint.php?<?php echo 'idProyecto=' . $_GET['idProyecto'] . '&idSprint=' . $_GET['idSprint'] . '&estatus=activo'; ?>" class="list-group-item list-group-item-action active" aria-current="true">
        Historias inactivas
        </a>
        <?php
      }
      ?>
      <?php
        foreach ($historias as $historia) {
          ?>
          <a href="http://localhost:3000/votar.php?<?php echo 'idProyecto=' . $_GET['idProyecto'] . '&idSprint=' . $_GET['idSprint'] . '&idHistoria=' . $historia['idHistoria']; ?>" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $historia['nombre']; ?></a>
          <?php
        }
      
      ?>

    </div>



    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="http://localhost:3000/editarSprint.php?<?php echo 'idProyecto=' . $_GET['idProyecto'] . '&idSprint=' . $_GET['idSprint']; ?>" class="btn btn-secondary">Editar Sprint</a>

    <a href="http://localhost:3000/CrearHistoria.php?idProyecto=<?php echo $_GET['idProyecto'] ?>&idSprint=<?php echo $_GET['idSprint'] ?>" class="btn btn-info">Añadir Historia</a>
      <a href="http://localhost:3000/proyectoSprints.php?idProyecto=<?php echo $_GET['idProyecto'] ?>" class="btn btn-primary" >Volver</a>



    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>