<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="/recursos/poro.png" type="image/x-icon">
</head>
<body class="indigo lighten-2">
    
<nav class="indigo darken-3">
    <div class="nav-wrapper" >
    <h5 class="brand-logo" style="margin-left: 10px;">Noti LOL</h5>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="registro.php">Registro</a></li>
        <li><a href="index.html">Registro</a></li>
    </ul>
    </div>
</nav>

<div class="section container center">
    <div class="row center">
        <form action="entrar.php" class="col s12" method="POST">
            <div class="row card-panel">
                <div class="input field col s8 offset-m2">
                    <label for="email">Correo electronico:</label>
                    <input type="text" class="validate" name="email" placeholder="email" requiered>
                </div>
                
                <div class="input field col s8 offset-m2 ">
                    <label for="email">Campeón favorito:</label>
                    <input type="text" class="validate" name="champ_favorito" placeholder="Main" requiered max-length="20">
                </div>
                <br>
                <button class="btn waves-effect waves-light col s4 offset-m4" type="submit" name="submit">Entrar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>