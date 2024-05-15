<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="/recursos/poro.png" type="image/x-icon">
</head>
<body class="indigo lighten-2">

    <nav class="indigo darken-3">
        <div class="nav-wrapper" >
         <h5 class="brand-logo" style="margin-left: 10px;">Noti LOL</h5>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.html">Campeones</a></li>
            <li><a href="index.html">Registro</a></li>
          </ul>
        </div>
      </nav>

    <div class="section container center">
        <div class="row">

        <form class="col s12" action="escribir.php" method="POST">

              <div class="row card-panel">

                <div class="input field col s5">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre de invocador" class="validate" required maxlength="50">
                </div>
                <div class="input field col s7">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="validate" required maxlength="50">
                </div>

                <div class="input field col s12">
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" placeholder="Pais de origen" class="validate" required maxlength="50">
                </div>

                <div class="input field col s12">
                    <label for="email">Correo electrónico:</label>
                    <input type="text" id="email" name="email" placeholder="Email" class="validate" required>
                </div>
                <div class="input field col s12">
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>
</html>