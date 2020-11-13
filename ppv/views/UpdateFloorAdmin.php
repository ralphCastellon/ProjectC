<?php
session_start();
include_once "include/header_ppv.php";
include_once "../LC/connection.php";
global $conn;
if (isset($_SESSION['admin'])):
    $id=$_POST['id'];
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
                                    <h2 class="heading-title">Actualizar Piso</h2>
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
                    $result = $conn->query("SELECT * FROM floor inner join opinion on floor.id = opinion.id_floor and floor.id = '$id';");
                    while ($row = mysqli_fetch_array($result)):
                ?>
                    <form role="form" class="form-horizontal" action="../LC/LC_Floor.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagen</label>
                        <div class="col-lg-6">
                            <img src="" class="img-circle center-block">
                            <input type="file" id="avatar" name="img" class="file-pos center-block" size="30">
                        </div>
                    </div><!--avatar-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Título</label>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Vicente" name="title" class="form-control" value="<?php echo $row[1]; ?>" required>
                            <input type="text" value="<?php echo $row[1]; ?>" name="oldtitle" class="form-control" hidden>
                        </div>
                    </div><!--title-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Número de habitaciones</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo $row[2]; ?>" placeholder="6" name="n_room" class="form-control" required>
                        </div>
                    </div><!--n_room-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Número de baños</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo $row[4]; ?>" placeholder="6" name="n_baths" class="form-control" required>
                        </div>
                    </div><!--n_baths-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Metros cuadrados</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo $row[5]; ?>" placeholder="600" name="m2" class="form-control" required>
                        </div>
                    </div><!--m2-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Precio</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo $row[3]; ?>" placeholder="6000" name="price" class="form-control" required>
                        </div>
                    </div><!--price-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Estado del piso</label>
                        <div class="col-lg-6">
                            <input type="text" value="<?php echo $row[6]; ?>" placeholder="Como nuevo" name="floorStatus" class="form-control" required>
                        </div>
                    </div><!--floorStatus-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Tipo de piso</label>
                        <div class="col-lg-6">
                            <select name="kindOfFloor">
                                <option value="<?php echo $row[12]; ?>" selected disabled><?php echo $row[12]; ?></option>
                                <option value="duplex">Duplex</option>
                                <option value="attached">Adosado</option>
                                <option value="penhouse">Ático</option>
                            </select>
                        </div>
                    </div><!--kindOfFloor-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Tipo de calefacción</label>
                        <div class="col-lg-6">
                            <select name="heatkind">
                                <option value="<?php echo $row[7]; ?>" selected disabled><?php echo $row[7]; ?></option>
                                <option value="electrica">Electrica</option>
                                <option value="gas">Gas</option>
                                <option value="biomasa">biomasa</option>
                                <option value="geotermica">geotermica</option>
                                <option value="solar">solar</option>
                            </select>
                        </div>
                    </div><!--heatkind-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Esta amueblada</label>
                        <div class="col-lg-6">
                            <select name="furniture">
                                <option value="<?php echo $row[8]; ?>" selected disabled><?php echo $row[8]; ?></option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div><!--furniture-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Número de contacto</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo $row[10]; ?>" placeholder="6036159874" name="contact" class="form-control" required>
                        </div>
                    </div><!--contact-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Distancia del piso al colegio Montessori</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo $row[9]; ?>" placeholder="6000m2" name="dcmkm" class="form-control" required>
                        </div>
                    </div><!--dcmkm-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Estado del Piso</label>
                        <div class="col-lg-6">
                            <select name="f_status">
                                <option value="<?php echo $row[11]; ?>" selected disabled><?php echo $row[11]; ?></option>
                                <option value="sell">En venta</option>
                                <option value="rent">En renta</option>
                            </select>
                        </div>
                    </div><!--f_status-->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Opinion</label>
                        <div class="col-lg-6">
                            <textarea name="opinion" content="<?php echo $row[18]; ?>" style="width: 570px; height: 150px;"></textarea>
                        </div>
                    </div><!--opinion-->
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary btn-outline" type="submit" name="updateFloor">Guardar cambios</button>
                            <button class="btn btn-danger btn-outline-danger" type="submit" name="CancelAddfloor">Cancelar</button>
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