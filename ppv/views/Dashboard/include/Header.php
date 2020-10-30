<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="img/avatar-5.jpg" alt="person"
                                                               class="img-fluid rounded-circle">
                <h2 class="h5"><?php echo $_SESSION['user']?></h2><span>Admin</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="Ppv.php" class="brand-small text-center">
                    <strong>PP</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Principal</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="PPV.php"> <i class="icon-home"></i>Home</a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon icon-check"></i>Pisos</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="Floor.php">Pisos</a></li>
                    </ul>
                </li>
                <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon icon-user"></i>Usuarios</a>
                    <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                        <li><a href="Users.php">Control de Usuarios</a></li>
                    </ul>
                </li>
                <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon icon-user"></i>Administradores</a>
                    <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                        <li><a href="Admin.php">Control de Administradores</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
       