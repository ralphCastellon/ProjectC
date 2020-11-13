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
		   						<h2 class="heading-title">Usuarios</h2>
			   				</div>
			   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
</aside>
<div id="fh5co-about">
			<div class="container">
				<div class="row">
                <?php
                    $nunRows = $conn->query("SELECT * FROM users;")->num_rows;
                    $post = 6;
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $start = ($page > 1) ? ($page * $post - $post) : 0 ;
                    $result = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM users LIMIT $start,$post;");
                    $pageNumber = ceil($nunRows / $post);
                    if ($nunRows > 0):
                    while ($row = mysqli_fetch_array($result)):
                ?>
					<div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="<?php echo $row[10];?>" alt="Free HTML5 Templates by freeHTML5.co">
							<h3><?php echo $row[1];?></h3>
							<span class="list-prop">Correo: <?php echo $row[6];?> </span>
							<button class="btn btn-primary btn-outline" onclick="updateU(<?php echo $row[0];?>)">Editar usuario</button>
							<button class="btn btn-danger btn-outline-danger" onclick="deleteU(<?php echo $row[0];?>)">Eliminar usuario</button>
						</div>
					</div>
                <?php
                    endwhile;
                    mysqli_free_result($result);
                    else:
                ?>

                       <div>
                           <span>No hay datos</span>
                           <span>Deseas crear un nuevo <a href="CreateUserAdmin.php">usuario</a></span>
                       </div>
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
				</div>
			</div>
		</div>
<?php
else:
    header('location: LC_Pdf.php');
endif;
include_once "include/footer_ppv.php";
?>
