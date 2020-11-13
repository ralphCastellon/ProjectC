<?php
session_start();
include_once "include/header_ppv.php";
include_once "../LC/connection.php";
global $conn;
if (isset($_SESSION['admin'])):
?>
<aside id="fh5co-hero" class="js-fullheight">
     <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2 class="heading-title">Crear Usuarios</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
</aside>
<div id="fh5co-features">
        <div class="container">
            <div class="row">
                <form role="form" class="form-horizontal" action="../LC/LC_Users.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Avatar</label>
                        <div class="col-lg-6">
                            <img src="" class="img-circle center-block">
                            <input type="file" id="avatar" name="avatar" class="file-pos center-block" size="30">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Vicente" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Primer Apellido</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Frolay" name="lastName"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Segundo Apellido</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="de todos los santos " name="lastName2"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Alias (Nick)</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Vicente05" name="nick"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Edad</label>
                        <div class="col-lg-6">
                            <input type="number" placeholder="30" name="age"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="email" placeholder="vicenteDetodosLosSantos@gmail.com" name="email"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Repetir Email</label>
                        <div class="col-lg-6">
                            <input type="email" placeholder="vicenteDetodosLosSantos@gmail.com" name="emailRepeat"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="pass" minlength="6"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Repetir Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="passRepeat" minlength="6"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Teléfono</label>
                        <div class="col-lg-6">
                            <input type="tel" placeholder="123456789" name="phone" maxlength="9"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary btn-outline" type="submit" name="addUser">Guardar cambios</button>
                            <button class="btn btn-danger btn-outline-danger" type="submit" name="CancelAddUser">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
else:
    header('location: index.php');
endif;
include_once "include/footer_ppv.php";
?>