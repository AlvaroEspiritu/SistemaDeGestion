<?php
//Para acceder al archivo config.php
include('../../config.php');

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$rol = $_POST['rol'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

//Pasword_hash sirve para encriptar y esconder la contraseña 
if ($password_user == $password_repeat) {
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);

    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios
       ( nombres, email, id_rol, password_user, fyh_creacion)
VALUES (:nombres,:email,:id_rol,:password_user,:fyh_creacion)");

    //Conexion con el sql
    $sentencia->bindParam('nombres', $nombres);
    $sentencia->bindParam('email', $email);
    $sentencia->bindParam('id_rol', $rol);
    $sentencia->bindParam('password_user', $password_user);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se registro al administrador de manera correcta";
    header('Location: '.$URL.'/administrador/');


} else {
    session_start();
    $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
    header('Location: '.$URL.'/administrador/create.php');
}




