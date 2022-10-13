

<div class="limiter">
		<div class="container-login100" style="background-image: url('view/images/colegio-bg.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-logo">
						<i class="fa fa-address-book"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Ingreso a Notas
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese Email">
						<input class="input100" type="text" name="email_ingreso" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese Contraseña">
						<input class="input100" type="password" name="password_ingreso" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<?php 

						$ingreso = new ControladorRegistro();
						// $ingreso -> ingresoUsuario();
						echo "<pre>";
						var_dump($ingreso -> ingresoUsuario());
						echo "</pre>";

					?>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Ingresar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="view/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="view/vendor/animsition/js/animsition.min.js"></script>
	<script src="view/vendor/bootstrap/js/popper.js"></script>
	<script src="view/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="view/vendor/select2/select2.min.js"></script>
	<script src="view/vendor/daterangepicker/moment.min.js"></script>
	<script src="view/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="view/vendor/countdowntime/countdowntime.js"></script>
	<script src="view/js/main.js"></script>
<!--===============================================================================================-->