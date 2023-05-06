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

   
<form class="container m-4 mx-auto rounded ms-auto " style="background-color: #EEFBFB; height: 500px;" method="POST"  action="../editarSprint.php?idProyecto=<?php echo $idProyecto ?>&idSprint=<?php echo $idSprint ?>">
    
    <div class="d-flex justify-content-between align-items-start">
    <h1 class="align-self-start">Sprint</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3">
        <button class="btn btn-primary" type="button">Volver</button>
        
      </div>
  </div>
  
  
  <div class="mb-3">
    <input type="text" name="nombreSprint" value="<?php echo $nombreSprint ?>" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
  </div>
  <div class="mb-3">
   
    <textarea name="descripcionSprint"  style= "resize: none; overflow: hidden; height: 190px;" class="form-control" rows="3" placeholder="[Inserte descripcion del sprint]"><?php echo $descripcionSprint ?></textarea>

  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3">
    <button class="btn btn-success" type="submit" name="submit" value="guardar">Guardar Cambios</button>
    <button class="btn btn-danger" type="submit" name="submit" value="eliminar">Eliminar Sprint</button>
        
      </div>
  </form>
</div>
 


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>