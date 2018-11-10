<?php
@session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require("../head.php"); ?>
<body>
<?php require("../menuInicio.php"); ?>
<?php 
    if($_SESSION['perfil'] == "usuario"){
        require_once('../menuUsuario.php');
    }
    if($_SESSION['perfil'] == "empresa"){
        require_once('../menuEmpresa.php');
    } ?>
<div class="col-xs-6 col-md-7" style=": 1px solid black;">
			<div class="panel panel-default">
				<div class="panel-heading" align="center"><h3>Bienvenid@: <?php echo $_SESSION["nombre"] ?></h3></div>
  				
			</div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                                <h3 align="center">Ofertas Publicadas</h3>
                        </div>
                        <div class="panel-body">
                                <h2 align="center">120</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                                <h3 align="center">Personas Interesadas</h3>
                        </div>
                        <div class="panel-body">
                                <h2 align="center">450</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>          
            </div>

		</div>
<?php require("../panelRight.php"); ?>
</body>


</html>