<footer>
    <div id="footer">
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-6">
                    <h3 class="section-title">Acerca de PPV</h3>
                    <p>Esta es una pagina para comprar o vender pisos.</p>
                </div>

                <div class="col-md-6 col-md-push-1">
                    <h3 class="section-title">Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="floor.html">Pisos</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                    <p>Copyright Ralph Laguna. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>


</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>


<!-- Main JS -->
<script src="js/main.js"></script>

<!--Chat JS-->
<script>
    function pdf (e){
        let form = document.createElement('form');
        form.method = 'post';
        form.action = '../LC/LC_Pdf.php';
        document.body.appendChild(form);
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'id';
        input.value = e;
        form.appendChild(input);
        form.submit();
    }
    function deleteF (e){
        let form = document.createElement('form');
        form.method = 'post';
        form.action = '../LC/LC_Floor.php';
        document.body.appendChild(form);
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'id';
        input.value = e;
        form.appendChild(input);
        form.submit();
    }
    function updateF (e){
        let form = document.createElement('form');
        form.method = 'post';
        form.action = 'UpdateFloorAdmin.php';
        document.body.appendChild(form);
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'id';
        input.value = e;
        form.appendChild(input);
        form.submit();
    }
    function deleteU (e){
        let form = document.createElement('form');
        form.method = 'post';
        form.action = '../LC/LC_Users.php';
        document.body.appendChild(form);
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'id';
        input.value = e;
        form.appendChild(input);
        form.submit();
    }
    function updateU (e){
        let form = document.createElement('form');
        form.method = 'post';
        form.action = 'UpdateUserAdmin.php';
        document.body.appendChild(form);
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'id';
        input.value = e;
        form.appendChild(input);
        form.submit();
    }
</script>

</body>
</html>
