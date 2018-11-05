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
    <main>
        <h1>Iniciar Sesión</h1>

        <?php if (isset($_GET["error"])) { ?>

        <p style="color: red;">Datos incorrectos</p>

        <?php }  ?>

        <form action="login_procesar.php" method="post">
            <div>
                <label for="">Correo:</label>
                <input type="email" name="correo">
            </div>
            <div>
                <label for="">Contraseña:</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Iniciar sesión</button>
    
        </form>
        
    </main>
    <?php include 'footer.php' ?>

</body>
</html>
