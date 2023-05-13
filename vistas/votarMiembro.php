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
    <button class="btn btn-primary" type="button">Volver</button>

</div>
    </div>
        
    

    <div class="fixed-bottom">
        <div class="container d-flex justify-content-center align-items-center mb-3">
          <button class="btn btn-primary border m-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">1</button>
          <button class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">2</button>
          <button class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">3</button>
          <button class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">5</button>
          <button class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">8</button>
          <button class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">13</button>
          
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Votar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Explica el motivo de tu voto:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Votar</button>
            </div>
          </div>
        </div>
      </div>
    



      <script>
        const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    
    modalBodyInput.value = recipient
  })
}
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>