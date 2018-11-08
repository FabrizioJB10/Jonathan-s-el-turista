<?php
#Entrada

$c = $_POST["correo"];
$p = $_POST["password"];

#Proceso

$validacion = false;
$p = sha1($p);
$db = new PDO('mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');
$stmt= $db->query("SELECT * FROM iniciar WHERE correo='$c' AND contraseña='$p'");
$usuarios = $stmt->fetchAll();


if(count($usuarios)==1){
    $validacion = true;
    session_start();
    $u= $usuarios[0];
    $_SESSION["correo"] = $u["correo"];
    $_SESSION["nombres"] = $u["nombres"];
    $_SESSION["apellidos"] = $u["apellidos"];

}



#Salida

if($validacion){
    header("Location: index.php");
}
else{
    header("Location: login.php?error=1");
}



?>