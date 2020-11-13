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
                                    <h2 class="heading-title">Editar Perfil</h2>
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
                    $admin = $_SESSION['admin'];
                    $result = mysqli_query($conn, "SELECT * FROM admins where nick = '$admin';");
                    while ($row = mysqli_fetch_array($result)):
                ?>
                <form role="form" class="form-horizontal" action="../LC/LC_Admin.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Avatar</label>
                        <div class="col-lg-6">
                            <img src="<?php echo $row[10] ?>" class="img-circle center-block" style="width: 200px; height: 180px;">
                            <input type="file" id="avatar" name="avatar" value="<?php echo $row[10] ?>" class="file-pos center-block" size="30">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Vicente" name="name" class="form-control" value="<?php echo $row[1] ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Primer Apellido</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Frolay" name="lastName" value="<?php echo $row[2] ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Segundo Apellido</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="de todos los santos " name="lastName2" value="<?php echo $row[3] ?>"   class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Alias (Nick)</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Vicente05" name="nick" value="<?php echo $row[4] ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Edad</label>
                        <div class="col-lg-6">
                            <input type="number" placeholder="30" name="age" value="<?php echo $row[7] ?>"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="email" placeholder="vicenteDetodosLosSantos@gmail.com" name="email" value="<?php echo $row[6] ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Repetir Email</label>
                        <div class="col-lg-6">
                            <input type="email" placeholder="vicenteDetodosLosSantos@gmail.com" name="emailRepeat" value="<?php echo $row[6] ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Contraseña</label>
                        <div class="col-lg-6">
                            <input type="password" placeholder="******" name="pass" minlength="6" class="form-control" disabled>
                            <a href="EditeProfileAdmin2.php">Cambiar Contraseña</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Teléfono</label>
                        <div class="col-lg-6">
                            <input type="tel" placeholder="123456789" name="phone" maxlength="9" value="<?php echo $row[8] ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary btn-outline" type="submit" name="updateProfile">Guardar cambios</button>
                            <button class="btn btn-danger btn-outline-danger" type="submit" name="CancelAddUser">Cancelar</button>
                        </div>
                    </div>
                </form>
                <?php
                    endwhile;
                    mysqli_free_result($result);
                ?>
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
                                    <h2 class="heading-title">Editar Perfil</h2>
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
                $user = $_SESSION['user'];
                $result = mysqli_query($conn, "SELECT * FROM users where nick = '$user';");
                while ($row = mysqli_fetch_array($result)):
                    ?>
                    <form role="form" class="form-horizontal" action="../LC/LC_Users.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Avatar</label>
                            <div class="col-lg-6">
                                <img src="<?php echo $row[10] ?>" class="img-circle center-block" style="width: 200px; height: 180px;">
                                <input type="file" id="avatar" name="avatar" class="file-pos center-block" size="30">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Vicente" name="name" class="form-control" value="<?php echo $row[1] ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Primer Apellido</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Frolay" name="lastName" value="<?php echo $row[2] ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Segundo Apellido</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder="de todos los santos " name="lastName2" value="<?php echo $row[3] ?>"   class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Alias (Nick)</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Vicente05" name="nick" value="<?php echo $row[4] ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Edad</label>
                            <div class="col-lg-6">
                                <input type="number" placeholder="30" name="age" value="<?php echo $row[7] ?>"  class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                                <input type="email" placeholder="vicenteDetodosLosSantos@gmail.com" name="email" value="<?php echo $row[6] ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Repetir Email</label>
                            <div class="col-lg-6">
                                <input type="email" placeholder="vicenteDetodosLosSantos@gmail.com" name="emailRepeat" value="<?php echo $row[6] ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Contraseña</label>
                            <div class="col-lg-6">
                                <input type="password" placeholder="******" name="pass" minlength="6" class="form-control" disabled>
                                <a href="EditeProfileAdmin2.php">Cambiar Contraseña</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Teléfono</label>
                            <div class="col-lg-6">
                                <input type="tel" placeholder="123456789" name="phone" maxlength="9" value="<?php echo $row[8] ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary btn-outline" type="submit" name="updateProfile">Guardar cambios</button>
                                <button class="btn btn-danger btn-outline-danger" type="submit" name="CancelAddUser">Cancelar</button>
                            </div>
                        </div>
                    </form>
                <?php
                endwhile;
                mysqli_free_result($result);
                ?>
            </div>
        </div>
    </div>
<?php
else:
    header('location: index.php');
endif;
include_once "include/footer_ppv.php";
?>