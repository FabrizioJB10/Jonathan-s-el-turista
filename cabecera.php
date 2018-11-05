<header>
    <img src="http://viajes.machupicchu.org/images/sacred_valley.jpg" alt="" height="150">
    <img src="https://img.peru21.pe/files/article_content_ec_fotos/uploads/2017/08/09/598ba7bd9cc2e.jpeg" alt="" height="150">
    <img src="https://www.colcaperutours.com/wp-content/uploads/2015/12/ISLA-DE-UROS-TRADICIONAL1.jpg" alt="" height="150">
    <img src="http://civa.com.pe/wp-content/uploads/2017/03/lugares-turisticos-peru.jpg" alt="" height="150">
    <img src="https://i.ytimg.com/vi/dZhAtS90f6k/maxresdefault.jpg" alt="" height="150">
    <nav>
        <a href="index.php"><strong>J. EL TURISTA</strong></a>
        <a href="login.php"><strong>Iniciar Sesión</strong></a>
        <a href="crear_cuenta.php"><strong>Crear Cuenta</strong></a>

        <?php if (isset($_SESSION["correo"])) { ?>
            <a href="crear_cuenta.php"><strong>Crear Cuenta</strong></a>
        <?php } ?>
    </nav>
</header>
