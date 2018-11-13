<?php

$db = new PDO ( 'mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');

$sentencias = $db->query("SELECT * FROM sugerencias");

$sugerencias = $sentencias->fetchAll();
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

    <h1>**Sugerencias:**</h1>

    <?php

        foreach ($sugerencias as $su) {?>
    
        <h2><?php echo $su["nombre"]?></h2>
        <h2><?php echo $su["ubicacion"]?></h2>
        <p><?php echo $su["descripcion"]?></p>

    <?php } ?>

    <?php include 'footer.php' ?>

</body>
</html>
