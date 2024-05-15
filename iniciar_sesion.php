<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="/recursos/poro.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="indigo lighten-5">
    
<nav class="indigo darken-3">
    <div class="nav-wrapper" >
    <h5 class="brand-logo" style="margin-left: 10px;">Noti LOL</h5>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="registro.php">Registro</a></li>
    </ul>
    </div>
</nav>

<div class="section container center">
    <div class="row center">
        <form action="entrar.php" class="col s12" method="POST">
            <div class="row card-panel">
                <div class="input field col s8 offset-m2">
                    <label for="email">Correo electronico:</label>
                    <input type="text" class="validate" name="email" id="email" placeholder="email" requiered>
                </div>
                
                <div class="input field col s8 offset-m2 ">
                    <label for="email">Campeón favorito:</label>
                    <input type="text" class="validate" name="champ_favorito" id="champ_favorito" placeholder="Main" requiered max-length="20">
                </div>
                <br>
                <button class="btn waves-effect waves-light col s4 offset-m4" type="submit" name="submit">Entrar</button>
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