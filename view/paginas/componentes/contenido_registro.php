
			



<div class="limiter">
		<div class="container-login100" style="background-image: url('view/images/colegio-bg.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-logo">
						<i class="fa fa-address-book"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Registrar Usuario
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese Nombre">
						<input class="input100" type="text" name="nombre_registro" placeholder="Nombre">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese Apellidos">
						<input class="input100" type="text" name="apellidos_registro" placeholder="Apellidos">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate = "Ingrese Grado">
						<input class="input100" type="number" name="grado_registro" placeholder="Grado">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese Seccion">
						<input class="input100" type="text" name="seccion_registro" placeholder="Seccion">
						<span class="focus-input100" data-placeholder="&#xf207;"></span> -->
					<!-- </div> -->

					<div class="wrap-input100 validate-input" data-validate = "Ingrese Email">
						<input class="input100" type="text" name="email_registro" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese Contraseña">
						<input class="input100" type="password" name="password_registro" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<?php
				
				
				$registro = ControladorRegistro::registrarUsuario();


				if($registro == "ok") {
	
					echo "<script>
						if(window.history.replaceState) {
							window.history.replaceState(null, null, window.location.href);
						}
	
					</script>";
	
					echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
				}
	
				if($registro == "error") {
					echo "<script>
						if(window.history.replaceState) {
							window.history.replaceState(null, null, window.location.href);
						}
	
					</script>";
	
					echo '<div class="alert alert-danger">Error no se permien caracteres especiales</div>';
				}
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