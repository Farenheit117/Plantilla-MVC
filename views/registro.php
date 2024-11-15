<!DOCTYPE html>
<html lang="es">

<head> <?php require 'layouts/head.php'; ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php require 'layouts/preloader.php'; ?>
        <?php require 'layouts/navbar.php'; ?>
        <?php require 'layouts/sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> Formulario</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active">Usuario</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid" id="container-form">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h1 class="card-title">Registro De Usuario </h1>
                                    <?php //mensaje de error y de exito
                                        if (isset($_GET['error'])) {
                                            if ($_GET['mensaje'] == "exito") {
                                        ?>
                                                <div id="mesaje_e" class="col-md-3 col-sm-6 col-12">
                                                    <div class="info-box">
                                                        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                                                        <div class="info-box-content">
                                                            <span class="info-box-text">Registro exitoso</span>

                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                    <!-- /.info-box -->
                                                </div>
                                            <?php

                                            } else {
                                            ?>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <div class="info-box">
                                                        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                                                        <div class="info-box-content">
                                                            <span class="info-box-text">Error, intentelo despues</span>

                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                    <!-- /.info-box -->
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                </div>
                                
                                

                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm" action="../controlers/user_controller.php?action=crear " method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre</label>
                                            <input type="text" id="exampleInputEmail1" name="Nombre" class="form-control" placeholder="Ingrese nombre completo" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" id="exampleInputEmail1" name="Email" class="form-control" placeholder="Ingrese su Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" id="exampleInputEmail1" name="Clave" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" id="exampleInputEmail1" name="Clave2" class="form-control" placeholder="Password" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Pregunta Seguridad</label>
                                            <select class="form-control" name="PreguntaS" id="preguntaSeguridad">
                                                <option value="">Selecciona</option>
                                                <option>Nombre de tu primera mascota</option>
                                                <option>Fecha de nacimiento de alguno de tus padres</option>
                                                <option>Comida favorita</option>
                                                <option>Color favorito</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Respuesta</label>
                                            <input type="text" name="Respuesta" placeholder="Respuesta" id="exampleInputEmail1" class="form-control" />

                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        <?php require 'layouts/footer.php'; ?>
        <?php require 'layouts/aside-dark.php'; ?>
    </div>
    <!-- ./wrapper -->

    <?php require 'layouts/script.php'; ?>
    <!-- jquery-validation -->
    <script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("Form successful submitted!");
                    submit();
                }
            });
            $('#quickForm').validate({
                rules: {
                    Nombre: {
                        requerid: true,
                    },
                    Email: {
                        required: true,
                        email: true,
                    },
                    Clave: {
                        required: true,
                        minlength: 5,
                    },
                    Clave2: {
                        required: true,
                        minlength: 5,
                    },
                    PreguntaS: {
                        required: true,
                    },
                    terms: {
                        required: true,
                    },
                },
                messages: {
                    Nombre: {
                        required: "Por favor ingrese un nombre valido",
                    },
                    Email: {
                        required: "Por favor ingrese un correo valido",
                        email: "Por favor ingrese un correo valido"
                    },
                    Clave: {
                        required: "Por favor proporcione una contraseña",
                        minlength: "Su contraseña debe tener al menos 5 caracteres",
                    },
                    Clave2: {
                        required: "Por favor ingrese la misma contraseña para confirmar",
                        minlength: "Su contraseña debe tener al menos 5 caracteres",
                    },
                    PreguntaS: {
                        required: "Seleciona el tipo de pregunta de seguridad"
                    },
                    terms: "Debe aceptar nuestros términos y condiciones"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>