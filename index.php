<?php 
error_reporting("0");
if(isset($_POST["RegistrarUsuario"])){
	include("models/Users.php");
	$datos_usuario = $_POST["RegistrarUsuario"];
	$Usuario = new Usuario();
	$usuario = $Usuario->add_usuario();
	$usuario = $Usuario->add_perfil($datos_usuario["nombre"],$datos_usuario["email"],$datos_usuario["password"], $datos_usuario["perfil"]);
}
if(isset($_POST["RegistrarEmpresa"])){
	include("models/Empresas.php");
	$datos_empresa = $_POST["RegistrarEmpresa"];
	$Empresa = new Empresa();
	$empresa = $Empresa->add_empresa();
	$empresas = $Empresa->add_perfil($datos_empresa["empresa"],$datos_empresa["email"],$datos_empresa["password"],$datos_empresa["perfil"]);
}

 ?>
<!DOCTYPE html>
<?php require("head.php"); ?>
<body>
	<!-- Inicio NavBar -->
	<nav class="navbar navbar-default" style="background-color: #333;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<img src="assets/images/logo.png" style="width: 50px; height: 50px;border-radius: 50%;">
				<a href="#" class="navbar-brand" style="color: white;">JobBool</a>
			</div>

			<?php require("menuInicio.php"); ?>
		</div>
	</nav>
	<!-- Fin NavBar -->
	<?php require("panelLeft.php"); ?>
		<!-- Inicio Vacantes -->
		<div class="col-xs-6 col-md-7" style=": 1px solid black;">
			<div class="panel panel-default">
  				<div class="panel-body">
  					<div class="row">
  						<div class="col-lg-3"><span><a href="">Programador de IA</a></span></div>
  						<div class="col-lg-3"><span><a href="">Queretaro, Queretaro</a></span></div>
  						<div class="col-lg-3"><span><a href="">Vacantes: 128</a></span></div>
  						<div class="col-lg-3"><span><a href="">Fecha: 23/01/2017</a></span></div>
  					</div>
  					<hr>
  					<div class="row">
  						<div class="col-lg-12">
  							<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem soluta consequuntur mollitia provident nulla ducimus. Sit quaerat voluptates sunt at rerum quis, deleniti sequi, est architecto nulla repellendus aliquid in!</div>
  							<div>Illum totam velit qui nobis reprehenderit? Iusto aliquam, facere non, aspernatur veritatis voluptatibus quas laboriosam nisi pariatur quidem, obcaecati assumenda fugiat dolore ipsam rem! In molestias quasi iure necessitatibus deserunt.</div>
  						</div>
  					</div>
  					<div class="row">
  						<div align="right" class="col-lg-12">
  							<button class="btn btn-primary">Ver Vacante</button>
  						</div>
  					</div>
 				</div>
			</div>
		</div>
		<!-- Fin Vacantes -->

		<?php require("panelRight.php"); ?>

		<!-- Inicia Formulario Nuevo Usuario -->
		<?php require("modalFormNewUser.php"); ?>
		<?php require("modalFormNewEmpresa.php"); ?>
		<!-- Inicia Formulario Nuevo Usuario -->

		<!-- Inicio Login -->
		<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="login/login.php">
					<div class="form-group">
						<label for="EmailAddres">Email</label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<button type="submit" name="login" class="btn btn-primary">Registrarse</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
			</div>
		</div>veronica salas
		<!-- Fin Login -->

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/bootstrap3-typeahead.min.js"></script>

		<script>
			$(document).ready(function() {
				$('#puesto').typeahead({
					source: function(query, result) {
						$.ajax({
							url:"fetch.php",
							method:"POST",
							data:{query:query},
							dataType:"json",
							success:function(data) {
								result($.map(data, function(item){
									return item;
								}));
							}
						})
					}
				});
			});
		</script>
</body>
</html>

<!--<h3 align="center">Iniciar Sesion</h3>	
			<form action="" >
				<div class="form-group">
					<label for="InputEmail">Correo Electronico</label>
					<input type="email" class="form-control" id="InputEmail" placeholder="Email">
				</div>
				<div class="form group">
					<label for="InputPassword">Password</label>
					<input type="password" class="form-control" id="InputPassword" placeholder="Contraseña">
				</div>
				<br>
				<button class="btn btn-success btn-size-lg">Entrar</button>
			</form>
			<hr>
			<h3 align="center">Registrate</h3>
			<form action="">
				<div class="form-group">
					<label for="CorreoElectronico">Correo Electronico</label>
					<input type="email" class="form-control" id="CorreoElectronico">
				</div>
				<div class="form-group">
					<label for="Password">Contraseña</label>
					<input type="password" class="form-control">
				</div>
				<br>
				<button class="btn btn-success" style="width: 100%;">Registrarse</button>
			</form>-->