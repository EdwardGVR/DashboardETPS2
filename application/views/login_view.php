<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <title>Iniciar sesi&oacute;n</title>
</head>
<body>
    <div class="container login">
        <form action="#" class="login-form" method="POST">
            <div class="user-icon">
                <i class="fas fa-user"></i>
            </div>

            <div class="login-header">
                <div class="logo-utec">
                    <img src="img/utec_logo1.png" alt="" srcset="">
                </div>
                <span class="subtitle">Reserva de canchas</span>
                <span class="title">Acceder</span>
            </div>

            <div class="input-container">
                <label for="user">Usuario</label>
                <input id="user" type="text" name="user" placeholder="Usuario">
            </div>

            <div class="input-container">
                <label for="pass">Clave</label>
                <input id="pass" type="password" name="pass" placeholder="Clave">
            </div>

            <div class="input-container">
                <input type="submit" name="ingresar" value="Ingresar">
            </div>
        </form>
    </div>
</body>
</html>