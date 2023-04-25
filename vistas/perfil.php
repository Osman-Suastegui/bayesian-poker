<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/VerPerfil.css">
    <script src="../static/js/validaciones.js"></script>
</head>
<body>
    <section class="principal">
        <article>
            <div class="Titulo">
                <img src="../static/img/cartas.png" alt="" class="cartas">
                <img src="../static/img/BayesianPokerTitle.png" alt="" class="letras">
                <button class="campana" type="button">
                    <img src="../static/img/MisProyectos/campana.png"
                    alt="">
                </button>

                <div class="contenedorUsuario">
                    <button class="boton">Usuario</button>
                    <div class="opciones">
                        <a href="#">Ver Perfil</a> <br> <hr width="100%">
                        <a href="#">Ver Panel</a> <br>
                        <a href="#">Crear Proyecto</a> <br> <hr width="100%">
                        <a href="#">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </article>
        

        <section  class="fondo">
            <h1> Mi perfil</h1>
            
            <form class="divs" method="post" action="../perfil.php" >
                

                

                <div class="nombre">
                    <p style = "display: inline-block;">Nombre (s)</p>
                  
                      <input type="text" disabled="true" id="nombre" name="nombre" value="<?php echo $nombre;?>" style="display: inline-block;">
                
                    
                   

                </div>

                <div class="apellido">
                    <p style = "display: inline-block;">Apellido (s)</p>
                    <input type="text" disabled="true" id="apellido" name="apellido" value="<?php echo $apellido;?>" style="display: inline-block;">

                </div>

                <div class="edad">
                    <p style = "display: inline-block;">Edad</p>
                    <input type="text"  disabled="true" id="edad" name="edad"  value="<?php echo $edad;?>" style="display: inline-block;">

                </div>    
                
                <div class="sexo">
                    <p style = "display: inline-block;">Sexo</p>
                    <input type="text"  disabled="true" id="sexo" name="sexo" value="<?php echo $sexo;?>" style="display: inline-block;">

                </div>  

                <div class="usuario">
                    <p style = "display: inline-block;">Usuario</p>
                    <input type="text" disabled="true" id="usuario" name="usuario" value="<?php echo $usuario;?>" style="display: inline-block;">

                </div>  

                <div class="correo">
                    <p style = "display: inline-block;">Correo</p>
                    <input type="email" disabled="true" name="email" value="<?php echo $correo;?>" style="display: inline-block;">

                </div>  
    
                <div class="btnEditar" onclick="habilitar();">
                    <button type="button"> Editar perfil</button>
                </div>
                <input type="submit" value="guardar cambios"/>

            </form>
       
            <aside>
                <h2>Cambiar Contraseña</h2>
                <p>Recibe un enlace para acceder a una ventana de cambio de contraseña.</p>
                <button>Enviar Enlace</button>
            </aside>

            
            <a class="volver" href="../proyectos.php">Volver</a>

        </section>
        
        
        
    </section>
    
</body>
</html>