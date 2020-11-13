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
                                    <h2 class="heading-title">Pisos</h2>
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
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> Título</th>
                            <th><i class="fa fa-bullhorn"></i> Editar</th>
                            <th><i class="fa fa-bullhorn"></i> Eliminar</th>
                            <th><i class="fa fa-bullhorn"></i> PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $nunRows = $conn->query("SELECT * FROM floor;")->num_rows;
                        $post = 5;
                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $start = ($page > 1) ? ($page * $post - $post) : 0 ;
                        $result = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM floor LIMIT $start,$post;");
                        $pageNumber = ceil($nunRows / $post);
                        if ($nunRows > 0):
                        while ($row = mysqli_fetch_array($result)):
                    ?>
                    <tr>
                        <td><?php echo $row[1]; ?></td>
                        <td>
                            <button class="btn btn-primary btn-outline-primary" onclick="updateF(<?php echo $row[0];?>)"><i class="fa fa-pencil"></i></button>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-outline-danger" onclick="deleteF(<?php echo $row[0];?>)"><i class="fa fa-trash-o "></i></button>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-outline-danger" onclick="pdf(<?php echo $row[0];?>)"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    <?php
                        endwhile;
                        mysqli_free_result($result);
                        else:
                    ?>
                        <tr>
                            <td>No hay datos</td>
                            <td>Deseas crear un nuevo <a href="CreateFloorAdmin.php">piso</a></td>
                        </tr>
                    <?php
                        endif;
                    ?>
                    <!--Paginacion-->
                    <div class="paginacion">
                        <ul>
                            <?php if ($page==1):?>
                                <li class="disabled">&laquo;</li>
                            <?php else: ?>
                                <li><a href="?page=<?php echo $page - 1 ?>">&laquo;</a></li>
                            <?php endif;?>
                            <?php
                            for($i = 1; $i <= $pageNumber; $i++){
                                if ($page === $i) {
                                    echo "<li class='active'><a href='?page=$i'>$i</a></li>";
                                } else {
                                    echo "<li><a href='?page=$i'>$i</a></li>";
                                }
                            }
                            ?>
                            <?php if($page == $pageNumber): ?>
                                <li class="disabled">&raquo;</li>
                            <?php else: ?>
                                <li><a href="?page=<?php echo $page + 1 ?>">&raquo;</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
else:
    header('location: LC_Pdf.php');
endif;
include_once "include/footer_ppv.php";
?>