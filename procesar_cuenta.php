<?php
#ENTRADA
$a = $_POST["nombres"];
$b = $_POST["apellidos"];
$d = $_POST["correo"];
$e = $_POST["password"];
#PROCESO
$db = new PDO ( 'mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');
$db->query("INSERT INTO usuarios VALUES (NULL,'$a', '$b', SYSDATE(),'$d', '$e')");

#SALIDA
header('Location: confirmacion_cuenta.php');

?>
