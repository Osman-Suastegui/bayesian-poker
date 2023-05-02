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
  include "../bayesian-poker/vistas/header.html";

  ?>

  <form class="container m-4 mx-auto rounded" style="background-color: #EEFBFB;" method="POST" action="../verProyecto.php">

    <div class="d-flex justify-content-between align-items-start">
      <h1 class="align-self-start">Proyecto</h1>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3">
        <button class="btn btn-danger" type="submit" name="abandonarProyecto" >Abandonar Proyecto</button>
        <button class="btn btn-primary" type="button">Volver</button>
      </div>
    </div>


    <div class="row g-2">
      <div class="col-md">
        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Descripcion" aria-label="Código">
      </div>
    </div>

  </form>
  </div>

  <div class="container m-4 mx-auto rounded" style="background-color: #EEFBFB;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Miembros Activos</th>
          <th scope="col">Miembros Deshabilitados</th>
        </tr>
      </thead>
      <tbody>
      <?php
        for ($idx = 0; $idx < $maxIntegrantes; $idx++) {
          echo "<tr>";
          if ($idx < count($integrantesActivos)) {
            echo "<td><a>" . $integrantesActivos[$idx] . "</a></td>";
          } else {
            echo "<td><a>#</a></td>";
          }
          if ($idx < count($integrantesInactivos)) {
            echo "<td><a>" . $integrantesInactivos[$idx] . "</a></td>";
          } else {
            echo "<td><a>#</a></td>";
          }
          echo "</tr>";
        }
        ?>
       

      </tbody>
    </table>

  </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>