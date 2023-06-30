<?php

include('../../config.php'); //Estamos accediendo a las lineas del codigo del php config

$email = $_POST['email'];
$password_user = $_POST['password_user'];



$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombre = $usuario['nombres'];
    $password_user_tabla = $usuario['password_user'];
}


//Para ver si estan correcto los datos rellenados en el login

if(($contador > 0) && (password_verify($password_user, $password_user_tabla)) ){
    //Para que despues de ingresar al login ingrese a la archiivo index
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: ' . $URL . '/index.php');
} else {
    echo "Datos incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location: ' . $URL . '/login');
}
