<?php

$db = new PDO('mysql:host=localhost;dbname=ELTURISTA;charset=utf8','root','');

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

      <form action="procesar_cuenta.php" method="post">

        <div>
            Nombres: <input type="text" name="Nombres">
        </div>
        <div>
            Apellidos: <input type="text" name="Apellidos">
        </div>
       <div>
           Correo: <input type="email" name="Correo" id="">
       </div>
       <div>
           Contraseña: <input type="password" name="Contraseña" id="">
       </div>
       
       <button type="submit">Enviar</button>
   </form>

    <?php include 'footer.php' ?>

</body>
</html>
