<?php

include('../../config.php');

//Con este codigo cuando volvemos a cerrar sesion , ya no podremos ingresar por el index y de nuevo a registrarse
session_start();
if(isset($_SESSION['sesion_email'])){
    session_destroy();
    header('Location: '.$URL.'/');
}