<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
</head>
<body background="img/logo.jpg">
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="background-color: white;">
				<h1 class="text-center">Registro de Usuario</h1>
				<hr>
				<form id="frmRegistro" method="POST" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
					<span class="btn btn-info form-control">
						<span class="far fa-user"></span> Nombre personal
						<input type="text" name="nombre" id="nombre" class="form-control" required="">
					</span>
					<br>
					<br>
					<span class="btn btn-info form-control">
						<span class="far fa-calendar-alt"></span> Fecha de nacimiento
						<input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="" readonly="">
					</span>
					<br>
					<br>
					<span class="btn btn-info form-control">
						<span class="fas fa-at"></span> E-mail o correo
						<input type="email" name="correo" id="correo" class="form-control" required="">
					</span>
					<br><br>
					<span class="btn btn-info form-control">
						<span class="far fa-user-circle"></span> Nombre de Usuario
						<input type="text" name="usuario" id="usuario" class="form-control" required="" autocomplete="off">
					</span>
					<br><br>
					<span class="btn btn-info form-control">
						<span class="fas fa-key"></span>Password o contraeña
						<input type="password" name="password" id="password" class="form-control" required="" autocomplete="off">
					</span>
					<br><br>
					<div class="row">
						<div class="col-sm-6 text-left">
							<button class="btn btn-primary">
								<span class="fas fa-user-plus"></span> Registrar
							</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="index.php" class="btn btn-success">
								<span class="fas fa-sign-in-alt"></span> Login
							</a>
						</div>
					</div>
				</form>
				<hr>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	<script src="librerias/js/jquery-3.5.1.min.js"></script>
	<script src="librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
	<script src="librerias/sweetalert.min.js"></script>

	<script type="text/javascript">


		$(function(){
			var fechaA = new Date();
			var yyyy = fechaA.getFullYear();

			$("#fechaNacimiento").datepicker({

				changeMonth: true,
				changeYear: true,
				yearRange: '1990:' + yyyy,
				dateFormat: "dd-mm-yy"
			});
		});
		

		function agregarUsuarioNuevo() {
			$.ajax({
				method: "POST",
				data: $('#frmRegistro').serialize(),
				url: "procesos/usuario/registro/agregarUsuario.php",
				success:function(respuesta){
					console.log(respuesta);
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						swal(":(", "FALLO AL AGREGAR", "error");
					}else if (respuesta == 2) {
						swal("NOMBRE DE USUARIO YA EXISTE, POR FAVOR, ESCRIBE OTRO!!!");
					}else {
						$('#frmRegistro')[0].reset();
						swal(":D", "Agregado con exito", "success");
					}
				}
			});

			return false;
		}
	</script>
</body>
</html>
