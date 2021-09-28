<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
$contador = 1;



if ($user == "" and $pass == "") {
    echo "No hay datos. Error No.". $contador;
    $contador++;
}elseif ($user == "admin" and $pass == "mensajes"){
    header("Location:mensajes.php");
}elseif ($user !== "admin" or $pass !== "mensajes") {
    header("Location:vermensajes.php");
    $contador++;
}

if ($contador == 3) {
    echo '<script language="javascript">';
    echo 'alert("Adios")';
    echo '</script>';
}
?>