<?php

$db = new PDO('mysql:host=localhost;dbname=elturista;charset=utf8','root','');

$sentencia = $db->query("SELECT * FROM crear_cuenta");

$usuario = $sentencia->fetchALL();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JONATHAN'S EL TURISTA</title>
    <link rel="shortcut icon" href="https://media-cdn.tripadvisor.com/media/photo-s/05/3f/e6/99/peru-trek-4-good-day.jpg" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>JONATHAN'S EL TURISTA</h1>

    <?php include 'cabecera.php' ?>

    <h2>CREAR CUENTA *>*</h2>
    <?php if(isset($_GET["error1"])) { ?>
        <p style= "color:red ;">Confirme correctamente su contraseña.</p>
    <?php } ?>
    <form action="procesar_usuario.php" method="post">
        <div>
            Nombres:<input type="text" name="nombres">
        </div>
        <div>
            Apellidos:<input type="text" name="apellidos">
        </div>
        <div>
            Correo: <input type="email" name="correo">
        </div>
        <div>
            Contraseña:<input type="password" name="password1">
        </div>
        <div>
            Confirmar Contraseña: <input type="password" name="password2">
        </div>
        
        <button type="submit">Registrarse</button>
        
        # desde aquí
        <?php
        foreach ($crear_cuenta as $n) { ?>
        <?php ?>
         <h2><?php  echo $n["nombres"] ?></h2> 
        <span><?php  echo $n["apellidos"] ?></span>
        <p><?php  echo $n["correo"] ?></p>
        <p><?php  echo $n["contraseña"] ?></p>
        <p><?php  echo $n["confirmar"] ?></p>
        <?php } ?>

    <?php include 'footer.php' ?>

</body>
</html>
