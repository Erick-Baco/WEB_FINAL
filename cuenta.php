<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['champ_favorito'])) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="/recursos/poro.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="indigo lighten-5" center>
<nav class="indigo darken-3">
    <div class="nav-wrapper" >
    <h5 class="brand-logo" style="margin-left: 10px;">Noti LOL</h5>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="registro.php">Registro</a></li>
        <li><a href="cerrar_sesion.php">Salir</a></li>
    </ul>
    </div>
</nav>

<div class="container center">
    <div class="col s12">
    <h3 class="s12">Usuarios Registrados</h3>
    </div>
</div>
<div class="section">
    <h5>Actualizar usuarios</h5>
    <div class="col s12 divider indigo darken-3 "></div>
</div>
<div class="centrar">
    <table class="responsive-table">
        <tbody class="responsive-table">
            <?php include 'leer.php';?>
        </tbody>
    </table>
</div>
<br>
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


<?php 

}else{

     header("Location: iniciar_sesion.php");

     exit();

}
?>