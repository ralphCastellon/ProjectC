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
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
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
    <?php include "include/Header.php"; ?>
    <div class="page">
        <!-- navbar-->
        <?php include "include/Header2.php"; ?>

        <!--         Comienza Mi tabla -->

        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Control de Administradores</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <p>En esta pantalla encontrara los administradores registrados y activos del sistema
                                <p>
                                <div align="right" style="margin-top: -40px;">
                                    <a href="NewUser.php">
                                        <i class="fa fa-user-plus fa-2x" title="Registrar un nuevo usuario"></i>
                                        &nbsp;Nuevo Administrador
                                    </a>
                                </div>
                                <div><br></div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Nombre de usuario</th>
                                        <th>Apellido 1</th>
                                        <th>Apellido 2</th>
                                        <th>Alias (nick)</th>
                                        <th>Correo electrónico</th>
                                        <th>Edad</th>
                                        <th>Teléfono</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <?php
                                        include "../../LC/connection.php";
                                        $conn = connect();
                                        $result = mysqli_query($conn, "SELECT * FROM users;");
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                        <td> <?php echo $row['user_name'];?></td>
                                        <td> <?php echo $row['last_name_1'];?></td>
                                        <td> <?php echo $row['last_name_2'];?></td>
                                        <td> <?php echo $row['nick'];?></td>
                                        <td> <?php echo $row['email'];?></td>
                                        <td> <?php echo $row['age'];?></td>
                                        <td> <?php echo $row['phone'];?></td>
                                        <td align="center"></td>
                                        <td align="center">
                                            <a data-toggle="modal" onclick="" href="#myModal">
                                                <i class="fa fa-edit" title="Modificar Usuario"></i>
                                            </a>&nbsp;&nbsp;
                                            <a id="eliminarUs" onclick="" href="#myModal2">
                                                <i class="fa fa-user-times" title="Eliminar Usuario"></i>
                                            </a>

                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--         Fin Mi Tabla -->


                <!--     COMIENZA MI MODALBOX  ModUser   -->

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4>Actualizar los datos del usuario</h4>

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="" method="post">
                                    <input type="hidden" name="opc" id="opc" value="2"/>
                                    <input type="hidden" name="idUser" id="idUser"/>
                                    <div class="form-group">
                                        <label>Usuario: </label>
                                        <input type="text" class="form-control" name="user" id="user"
                                               placeholder="Vicente" required/>
                                        <p style="color: gray;" class="help-block"></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Contrase�a: </label>
                                        <input type="password" class="form-control" placeholder="******" name="pwd"
                                               id="pwd" required/>
                                        <p style="color: gray;" class="help-block">Regla: M�nimo 6 car�cteres, con
                                            letras min�sculas, may�sculas, n�meros y car�cteres especiales</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirme contrase�a: </label>
                                        <input type="password" class="form-control" placeholder="******" name="pwd2"
                                               id="pwd2" required/>
                                        <p class="help-block" style="color: gray;">Regla: M�nimo 6 car�cteres, con
                                            letras min�sculas, may�sculas, n�meros y car�cteres especiales</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Correo electr�nico: </label>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input style="color: gray;" type="email" class="form-control"
                                               placeholder="email@example.com" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirme correo electr�nico: </label>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="email@example.com"
                                               name="email2" id="email2">
                                    </div>
                                    <div align="right">
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                        <input type="reset" class="btn btn-danger" value="Cancelar">
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
                <!--     FIN MODALBOX -->
                <!--     COMIENZA MI MODALBOX   deleteUser  -->

                <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4>Eliminar un usuario</h4>

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="" method="post">
                                    <input type="hidden" name="opc" id="opc" value="2"/>
                                    <input type="hidden" name="idUser" id="idUser"/>
                                    <div class="form-group">
                                        <label>Nick del usuario a eliminar: </label>
                                        <input type="text" class="form-control" name="user" id="user"
                                               placeholder="Vicente" required/>
                                        <p style="color: gray;" class="help-block"></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Contrase�a: </label>
                                        <input type="password" class="form-control" placeholder="******" name="pwd"
                                               id="pwd" required/>
                                        <p style="color: gray;" class="help-block">Regla: M�nimo 6 car�cteres, con
                                            letras min�sculas, may�sculas, n�meros y car�cteres especiales</p>
                                    </div>
                                    <div align="right">
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                        <input type="reset" class="btn btn-danger" value="Cancelar">
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
                <!--     FIN MODALBOX -->
            </div>
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

            <!--     Jalert (Para el llamado de los msj) -->

            <script src="js/jAlert.min.js"></script>
            <script src="js/jAlert-functions.min.js"> //optional!!</script>

            <!-- DataTables JavaScript -->
            <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
            <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

            <!-- Main File-->
            <script src="js/front.js"></script>

            <!-- Page-Level Demo Scripts - Tables - Use for reference -->

            <script>
                //     	Nuestras funciones
                function editarUser(idUser, nameUser, emailUser) {
                    $('#idUser').val(idUser);
                    $('#userName').val(nameUser);
                    $('#email').val(emailUser);
                    $('#email2').val(emailUser);
                }


                function eliminarUser(idUser) {
                    confirm(function (e) {
                        e.preventDefault();
                        window.location.href = "../Sl_Usuario?idU=" + idUser;
                    });
                    return false;
                }

            </script>


            <script>
                $(document).ready(function () {
                    $('#dataTables-example').DataTable({
                        responsive: true
                    });


//      Para evaluar el mensaje del servlet
                    var msj = "<%=mensaje%>";
//     	Para evaluar mensajes de guardado
                    if (msj == "1") {
                        $.jAlert({
                            'title': 'EXITO!',
                            'content': 'Su usuario ha sido eliminado �xitosamente...',
                            'theme': 'green',
                            'btns': {'text': 'close'}
                        });
                    }
                    if (msj == "0") {
                        $.jAlert({
                            'title': 'ERROR!',
                            'content': 'El usuario no se ha podido eliminar...',
                            'theme': 'red',
                            'btns': {'text': 'close'}
                        });
                    }
//     	Para evaluar mensajes de actualizado 
                    if (msj == "actualizado1") {
                        $.jAlert({
                            'title': 'EXITO!',
                            'content': 'Su usuario ha sido actualizado �xitosamente...',
                            'theme': 'green',
                            'btns': {'text': 'close'}
                        });
                    }
                    if (msj == "actualizado2") {
                        $.jAlert({
                            'title': 'ERROR!',
                            'content': 'El usuario no se ha podido actualizar porque el nombre de usuario ya existe!!!',
                            'theme': 'red',
                            'btns': {'text': 'close'}
                        });
                    }
                    if (msj == "actualizado3") {
                        $.jAlert({
                            'title': 'ERROR!',
                            'content': 'El usuario no se ha podido actualizar porque el usuario no existe o no fue encontrado',
                            'theme': 'red',
                            'btns': {'text': 'close'}
                        });
                    }
                    if (msj == "actualizado0") {
                        $.jAlert({
                            'title': 'ERROR!',
                            'content': 'El usuario no se ha podido actualizar, favor contacte al Administrador del Sistema!',
                            'theme': 'red',
                            'btns': {'text': 'close'}
                        });
                    }

                    if (msj == "UserName") {
                        $.jAlert({
                            'title': 'ERROR!',
                            'content': 'El usuario no puede ser una cadena vac�a!!!',
                            'theme': 'red',
                            'btns': {'text': 'close'}
                        });
                    }

                    $.jAlert('attach');


                });
            </script>

</body>
</html>