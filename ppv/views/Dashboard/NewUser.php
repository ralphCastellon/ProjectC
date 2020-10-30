<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- J Alert (Para el estilo de los msj) -->
    <link rel="stylesheet" href="css/jAlert.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>

<div id="wrapper">
    <!-- Side Navbar -->
    <?php include "include/Header.php"; ?>
    <div class="page">
        <!-- navbar-->
        <?php include "include/Header2.php"; ?>

        <!--         Comienza Mi Formulario  -->
        <section class="dashboard-counts section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <h4>Registrar nuevos Usuarios</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="panel-heading">
                                            <p style="color:gray;">En esta pantalla se registran los nuevos usuarios del
                                                sistema </p>
                                        </div>
                                    </div>
                                    <div><br></div>

                                    <div class="col-lg-8">
                                        <form action="../../LC/LC_Users.php" method="post">
                                            <div class="form-group">
                                                <label>Nombre: </label>
                                                <input type="text" class="form-control" name="userName"
                                                       placeholder="Vicente" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Apellido 1: </label>
                                                <input type="text" class="form-control" name="lastName"
                                                       placeholder="floray" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Apellido 2: </label>
                                                <input type="text" class="form-control" name="lastName2"
                                                       placeholder="de todos los santos" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Alias (Nick): </label>
                                                <input type="text" class="form-control" name="nick"
                                                       placeholder="vicenteTheBoss" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña: </label>
                                                <input type="password" class="form-control" placeholder="******"
                                                       name="pass" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Confirme contraseña: </label>
                                                <input type="password" class="form-control" placeholder="******"
                                                       name="pass2" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Correo electrónico: </label>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="email@example.com"
                                                       name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Confirme correo electrónico: </label>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="email@example.com"
                                                       name="email2" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Edad: </label>
                                                <input type="number" class="form-control" name="age"
                                                       placeholder="20" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Teléfono: </label>
                                                <input type="text" class="form-control" name="phone"
                                                       placeholder="123456789" required/>
                                            </div>
                                            <div align="right">
                                                <input type="submit" class="btn btn-primary" name="saved"
                                                       value="Guardar">
                                                <input type="reset" class="btn btn-danger" name="cancel"
                                                       value="Cancelar">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /#page-wrapper -->
        </section>
    </div>
</div>
<!-- /#wrapper -->
<!--         Finaliza Mi Formulario  -->

<!-- /#wrapper -->

<!-- Javascript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>


<!-- DataTables JavaScript -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

<!--     Jalert (Para el llamado de los msj) -->

<script src="js/jAlert.min.js"></script>
<script src="js/jAlert-functions.min.js"> //optional!!</script>

<!-- Main File-->
<script src="js/front.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });

//         Para evaluar el mensaje del servlet
        var msj = "<%=mensaje%>";
        if (msj == "EXITO") {
            $.jAlert({
                'title': 'EXITO!',
                'content': 'Su usuario ha sido guardado �xitosamente...',
                'theme': 'green',
                'btns': {'text': 'close'}
            });
        }
        if (msj == "ERROR") {
            $.jAlert({
                'title': 'ERROR!',
                'content': 'El nombre de usuario no est� disponible...',
                'theme': 'red',
                'btns': {'text': 'close'}
            });
        }

        $.jAlert('attach');

    });
</script>

</body>
</html>