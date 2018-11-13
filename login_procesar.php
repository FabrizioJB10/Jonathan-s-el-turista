<?php
$c = $_POST["correo"];
$p = $_POST["password"];
$validacion = false;
$p = sha1($p);
$db = new PDO('mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');
$cc= $db->query("SELECT * FROM crear_cuenta WHERE correo='$c' AND contraseña='$p');
$crear_cuenta = $cc->fetchAll();


if(count($crear_cuenta)==1){
    $validacion = true;
    session_start();
    $cu= $crear_cuenta[0];
    $_SESSION["correo"] = $cu["correo"];
    #$_SESSION["password"] = $cu["password"];
}

if($validacion){
    header("Location: index.php");
}
else{
    header("Location: login.php?error=1");
}

?>
