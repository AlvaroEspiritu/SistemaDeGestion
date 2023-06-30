<?php
include('../app/config.php');
include('../layout/sesion.php'); //Incluimos el layout para recuperar los datos de la carpeta sesion.php
include('../layout/parte1.php');

include('../app/controllers/proveedores/listado_de_proveedores.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de Proveedores
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus"></i> Agregar Nuevo
                        </button>
                    </h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Proveedores registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>Nro</center>
                                        </th>
                                        <th>
                                            <center>Nombre del proveedor</center>
                                        </th>
                                        <th>
                                            <center>Celular</center>
                                        </th>
                                        <th>
                                            <center>Razon Social</center>
                                        </th>
                                        <th>
                                            <center>Empresa</center>
                                        </th>
                                        <th>
                                            <center>Tipo de Persona</center>
                                        </th>
                                        <th>
                                            <center>Direccion</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach ($proveedores_datos as $proveedores_dato) {
                                        $id_proveedor = $proveedores_dato['id_proveedor'];
                                        $nombre_proveedor = $proveedores_dato['nombre_proveedor'];

                                    ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador = $contador +   1; ?></center>
                                            </td>
                                            <td><?php echo $nombre_proveedor; ?></td>
                                            <td><?php echo $proveedores_dato['celular']; ?></td>
                                            <td><?php echo $proveedores_dato['razon_social']; ?></td>
                                            <td><?php echo $proveedores_dato['empresa']; ?></td>
                                            <td><?php echo $proveedores_dato['tipo_persona']; ?></td>
                                            <td><?php echo $proveedores_dato['direccion']; ?></td>
                                            <td>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update<?php echo $id_proveedor; ?>">
                                                        <i class="fa fa-pencil-alt"></i> Editar
                                                    </button>
                                                    <!-- MODAL PARA ACTUALIZAR PROVEEDORES -->
                                                    <div class="modal fade" id="modal-update<?php echo $id_proveedor; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #116f4a;color: white">
                                                                    <h4 class="modal-title">Actualizacion del proveedor</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">x</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Nombre del proveedor <b>*</b></label>
                                                                                <input type="text" id="nombre_proveedor<?php echo $id_proveedor; ?>" value="<?php echo $nombre_proveedor ?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_nombre<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Celular<b>*</b></label>
                                                                                <input type="number" id="celular<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['celular']; ?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_celular<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Razon Social<b>*</b></label>
                                                                                <input type="text" id="razon_social<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['razon_social']; ?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_razon_social<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Empresa<b>*</b></label>
                                                                                <input type="text" id="empresa<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['empresa']; ?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_empresa<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Tipo de Persona<b>*</b></label>
                                                                                <input type="text" id="tipo_persona<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['tipo_persona']; ?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_tipo_persona<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Direccion<b>*</b></label>
                                                                                <textarea name="" id="direccion<?php echo $id_proveedor; ?>" cols="30" rows="3" class="form-control"><?php echo $proveedores_dato['direccion']; ?></textarea>
                                                                                <small style="color: red;display: none" id="lbl_direccion<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-success" id="btn_update<?php echo $id_proveedor; ?>">Actualizar</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <script>
                                                        $('#btn_update<?php echo $id_proveedor; ?>').click(function() {

                                                            var id_proveedor = '<?php echo $id_proveedor; ?>';
                                                            var nombre_proveedor = $('#nombre_proveedor<?php echo $id_proveedor; ?>').val();
                                                            var celular = $('#celular<?php echo $id_proveedor; ?>').val();
                                                            var razon_social = $('#razon_social<?php echo $id_proveedor; ?>').val();
                                                            var empresa = $('#empresa<?php echo $id_proveedor; ?>').val();
                                                            var tipo_persona = $('#tipo_persona<?php echo $id_proveedor; ?>').val();
                                                            var direccion = $('#direccion<?php echo $id_proveedor; ?>').val();

                                                            if (nombre_proveedor == "") {
                                                                $('#nombre_proveedor<?php echo $id_proveedor; ?>').focus();
                                                                $('#lbl_nombre<?php echo $id_proveedor; ?>').css('display', 'block');
                                                            } else if (celular == "") {
                                                                $('#celular<?php echo $id_proveedor; ?>').focus();
                                                                $('#lbl_celular<?php echo $id_proveedor; ?>').css('display', 'block');

                                                            } else if (razon_social == "") {
                                                                $('#razon_social<?php echo $id_proveedor; ?>').focus();
                                                                $('#lbl_razon_social<?php echo $id_proveedor; ?>').css('display', 'block');

                                                            } else if (empresa == "") {
                                                                $('#empresa<?php echo $id_proveedor; ?>').focus();
                                                                $('#lbl_empresa<?php echo $id_proveedor; ?>').css('display', 'block');

                                                            } else if (tipo_persona == "") {
                                                                $('#tipo_persona<?php echo $id_proveedor; ?>').focus();
                                                                $('#lbl_tipo_persona<?php echo $id_proveedor; ?>').css('display', 'block');

                                                            } else if (direccion == "") {
                                                                $('#direccion<?php echo $id_proveedor; ?>').focus();
                                                                $('#lbl_direccion<?php echo $id_proveedor; ?>').css('display', 'block');


                                                            } else {
                                                                var url = "../app/controllers/proveedores/update.php";
                                                                $.get(url, {
                                                                    id_proveedor: id_proveedor,
                                                                    nombre_proveedor: nombre_proveedor,
                                                                    celular: celular,
                                                                    razon_social: razon_social,
                                                                    empresa: empresa,
                                                                    tipo_persona: tipo_persona,
                                                                    direccion
                                                                }, function(datos) {
                                                                    $('#respuesta').html(datos);
                                                                });
                                                            }




                                                        });
                                                    </script>
                                                    <div id="respuesta_update<?php echo $id_proveedor; ?>"></div>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete<?php echo $id_proveedor; ?>">
                                                        <i class="fa fa-trash"></i> Borrar
                                                    </button>

                                                    <!-- MODAL PARA BORRAR PROVEEDORES -->

                                                    <div class="modal fade" id="modal-delete<?php echo $id_proveedor; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #ca0a0b;color: white">
                                                                    <h4 class="modal-title">¿Esta seguro de eliminar al proveedor?</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">x</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Nombre del proveedor <b>*</b></label>
                                                                                <input type="text" id="nombre_proveedor<?php echo $id_proveedor; ?>" value="<?php echo $nombre_proveedor ?>" class="form-control" disabled>
                                                                                <small style="color: red;display: none" id="lbl_nombre<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Celular<b>*</b></label>
                                                                                <input type="number" id="celular< ?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['celular']; ?>" class="form-control" disabled>
                                                                                <small style="color: red;display: none" id="lbl_celular<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Razon Social<b>*</b></label>
                                                                                <input type="text" id="razon_social<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['razon_social']; ?>" class="form-control" disabled>
                                                                                <small style="color: red;display: none" id="lbl_razon_social<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Empresa<b>*</b></label>
                                                                                <input type="text" id="empresa<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['empresa']; ?>" class="form-control" disabled>
                                                                                <small style="color: red;display: none" id="lbl_empresa<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Tipo de Persona<b>*</b></label>
                                                                                <input type="text" id="tipo_persona<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['tipo_persona']; ?>" class="form-control" disabled>
                                                                                <small style="color: red;display: none" id="lbl_tipo_persona<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Direccion<b>*</b></label>
                                                                                <textarea name="" id="direccion<?php echo $id_proveedor; ?>" cols="30" rows="3" class="form-control" disabled><?php echo $proveedores_dato['direccion']; ?></textarea>
                                                                                <small style="color: red;display: none" id="lbl_direccion<?php echo $id_proveedor; ?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_proveedor; ?>">Eliminar</button>
                                                                </div>
                                                                <div id="respuesta_delete<?php echo $id_proveedor; ?>"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <script>
                                                        $('#btn_delete<?php echo $id_proveedor; ?>').click(function() {

                                                                var id_proveedor = '<?php echo $id_proveedor; ?>';

                                                                var url2 = "../app/controllers/proveedores/delete.php";
                                                                $.get(url2, {
                                                                    id_proveedor: id_proveedor,
                                                                }, function(datos) {
                                                                    $('#respuesta_delete<?php echo $id_proveedor; ?>').html(datos);
                                                                });
                                                            }




                                                        );
                                                    </script>

                                                </div>



                                                <i></i>
                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>
</script>

<!-- modal para registrar proveedor -->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1d36b6;color: white">
                <h4 class="modal-title">Creacion de un nuevo proveedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombre del proveedor <b>*</b></label>
                            <input type="text" id="nombre_proveedor" class="form-control">
                            <small style="color: red;display: none" id="lbl_nombre">* Este campo es requerido</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Celular<b>*</b></label>
                            <input type="number" id="celular" class="form-control">
                            <small style="color: red;display: none" id="lbl_celular">* Este campo es requerido</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Razon Social<b>*</b></label>
                            <input type="text" id="razon_social" class="form-control">
                            <small style="color: red;display: none" id="lbl_razon_social">* Este campo es requerido</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Empresa<b>*</b></label>
                            <input type="text" id="empresa" class="form-control">
                            <small style="color: red;display: none" id="lbl_empresa">* Este campo es requerido</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tipo de Persona<b>*</b></label>
                            <input type="text" id="tipo_persona" class="form-control">
                            <small style="color: red;display: none" id="lbl_tipo_persona">* Este campo es requerido</small>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Direccion<b>*</b></label>
                            <textarea name="" id="direccion" cols="30" rows="3" class="form-control"></textarea>
                            <small style="color: red;display: none" id="lbl_direccion">* Este campo es requerido</small>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_create">Guardar proveedor</button>
            </div>
            <div id="respuesta"></div>
        </div>
    </div>
</div>


<script>
    $('#btn_create').click(function() {
        var nombre_proveedor = $('#nombre_proveedor').val();
        var celular = $('#celular').val();
        var razon_social = $('#razon_social').val();
        var empresa = $('#empresa').val();
        var tipo_persona = $('#tipo_persona').val();
        var direccion = $('#direccion').val();

        if (nombre_proveedor == "") {
            $('#nombre_proveedor').focus();
            $('#lbl_nombre').css('display', 'block');
        } else if (celular == "") {
            $('#celular').focus();
            $('#lbl_celular').css('display', 'block');

        } else if (razon_social == "") {
            $('#razon_social').focus();
            $('#lbl_razon_social').css('display', 'block');

        } else if (empresa == "") {
            $('#empresa').focus();
            $('#lbl_empresa').css('display', 'block');

        } else if (tipo_persona == "") {
            $('#tipo_persona').focus();
            $('#lbl_tipo_persona').css('display', 'block');

        } else if (direccion == "") {
            $('#direccion').focus();
            $('#lbl_direccion').css('display', 'block');


        } else {
            var url = "../app/controllers/proveedores/create.php";
            $.get(url, {
                nombre_proveedor: nombre_proveedor,
                celular: celular,
                razon_social: razon_social,
                empresa: empresa,
                tipo_persona: tipo_persona,
                direccion
            }, function(datos) {
                $('#respuesta').html(datos);
            });
        }



    });
</script>
<div id="respuesta"></div>