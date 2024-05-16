<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="/recursos/poro.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="indigo lighten-5">

<nav class="nav-extended indigo darken-3">
  <div class="nav-wrapper">
    <h5 class="brand-logo">Noti-LOL</h5>
  </div>
  <div class="nav-content">
    <ul class="tabs tabs-transparent">
    <li class="tab"><a class="active" href="index.php">Inicio</a></li>
    <li class="tab"><a class="active" href="iniciar_sesion.php">Iniciar sesion</a></li>
    </ul>
  </div>
</nav>


    <div class="section container center">
        <div class="row">

        <form class="col s12" action="escribir.php" method="POST">

              <div class="row card-panel">

                <div class="input-field col s5">
                    <label for="nombre" id="input_text">Nombre:</label>
                    <input type="text" id="input_text" name="nombre" placeholder="Nombre de invocador" class="validate" required data-length="50">
                </div>
                <div class="input-field col s7">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="validate" required maxlength="50">
                </div>

                <div class="input-field col s12">
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" placeholder="Pais de origen" class="validate" required maxlength="50">
                </div>

                <div class="input-field col s12">
                    <label for="email">Correo electrónico:</label>
                    <input type="text" id="email" name="email" placeholder="Email" class="validate" required>
                </div>
                <div class="input-field col s12">
                    <label for="champ_favorito">Campeón favorito:</label>
                    <input type="text" id="champ_favorito" name="champ_favorito" placeholder="Main" class="validate" required maxlength="20">
                </div>

                <p>
                  <label>
                    <input type="checkbox" />
                    <span>Notificaciones</span>
                  </label>
                </p>
                <br>
                <button class="btn waves-effect waves-light" type="submit" name="submit">Registrarme</button>
              </div>  

        </form>

        </div>
    </div>
    <footer class="page-footer indigo darken-3">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Nosotros</h5>
        <p class="grey-text text-lighten-4">Una página dedicada a subir el contenido más nuevo de League of Legends.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Redes sociales</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/@leagueoflegends">YouTube</a></li>
          <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/leagueoflegends">Facebook</a></li>
          <li><a class="grey-text text-lighten-3" href="https://www.leagueoflegends.com/es-mx/?fbclid=IwZXh0bgNhZW0CMTAAAR28SMainkr0ElTegyOAsXtHMmLAumF2wfF41b-yEr--C1as6SCgxI99NCg_aem_AQBgSHw-A0Trx5Y2YGUXundjsDNFDVLsQhFMvw6yzPPxjH3_BX-QXUPs4xNatmXkdZtEh0fsJJZdRIkr_HhI1S9q">Juega</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
  </div>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>
</html>