<div class="bayesianPokerHead">

  <nav class="navbar navbar-expand-lg" style="background-color: #007CC7;" data-bs-theme="dark">

    <div class="container-lg">

      <a class="navbar-brand">
        <img src="../static/img/BayesianPokerTitle.png" alt="" width="380px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_COOKIE['usuario'] ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../perfil.php">Ver Perfil</a></li>
              <li><a class="dropdown-item" href="../proyectos.php">Ver Panel</a></li>
              <li><a class="dropdown-item" href="../crearProyecto.php">Crear Proyecto</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../iniciarSesion.php" onclick="borrarCookie()">Cerrar Sesion</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <script>
    function borrarCookie() {
      document.cookie = "usuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
      document.cookie = "idUsuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

    }
  </script>
</div>