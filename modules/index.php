<?php
@session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require("head.php"); ?>
<body>
<?php require("menuInicio.php"); ?>
<?php 
    if($_SESSION['perfil'] == "usuario"){
        require_once('menuUsuario.php');
    }
    if($_SESSION['perfil'] == "empresa"){
        require_once('menuEmpresa.php');
    } ?>
<div class="col-xs-6 col-md-7" style=": 1px solid black;">
			<div class="panel panel-default">
				<div class="panel-heading" align="center"><h3>Publicar Nueva Oferta</h3></div>
  				<h1>Bienvenido <?php echo $_SESSION['perfil']; ?></h1>
			</div>
		</div>
<?php require("panelRight.php"); ?>
</body>


</html>