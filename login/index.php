<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SistemaDeGestionDeClientes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck boots trap -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <!-- Libreria para mensajes decorativos con Sweetallert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->

    <?php
    session_start();
    if(isset($_SESSION['mensaje'])){
        $respuesta = $_SESSION['mensaje'];?>
         <script>
            Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '<?php echo $respuesta;?>',
            showConfirmButton: false,
            timer: 1500
})

         </script>
<?php
}
?>
  <center>
  <img src="https://blog.sitrack.com/hubfs/%C2%BFCo%CC%81mo%20solucionar%20los%20problemas%20en%20el%20transporte%20de%20carga%20refrigerada_.png" 
       alt="" width="360px"> 
  </center>
  <br>
  <div class="card card-outline card-primary">
    <div class="card-header bg-gradient-dark text-center">
      <a class="h1"><b>Transmaest Logistica Integrada SAC</b></a>
    </div>
    <div class="card-body bg-gradient-dark">
      <p class="login-box-msg">Ingrese sus datos</p>

      <form action="../app/controllers/login/ingreso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="row"> 
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form> 
    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
