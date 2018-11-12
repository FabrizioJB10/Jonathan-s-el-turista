<?php
$id = $_POST["id"];
$db = new PDO('mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');
$stmt =  $db ->query("DELETE FROM crear_cuenta WHERE id='$id'");
header("Location: cuenta.php");
?>