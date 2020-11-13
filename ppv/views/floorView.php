<?php
session_start();
include_once "include/header_ppv.php";
include "../../LC/connection.php";
global $conn;
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
?>
<div id="fh5co-features">
    <div class="container">
        <div class="row">
            <aside id="fh5co-hero" class="js-fullheight">
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                        <?php
                        $result = mysqli_query($conn, "select floor.F_status,floor.title, f_picture.url from floor inner join f_picture on floor.id = f_picture.id_floor and floor.id = $id order by floor.id");
                        while ($row = mysqli_fetch_array($result)):
                            ?>
                            <li style="background-image: url(<?php echo $row[2]; ?>);">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <span class="status"><?php if ($row[0] === "rent") echo "Renta"; else echo "venta"; ?></span>
                                                    <h1><?php echo $row[1]; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        endwhile;
                        mysqli_free_result($result);
                        ?>
                    </ul>
                </div>
            </aside>
            <?php
            $result = mysqli_query($conn, "select * from floor where id = $id ");
            while ($row = mysqli_fetch_array($result)):
            ?>
            <h1><?php echo $row[1]; ?></h1>
            <span class="status"><?php if ($row[2] === "rent") echo "Renta"; else echo "venta"; ?></span>
            <span>Guardar <a href="../../LC/LC_Users.php?id=<?php echo $id?>"><i class="icon-bookmark2" style="width: 50px; height: 50px;"></i></a> </span>
            <div class="prop-details">
                <span class="price"><?php echo $row[3]; ?></span>
                <h3>Tipo de Piso: <?php echo $row[12]; ?></h3>
                <h3>Baños: <?php echo $row[4]; ?></h3>
                <h3>Habitaciones: <?php echo $row[2]; ?></h3>
                <h3>Metros cuadrados: <?php echo $row[5]; ?>m<sup>2</sup></h3>
                <h3>Estado del piso: <?php echo $row[6]; ?></h3>
                <h3>Tipo de Calefacción: <?php echo $row[7]; ?></h3>
                <h3>Esta amueblado: <?php echo $row[8] = 1 ? "Si":"No"; ?></h3>
                <h3>Tipo de Piso: <?php echo $row[12]; ?></h3>
                <h3>Contacto: <?php echo $row[10]; ?></h3>
                <h3>Distancia del piso al colegio montessori: <?php echo $row[9]; ?>km</h3>
            </div>
            <?php
            endwhile;
            mysqli_free_result($result);
            ?>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11925.510387581833!2d-0.8961228499999999!3d41.647583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ses!4v1604944112425!5m2!1ses-419!2ses" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<?php include_once "include/footer_ppv.php"; ?>
