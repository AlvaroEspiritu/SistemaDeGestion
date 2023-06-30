<?php
//Para acceder al archivo config.php
include('../../config.php');

$nombre_proveedor = $_GET['nombre_proveedor'];
$celular = $_GET['celular'];
$razon_social = $_GET['razon_social'];
$empresa = $_GET['empresa'];
$tipo_persona = $_GET['tipo_persona'];
$direccion = $_GET['direccion'];

$sentencia = $pdo->prepare("INSERT INTO tb_proveedores
       ( nombre_proveedor, celular, razon_social, empresa, tipo_persona, direccion, fyh_creacion)
VALUES (:nombre_proveedor,:celular,:razon_social,:empresa,:tipo_persona,:direccion,:fyh_creacion)");

    //Conexion con el sql
    $sentencia->bindParam('nombre_proveedor', $nombre_proveedor);
    $sentencia->bindParam('celular', $celular);
    $sentencia->bindParam('razon_social', $razon_social);
    $sentencia->bindParam('empresa', $empresa);
    $sentencia->bindParam('tipo_persona', $tipo_persona);
    $sentencia->bindParam('direccion', $direccion);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    
    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se registro al proveedor de la manera correcta";
        $_SESSION['icono'] = "success";
        ?>
    <script>
        location.href = "<?php echo $URL;?>/proveedores";
    </script>
    <?php
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
?>
<script>
    location.href = "<?php echo $URL;?>/proveedores"
</script>

<?php
    }
    

    