<?php include_once "include/header_login.php"; ?>
    <form class="login100-form validate-form" action="../LC/LC_Login.php" method="post">
					<span class="login100-form-title p-b-59">
						Login Administrador
					</span>

        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Alias</span>
            <input class="input100" type="text" name="name" placeholder="Name...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Contraseña</span>
            <input class="input100" type="password" name="pass" placeholder="*************">
            <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" type="submit" name="loginAdmin">
                    Login
                </button>
            </div>
        </div>
    </form>
<?php include_once "include/footer_login.php"; ?>