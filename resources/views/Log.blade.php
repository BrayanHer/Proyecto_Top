<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wuaf - Here!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" href="././Sistema/images/favicon.ico" type="image/ico" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="./Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(./Login/images/family.jpg);">
					<span class="login100-form-title-1">
						Ingresa
					</span>
				</div>

				<form action="{{route('iniciasesion')}}" method="POST">
        {{csrf_field()}}
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text"  placeholder="Ingrese su Usuario" name="usuario" id="usuario">
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password"  placeholder="Ingrese su contraseña" name="Password" id="Password">
					</div>

						<div>
							<a href="{{route('Inicio')}}" class="txt1">
								¿Olvido su Contraseña?
							</a>
						</div>
						<div class="form-group text-right">
            <button  class="btn btn-primary"><i class="fa fa-unlock fa-lg" aria-hidden="true" id="log"></i>&nbsp; Ingresar</button>
    
            </div>
					</div>

				
				</form>

				<h6 style="color:Red;">@if(Session::has('error'))</h6>
    <div>
    <h6 style="color:Red;">
    {{Session::get('error')}}
    </h6>
    </div>
    <script>
    alert("{{Session::get('error')}}");
    </script>
    @endif
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="./Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./Login/vendor/bootstrap/js/popper.js"></script>
	<script src="./Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="./Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>