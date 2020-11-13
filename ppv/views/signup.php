<?php include_once "include/header_login.php"; ?>
    <form class="login100-form validate-form" action="../LC/LC_Login.php" method="post">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Nombre</span>
            <input class="input100" type="text" name="name" placeholder="Name...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Apellido 1</span>
            <input class="input100" type="text" name="lastName1" placeholder="Name...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Apellido 2</span>
            <input class="input100" type="text" name="lastName2" placeholder="Name...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Username is required">
            <span class="label-input100">Alias (Nick)</span>
            <input class="input100" type="text" name="nick" placeholder="Username...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Username is required">
            <span class="label-input100">Edad</span>
            <input class="input100" type="number" name="age" placeholder="Username...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Username is required">
            <span class="label-input100">Teléfono</span>
            <input class="input100" type="number" name="phone" placeholder="Username...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <span class="label-input100">Email</span>
            <input class="input100" type="email" name="email" placeholder="Email addess...">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Contraseña</span>
            <input class="input100" type="password" name="pass" placeholder="*************">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
            <span class="label-input100">Repetir contraseña</span>
            <input class="input100" type="password" name="repeat-pass" placeholder="*************">
            <span class="focus-input100"></span>
        </div>

        <div class="flex-m w-full p-b-33">
            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Deacuerdo con los
									<a href="#" class="txt2 hov1">
										Terminos de usuario
									</a>
								</span>
                </label>
            </div>
        </div>
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" type="submit" name="signup">
                    Sign Up
                </button>
            </div>
            <a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                Sign in
                <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
        </div>
    </form>
<?php include_once "include/footer_login.php"; ?>