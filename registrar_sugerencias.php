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

   <h2>**¡REGISTRE SUS SUGERENCIAS!**</h2>

   <form action="procesar_sugerencias.php" method="post">
       <div>
           Nombre: <input type="text" name="Nombre">
       </div>
       <div>
       Ubicación: <input type="text" name="Ubicación" id="">
       </div>
       <div>
           Descripción:
           <textarea name="Descripción" id="" cols="30" rows="10"></textarea>
       </div>
       
       <button type="submit">Enviar</button>
   </form>

</body>
</html>