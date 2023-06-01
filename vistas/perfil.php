<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/css/VerPerfil.css">
    <script src="../static/js/validaciones.js"></script>

    <style>
        .mensaje-error {
        color: red;
        font-size: 20px;
        font-weight: bold; 

        }
    </style>
</head>
<body style = "background-color: #203647;">

  <?php
     include "../bayesian-poker/vistas/header.php";

  ?>
        <section class="fondo">
            <h1> Mi perfil</h1>
            
            <form class="divs" method="post" action="../perfil.php">
                <div class="mb-3">
                    <label for="nombre" class="form-label"  >Nombre (s)</label>
                    <input type="text" class="form-control" id="nombre" disabled="true"  name="nombre" value="<?php echo $nombre;?>">
                </div>
            
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido (s)</label>
                    <input type="text" class="form-control" id="apellido" disabled="true" name="apellido" value="<?php echo $apellido;?>" >
                </div>
            
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="edad" name="edad" disabled="true"  value="<?php echo $edad;?>" >
                </div>
            
                <div class="sexo">
                    <p class="fs-3">Sexo</p>
                    <div class="dropdown">
                        <!-- <button id="sexo2" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Masculino
                        </button> -->

                        <select disabled="true" id="sexo" name="sexo" >
                            <option class="dropdown-item" value="femenino"<?php if ($sexo == 'femenino') echo ' selected'; ?>>Femenino</option>
                            <option class="dropdown-item" value="masculino"<?php if ($sexo == 'masculino') echo ' selected'; ?>>Masculino</option>
                        </select>
            
    
                    </div>
                </div>
            
                <div class="mb-3">
                    <label for="usuario" class="form-label"  >Usuario</label>
                    <input type="text" class="form-control" id="usuario" disabled="true" name="usuario" value="<?php echo $usuario;?>">
                </div>
            
                <div class="mb-3">
                    <label for="correo" class="form-label" >Correo</label>
                    <input type="email" class="form-control" disabled="true" name="email" value="<?php echo $correo;?>"  id="correo">
                </div>
                
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary"  onclick="habilitar();">Editar perfil</button>
                        <input type="submit" class="btn btn-primary" value="guardar cambios"/>
                    </div>

            </form>
<!--             
            <aside class="mb-3">
                <h2>Cambiar Contraseña</h2>
                <p>Recibe un enlace para acceder a una ventana de cambio de contraseña.</p>
                <button class="btn btn-primary">Enviar Enlace</button>
            </aside> -->
            <a class="btn btn-primary volver" href="../proyectos.php">Volver</a>
            
        </section
