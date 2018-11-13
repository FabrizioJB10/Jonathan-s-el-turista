<?php
session_start();
?>

<?php

$db = new PDO('mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');

$sentencia= $db->query("SELECT * FROM crear_cuenta");

$cuenta = $sentencia->fetchAll();

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
    <?php include 'cabecera.php' ?>

    <h2>Cuenta de Usuarios:</h2>

    <table class="tabla">
         <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Contraseña</th>
         </tr>
         <?php foreach ($crear_cuenta as $cu) { ?>
         <tr>
            <td><?php echo $cu["nombres"] ?></td>
            <td><?php echo $cu["apellidos"] ?></td>
            <td><?php echo $cu["correo"] ?></td>
            <td><?php echo $cu["contraseña"] ?></td>
        </tr>
            <?php } ?>
            <?php if(count($crear_cuenta)==0) { ?>
            <tr>
                <td style="text-align:center" colspan="5">No se encontraron registros</td>
            </tr>
            <?php } ?>
    </table>
    <?php include 'footer.php' ?>
</body>
</html>