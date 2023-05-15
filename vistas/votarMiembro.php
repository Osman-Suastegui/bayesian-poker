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
  include "../bayesian-poker/vistas/HistoriaFormulario.php";

  ?>


  <form method="POST" action="http://localhost:3000<?php echo $_SERVER['REQUEST_URI']; ?>">
    <?php
    if (!$historia->usuarioVotoUltimaRonda($idHistoria)) {
    ?>
      <div class="fixed-bottom">
        <div class="container d-flex justify-content-center align-items-center mb-3">
          <button type="button" id="puntaje1" class="btn btn-primary border m-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">1</button>
          <button type="button" id="puntaje2" class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">2</button>
          <button type="button" id="puntaje3" class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">3</button>
          <button type="button" id="puntaje5" class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">5</button>
          <button type="button" id="puntaje8" class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">8</button>
          <button type="button" id="puntaje13" class="btn btn-primary border m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">13</button>

        </div>
      </div>

    <?php

    }

    ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Votar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- <form> -->
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Explica el motivo de tu voto:</label>
              <textarea class="form-control" id="message-text" name="motivoHistoria"></textarea>
            </div>
            <!-- </form> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Votar</button>
          </div>
        </div>
      </div>
    </div>
  </form>





  <script>
    document.getElementById('puntaje1').addEventListener('click', function() {
      document.cookie = 'puntaje=1';
    });
    document.getElementById('puntaje2').addEventListener('click', function() {
      document.cookie = 'puntaje=2';
    });
    document.getElementById('puntaje3').addEventListener('click', function() {
      document.cookie = 'puntaje=3';
    });
    document.getElementById('puntaje5').addEventListener('click', function() {
      document.cookie = 'puntaje=5';
    });
    document.getElementById('puntaje8').addEventListener('click', function() {
      document.cookie = 'puntaje=8';
    });
    document.getElementById('puntaje13').addEventListener('click', function() {
      document.cookie = 'puntaje=13';
    });
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