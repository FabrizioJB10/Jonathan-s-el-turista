<?php

$no = $_POST["Nombre"];
$ub = $_POST["Ubicación"];
$de = $_POST["Descripción"];

$db = new PDO ( 'mysql:host=localhost;dbname=elturista;charset=utf8mb4','root','');
$db->query("INSERT INTO sugerencias VALUES (NULL,'$no','$ub','$de')");

header('Location: confirmacion_sugerencias.php');

?>