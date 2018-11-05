<?php

$db = new PDO('mysql:host=localhost;dbname=crear_cuenta;charset=utf8','root','');

$sentencia = $db->query("SELECT * FROM registrarse");

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

    <?php
   
    foreach ($usuario as $u) { ?> 

    <table>
        <td>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Conteraseña</th>
            <th>Confirmar Contraseña</th>
        </td>
        <td>
        
        </td>
    </table>
        <p>Nombres: <?php echo $u["nombres"]?></p>
        <p>Apellidos: <?php echo $u["apellidos"]?></p>
        <p>Correo: <?php echo $u["correo"]?></p>
        <p>Contraseña: <?php echo $u["password"]?></p>
        <p>Confirmar Contraseña: <?php echo $u["password"]?></p>
        <br/>    

    <?php } ?>
    

</body>
</html>
