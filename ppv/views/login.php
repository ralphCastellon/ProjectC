<?php include_once "include/header_login.php"; ?>
    <form class="login100-form validate-form" action="../LC/LC_Login.php" method="post">
					<span class="login100-form-title p-b-59">
						Log In
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
                <button class="login100-form-btn" type="submit" name="loginUser">
                    Login
                </button>
            </div>

            <a href="signup.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                Sign in
                <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
        </div>
    </form>
<?php include_once "include/header_login.php"; ?>