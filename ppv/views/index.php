<?php
session_start();
include_once "include/header_ppv.php";
include "../LC/connection.php";
global $conn;
if (isset($_SESSION['user'])):
?>
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url('images/img_bg_1.jpg');">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="status">Sale</span>
                                        <h1>New House in Canada, UK</h1>
                                        <h2 class="price">$4,000.00</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia
                                            and Consonantia, there live the blind texts.</p>
                                        <p class="details">
                                            <span>2000 ft sq</span>
                                            <span>4 Bedrooms</span>
                                            <span>3 Bathrooms</span>
                                            <span>2 Garage</span>
                                        </p>
                                        <p><a class="btn btn-primary btn-lg" href="#">Ver Piso</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="status">Rent</span>
                                        <h1>New House in Canada, UK</h1>
                                        <h2 class="price">$2000/mos</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia
                                            and Consonantia, there live the blind texts.</p>
                                        <p class="details">
                                            <span>2000 ft sq</span>
                                            <span>4 Bedrooms</span>
                                            <span>3 Bathrooms</span>
                                            <span>2 Garage</span>
                                        </p>
                                        <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="status">Sale</span>
                                        <h1>New House in Canada, UK</h1>
                                        <h2 class="price">$4,000.00</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia
                                            and Consonantia, there live the blind texts.</p>
                                        <p class="details">
                                            <span>2000 ft sq</span>
                                            <span>4 Bedrooms</span>
                                            <span>3 Bathrooms</span>
                                            <span>2 Garage</span>
                                        </p>
                                        <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-search-map">
        <div class="search-property">
            <div class="s-holder">
                <h2>Filtra tus Pisos</h2>
                <div class="row">
                    <form>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Estado de propiedad:</label>
                                <select class="cs-select cs-skin-border" name="status">
                                    <option value="rent">Rentar</option>
                                    <option value="sell">Comprar</option>
                                </select>
                            </section>
                        </div><!--status-->
                        <div class="col-xxs-12 col-xs-12">
                            <div class="input-field">
                                <label for="from">Ubicación (ciudad):</label>
                                <input type="text" name="location" class="form-control" id="from-place" placeholder="Zaragoza"/>
                            </div>
                        </div><!--location-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Price:</label>
                                <div class="wide">
                                    <select class="cs-select cs-select-half cs-skin-border input-half">
                                        <option value="" disabled selected>Desde</option>
                                        <option value="1">1000</option>
                                        <option value="2">1500</option>
                                        <option value="2">2000</option>
                                    </select>
                                    <select class="cs-select cs-select-half cs-skin-border input-half">
                                        <option value="" disabled selected>Hasta</option>
                                        <option value="1">80000</option>
                                        <option value="2">10564</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--price-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Habitaciones:</label>
                                <div class="w-full">
                                    <select class="cs-select cs-skin-border">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--n_room-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Baños:</label>
                                <div class="w-full">
                                    <select class="cs-select cs-skin-border">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--n_baths-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Tipo de calefacción:</label>
                                <select class="cs-select cs-skin-border" name="heat">
                                    <option value="electrica">Electrica</option>
                                    <option value="gas">Gas</option>
                                </select>
                            </section>
                        </div><!--heat-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Parking:</label>
                                <div class="w-full">
                                    <select class="cs-select cs-skin-border" name="parking">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--Parking-->
                        <div class="col-xxs-12 col-xs-12 text-center">
                            <button type="submit" name="search" class="btn btn-primary btn-lg">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map" style="background-image: url(images/cover_bg_1.jpg);">
        </div>
    </div>

    <div id="fh5co-popular-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Popular Properties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores,
                        perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <a href="#" class="fh5co-property" style="background-image: url(images/property-1.jpg);">
                        <span class="status">Sale</span>
                        <div class="prop-details">
                            <span class="price">$3,000</span>
                            <h3>Properties Near in Beach, USA California</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="fh5co-property" style="background-image: url(images/property-2.jpg);">
                        <span class="status">Rent</span>
                        <div class="prop-details">
                            <span class="price">$200/mos</span>
                            <h3>Modern House at NZ</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="fh5co-property" style="background-image: url(images/property-3.jpg);">
                        <span class="status">Sale</span>
                        <div class="prop-details">
                            <span class="price">$3,000</span>
                            <h3>Bonggalo House</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Newest Properties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores,
                        perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-1.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq
                                <li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Properties Near in Beach</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis
                                maiores.</p>
                            <span class="address"><i
                                        class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-2.jpg);">
                            <span class="status">Rent</span>
                            <ul class="list-details">
                                <li>2000 ft sq
                                <li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Modern House at NZ</h3>
                            <span class="price">$200/mos</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis
                                maiores.</p>
                            <span class="address"><i
                                        class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-3.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq
                                <li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Bonggalo House</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis
                                maiores.</p>
                            <span class="address"><i
                                        class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-4.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq
                                <li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Properties at Alaska</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis
                                maiores.</p>
                            <span class="address"><i
                                        class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-5.jpg);">
                            <span class="status">Rent</span>
                            <ul class="list-details">
                                <li>2000 ft sq
                                <li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Modern Properties</h3>
                            <span class="price">$200/mos</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis
                                maiores.</p>
                            <span class="address"><i
                                        class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-6.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq
                                <li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>House at the Top of Mountain</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis
                                maiores.</p>
                            <span class="address"><i
                                        class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php elseif (isset($_SESSION['admin'])): ?>
    <div id="fh5co-popular-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3><?php echo $_SESSION['admin'];?></h3>
                    <h5>Administrador</h5>
                    <p>Hola de nuevo <?php echo $_SESSION['admin'];?>, es un placer tener con nosostros</p>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <?php
                $result = mysqli_query($conn, "select * from showNoAuthFloor");
                while ($row = mysqli_fetch_array($result)):
                ?>
                <li style="background-image: url(<?php echo $row[3]; ?>);">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="status"><?php if ($row[2] === "rent") echo "Renta"; else echo "venta"; ?></span>
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

    <div id="fh5co-search-map">
        <div class="search-property">
            <div class="s-holder">
                <h2>Filtra tus Pisos</h2>
                <div class="row">
                    <form>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Estado de propiedad:</label>
                                <select class="cs-select cs-skin-border" name="status">
                                    <option value="rent">Rentar</option>
                                    <option value="sell">Comprar</option>
                                </select>
                            </section>
                        </div><!--status-->
                        <div class="col-xxs-12 col-xs-12">
                            <div class="input-field">
                                <label for="from">Ubicación (ciudad):</label>
                                <input type="text" name="location" class="form-control" id="from-place" placeholder="Zaragoza"/>
                            </div>
                        </div><!--location-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Price:</label>
                                <div class="wide">
                                    <select class="cs-select cs-select-half cs-skin-border input-half">
                                        <option value="" disabled selected>Desde</option>
                                        <option value="1">1000</option>
                                        <option value="2">1500</option>
                                        <option value="2">2000</option>
                                    </select>
                                    <select class="cs-select cs-select-half cs-skin-border input-half">
                                        <option value="" disabled selected>Hasta</option>
                                        <option value="1">80000</option>
                                        <option value="2">10564</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--price-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Habitaciones:</label>
                                <div class="w-full">
                                    <select class="cs-select cs-skin-border">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--n_room-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Baños:</label>
                                <div class="w-full">
                                    <select class="cs-select cs-skin-border">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--n_baths-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Tipo de calefacción:</label>
                                <select class="cs-select cs-skin-border" name="heat">
                                    <option value="electrica">Electrica</option>
                                    <option value="gas">Gas</option>
                                </select>
                            </section>
                        </div><!--heat-->
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Parking:</label>
                                <div class="w-full">
                                    <select class="cs-select cs-skin-border" name="parking">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </section>
                        </div><!--Parking-->
                        <div class="col-xxs-12 col-xs-12 text-center">
                            <button type="submit" name="search" class="btn btn-primary btn-lg">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map" style="background-image: url(images/cover_bg_1.jpg);">
        </div>
    </div>

    <div id="fh5co-popular-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Pisos populares</h3>
                    <p>Los pisos más seguidos.</p>
                </div>
            </div>
            <div class="row">
                <?php
                $result = mysqli_query($conn, "select * from showNoAuthFloor");
                while ($row = mysqli_fetch_array($result)):
                    ?>
                    <div class="col-md-4 animate-box">
                        <a href="floorView.php?id=<?php echo $row[0]; ?>" class="fh5co-property" style="background-image: url(<?php echo $row[3]; ?>);">
                            <span class="status"><?php if ($row[2] === "rent") echo "Renta"; else echo "venta"; ?></span>
                            <div class="prop-details">
                                <h3><?php echo $row[1]; ?></h3>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                mysqli_free_result($result);
                ?>
            </div>
        </div>
    </div>

    <div id="fh5co-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Pisos Nuevos</h3>
                    <p>Todos nuestros nuevos pisos.</p>
                </div>
            </div>
            <div class="row">
                <?php
                $result = mysqli_query($conn, "select * from showNoAuthFloor");
                while ($row = mysqli_fetch_array($result)):
                ?>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(<?php echo $row[3]; ?>);">
                            <span class="status"><?php if ($row[2] === "rent") echo "Renta"; else echo "venta"; ?></span>
                        </a>
                        <div class="property-details">
                            <h3><?php echo $row[1]; ?></h3>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                mysqli_free_result($result);
                ?>
            </div>
        </div>
    </div>
<?php
endif;
include_once "include/footer_ppv.php";
?>

