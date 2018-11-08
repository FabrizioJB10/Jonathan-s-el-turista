<?php
#ENTRADA
$a = $_POST["nombres"];
$b = $_POST["apellidos"];
$d = $_POST["correo"];
$e = $_POST["contraseña"];
$f = $_POST["confirmar"];
#PROCESO
$validacion = true;

if($p1 != $p2){
    $validacion = false;
    
}
else{
    $db = new PDO('mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');
    $p1 = sha1($p1);
    $db->query("INSERT INTO usuarios VALUES (null, '$a', '$b', '$d', '$e', '$f')");
}


#SALIDA



if($validacion == false) {
    header("Location: crear_cuenta.php?error1=ddgg");

}
else{
    header('Location: confirmacion_cuenta.php');
}
?>


