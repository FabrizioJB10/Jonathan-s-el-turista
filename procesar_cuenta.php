<?php

$a = $_POST["nombres"];
$b = $_POST["apellidos"];
$d = $_POST["correo"];
$e = $_POST["password1"];
$f = $_POST["password2"];

$validacion = true;

if($e != $f){
    $validacion = false;
    
}
else{
    $db = new PDO('mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');
    $e = sha1($e);
    $db->query("INSERT INTO crear_cuenta VALUES (null, '$a', '$b', '$d', '$e')");
}


if($validacion == false) {
    header("Location: crear_cuenta.php?error1=ddgg");

}
else{
    header('Location: confirmacion_cuenta.php');
}
?>


