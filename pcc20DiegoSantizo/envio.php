<?php
include ("bd.php");

if (isset($_POST['enviar'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

$query = "INSERT INTO cliente (nombres, apellidos, telefono, correo, mensaje) VALUES ($nombres, $apellidos, $telefono, $correo, $mensaje)";
$resultado = mysqli_query($conn, $query); 
if (!$resultado) {
    die ("Error");
}
header("location:contactenos.php"); 
}
