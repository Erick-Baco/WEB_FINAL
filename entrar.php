<?php
session_start(); 

include 'conexion.php';

if (isset($_POST['email']) && isset($_POST['champ_favorito'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $champ_favorito = validate($_POST['champ_favorito']);


    $claves = "SELECT * FROM usuarios WHERE email='$email' AND champ_favorito='$champ_favorito'";

    $resultado = mysqli_query($conexion, $claves);
    

    if (mysqli_num_rows($resultado) === 1) {    
        $row = mysqli_fetch_assoc($resultado);

        if ($row['email'] === $email && $row['champ_favorito'] === $champ_favorito) {

            echo "Logged in!";

            $_SESSION['email'] = $row['email'];

            $_SESSION['champ_favorito'] = $row['champ_favorito'];

            $_SESSION['clave_usuario'] = $row['clave_usuario'];

            header("Location: cuenta.php");

            exit();

        }else{

            header("Location: iniciar_sesion.php?error=Credenciales incorrectas");

            exit();

        }
        }else{

            header("Location: iniciar_sesion.php?error=Credenciales incorrectas");
    
            exit();
    
        }

    }else{

    header("Location: iniciar_sesion.php");

    exit();

}

?>