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
                                    <h2 class="heading-title">Editar Perfil Contraseña</h2>
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
                <form role="form" class="form-horizontal" action="../LC/LC_Admin.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <input type="text" placeholder="******" name="nick" value="<?php echo $_SESSION['admin']?>" hidden>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Contraseña Actual</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="oldPass"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nueva Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="newPass"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Repetir Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="repeatpass"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary btn-outline" type="submit" name="updateUserPass">Guardar cambios</button>
                            <button class="btn btn-danger btn-outline-danger" type="submit" name="CancelAddUser">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php elseif (isset($_SESSION['user'])):?>
<aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2 class="heading-title">Editar Perfil Contraseña</h2>
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
                        <div class="col-lg-6">
                            <input type="text" placeholder="******" name="nick" value="<?php echo $_SESSION['user']?>" hidden>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Contraseña Actual</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="oldPass"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nueva Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="newPass"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Repetir Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="repeatpass"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary btn-outline" type="submit" name="updateUserPass">Guardar cambios</button>
                            <button class="btn btn-danger btn-outline-danger" type="submit" name="CancelAddUser">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
else:
    header('location: LC_Pdf.php');
endif;
include_once "include/footer_ppv.php";
?>