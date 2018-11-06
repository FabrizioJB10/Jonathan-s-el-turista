<?php
#PASO 1: LA CONEXION
$db = new PDO ( 'mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');

#PASO 2: LASENTENCIA
$sentencia = $db->query("SELECT * FROM sugerencia");

#PASO 3: OBTER LOS DATOS
$sugerencia = $sentencia->fetchAll();

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

    <p>Sugerencias:</p>

    <?php
    #PASO 4: IMPRIMIR LOS DATOS

    foreach ($noticias as $n) {?>
    
    <h2><?php echo $n["nombre"]?></h2>
    <span><?php echo $n["ubicacion"]?></span>
    <p><?php echo $n["descripcion"]?></p>

    <?php } ?>

</body>
</html>
