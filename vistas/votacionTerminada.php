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
<body style = "background-color: #203647;">

    <?php
       include "../bayesian-poker/vistas/header.php";

    ?>
   
<div class="container m-4 mx-auto rounded " style="background-color: #EEFBFB; height: auto;">
    
    <div class="d-flex justify-content-between align-items-start">
    <h3 class="align-self-start my-1">Historia de Usuario 1</h3>
    
  </div>
  <div class="border-bottom border-info"></div>

  
  <div class="mb-3">
   
    <textarea style= "resize: none; overflow: hidden; height: 190px;" class="form-control my-2" rows="3" placeholder="[Descripcion de Historia de Usuario]"></textarea>

  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-start m-3 p-3">
    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">Mostrar historial</button>
    <button class="btn btn-secondary" type="button">Editar historia</button>
    <button class="btn btn-primary" type="button">Volver</button>

</div>
    </div>
        
    
    <div class="card card-lg w-50 h-50 text-bg-light border-info m-3 mx-auto">
        <h5 class="card-header">Resultado de la votacion</h5>
        <div class="card-body">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Metodo de Aceptacion</span>
            <input class="form-control w-50" type="text" placeholder="" disabled>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Valor de la historia de usuario</span>
            <input class="form-control" type="text" placeholder="" disabled>
            </div>
        </div>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>