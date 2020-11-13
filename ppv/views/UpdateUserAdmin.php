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
                                    <h2 class="heading-title">Actualizar Usuarios</h2>
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
            <?php
                $id = $_POST['id'];
                $result = $conn->query("SELECT * FROM users where id = '$id';");
                while ($row = mysqli_fetch_array($result)):
            ?>
                <form role="form" class="form-horizontal" action="../LC/LC_Users.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Avatar</label>
                        <div class="col-lg-6">
                            <img src="<?php echo $row[10];?>" class="img-circle center-block" style="width: 200px; height: 180px;">
                            <input type="file" id="avatar" value="<?php echo $row[10];?>" name="avatar" class="file-pos center-block" size="30">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Vicente" value="<?php echo $row[1];?>" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Primer Apellido</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Frolay" value="<?php echo $row[2];?>" name="lastName" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Segundo Apellido</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="de todos los santos " value="<?php echo $row[3];?>" name="lastName2"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Alias (Nick)</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Vicente05" name="nick" value="<?php echo $row[4];?>" class="form-control" required>
                            <input type="text" placeholder="Vicente05" name="oldNick" value="<?php echo $row[4];?>" hidden>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Edad</label>
                        <div class="col-lg-6">
                            <input type="number" placeholder="30" name="age" value="<?php echo $row[7];?>"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="email" placeholder="vicenteDetodosLosSantos@gmail.com" name="email" value="<?php echo $row[6];?>"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="pass" minlength="6" value="<?php echo $row[5];?>"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Teléfono</label>
                        <div class="col-lg-6">
                            <input type="tel" placeholder="123456789" name="phone" maxlength="9" value="<?php echo $row[8];?>"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary btn-outline" type="submit" name="updateUser">Guardar cambios</button>
                            <button class="btn btn-danger btn-outline-danger" type="submit" name="CancelAddUser">Cancelar</button>
                        </div>
                    </div>
                </form>
            <?php
                endwhile;
                mysqli_free_result($result);
                mysqli_close($conn);
            ?>
            </div>
        </div>
    </div>
<?php
else:
    header('location: LC_Pdf.php');
endif;
include_once "include/footer_ppv.php";
?>