<!DOCTYPE html>
<html lang="es">

<head> <?php require 'layouts/head.php'; ?> </head>

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
                            <h1>PERFIL</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active">Usario de perfil</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="../dist/img/userAdmin.jpg"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">Carlos Cruz</h3>

                                    <p class="text-muted text-center">ADSO</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Seguidores</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Seguidos</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Amigos</b> <a class="float-right">300</a>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Acerca de mí</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Educacion</strong>

                                    <p class="text-muted">
                                        -Bachiller En La Institución Educativa Técnico Empresarial del Llano<br>
                                        -Analisis y Desarrollo De Software en el SENA  de la Sede Centro Minero
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicacion</strong>

                                    <p class="text-muted">Sogamoso-Boyaca</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger"> 1.Html</span> <br>
                                        <span class="tag tag-success">2.Css</span> <br>
                                        <span class="tag tag-info"> 3.MySQL</span> <br>
                                        <span class="tag tag-warning">4.PHP</span> <br>
                                        <span class="tag tag-primary">5.Java</span> <br>
                                        <span class="tag tag-danger"> 6.Python</span> 
                                        
                                    </p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

                                    <p class="text-muted">Soy una persona responsable, puntual y con la disposicion de seguir aprendiendo cosas nuevas.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividad</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ajustes</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                                                    <span class="username">
                                                        <a href="#">Jonathan Burke Jr.</a>
                                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                    </span>
                                                    <span class="description">Compartido públicamente - 7:30 PM hoy</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                Hola, Sarah. Estaba pensando en renovar el sitio web de la empresa y quería preguntarte 
                                                qué tendencias de diseño web crees que son importantes este año. He estado viendo algo 
                                                sobre diseños más minimalistas.
                                                </p>

                                                <p>
                                                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Compartir</a>
                                                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                                    <span class="float-right">
                                                        <a href="#" class="link-black text-sm">
                                                            <i class="far fa-comments mr-1"></i> Comentario (5)
                                                        </a>
                                                    </span>
                                                </p>

                                                <input class="form-control form-control-sm" type="text" placeholder="Responder un comentario">
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->
                                            <div class="post clearfix">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="../dist/img/user7-128x128.jpg" alt="User Image">
                                                    <span class="username">
                                                        <a href="#">Sarah Ross</a>
                                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                    </span>
                                                    <span class="description">Te envié un mensaje - Hace 3 dias</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                ¡Hola, Jonathan! Sí, el diseño minimalista sigue siendo muy fuerte. Menos es más, 
                                                ¿no? La idea es enfocarse en la simplicidad y la usabilidad, eliminar todo lo
                                                que sea innecesario. También las tipografías grandes y audaces están muy de moda, 
                                                además de las paletas de colores suaves y neutros.
                                                </p>

                                                <form class="form-horizontal">
                                                    <div class="input-group input-group-sm mb-0">
                                                        <input class="form-control form-control-sm" placeholder="Responder">
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-danger">Enviar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="../dist/img/user6-128x128.jpg" alt="User Image">
                                                    <span class="username">
                                                        <a href="#">Adam Jones</a>
                                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                    </span>
                                                    <span class="description">Publicado 5 fotos - Hace 5 dias</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid" src="../dist/img/photo1.png" alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <img class="img-fluid mb-3" src="../dist/img/photo2.png" alt="Photo">
                                                                <img class="img-fluid" src="../dist/img/photo3.jpg" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-6">
                                                                <img class="img-fluid mb-3" src="../dist/img/photo4.jpg" alt="Photo">
                                                                <img class="img-fluid" src="../dist/img/photo1.png" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <p>
                                                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Compartir</a>
                                                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                                    <span class="float-right">
                                                        <a href="#" class="link-black text-sm">
                                                            <i class="far fa-comments mr-1"></i> Comentarios (5)
                                                        </a>
                                                    </span>
                                                </p>

                                                <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                            </div>
                                            <!-- /.post -->
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="timeline">
                                            <!-- The timeline -->
                                            <div class="timeline timeline-inverse">
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-danger">
                                                        10 Feb. 2014
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                        <h3 class="timeline-header"><a href="#">Equipo de soporte</a> te envié un correo electrónico</h3>

                                                        <div class="timeline-body">
                                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                            quora plaxo ideeli hulu weebly balihoo...
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-primary btn-sm">Leer mas</a>
                                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-user bg-info"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> Hace 5 minutos</span>

                                                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> acepté tu solicitud de amistad
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-comments bg-warning"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i>Hace 25 minutos</span>

                                                        <h3 class="timeline-header"><a href="#">Jay White</a> comentó en tu publicación</h3>

                                                        <div class="timeline-body">
                                                            ¡Llévame con tu líder!
                                                            ¡Suiza es pequeña y neutral!
                                                            ¡Somos más como Alemania, ambiciosos e incomprendidos!
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-warning btn-flat btn-sm">Ver comentario</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-success">
                                                        3 Ene. 2014
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-camera bg-purple"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> Hace dos dias</span>

                                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> subí nuevas fotos </h3>

                                                        <div class="timeline-body">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="settings">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputName" placeholder="Ingrese su nombre">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Apellido</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputName2" placeholder="Ingrese su apellido">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail" placeholder="Ingrese su email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputExperience" class="col-sm-2 col-form-label">Experiencia</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="inputExperience" placeholder="Ingrese su experience"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label">Habilidades</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputSkills" placeholder="Ingrese sus habilidades">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Acepto los <a href="#">terminos y condiciones</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger">Enviar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
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
</body>

</html>