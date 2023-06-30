<?php
//CONEXION CON EL MYSQL PHPADMIN

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemadegestion');

//CONEXION BASE DE DATOS

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

//Trycatch para que no se paralize cuando haya un error 

try{
    //Para que se conecte a la base de datos

    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexion a la base de datos fue con exito";

}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}
$URL = "http://localhost/www.sistemagestion.com/www.sistemadegestion.com";

//Fecha configurada en el sql de Lima
date_default_timezone_set("America/Lima");
$fechaHora = date('Y-m-d H:i:s');

