<?php
@session_start(); 
if(isset($_POST['RegistrarVacante'])){
	include("../../models/Vacantes.php");
	$Vacante = new Vacante();
	$vacante = $Vacante->add_vacante();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require("../head.php") ?>
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
				<div class="panel-heading" align="center"><h3>Publicar Nueva Oferta</h3></div>
  				<div class="panel-body">
  					<div class="row">
  					<div class="col-lg-12">
						<form method="POST">
							<div class="form-group">
								<label for="EmailAddres">Vacante</label>
								<input type="text" class="form-control" name="vacante" placeholder="Nombre">
							</div>
							<div class="form-group">
								<label for="">Puesto</label>
								<input type="text" class="form-control" name="puesto">
							</div>
							<div class="form-group">
								<label for="">Experiencia</label>
								<input type="text" class="form-control" name="experiencia">
							</div>
							<div class="form-group">
								<label for="">Numero Experiencia</label>
								<select name="numero_experiencia" class="form-control">
									<option value="">-- Seleccione Tiempo --</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Cantidad Experiencia</label>
								<select name="cantidad_experiencia" class="form-control">
									<option value="">-- Seleccione Cantidad --</option>
									<option value="semanas">Semanas</option>
									<option value="meses">Meses</option>
									<option value="anos">Años</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Horarios</label>
								<input type="date" class="form-control" name="horarios">
							</div>
							<div class="form-group">
								<label for="">Tipo de Contrato</label>
								<select name="tipo_contrato" id="" class="form-control">
									<option value="">-- Seleccione Contrato --</option>
									<option value="bimestral">Bimestral</option>
									<option value="semestral">Semestral</option>
									<option value="anual">Anual</option>
									<option value="indefinido">Indefinido</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Turno</label>
								<select name="turno" id="" class="form-control">
									<option value="">-- Seleccione Turno --</option>
									<option value="matutino">MATUTINO</option>
									<option value="vespertino">VESPERTINO</option>
									<option value="mixto">MIXTO</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Sexo</label>
								<select name="sexo" id="" class="form-control">
									<option value="">-- Seleccione Sexo --</option>
									<option value="masculino">MASCULINO</option>
									<option value="femenino">FEMENINO</option>
									<option value="indefinido">INDEFINIDO</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Edad Minima</label>
								<input type="number" class="form-control" name="edad_minima">
							</div>
							<div class="form-group">
								<label for="">Edad Maxima</label>
								<input type="number" class="form-control" name="edad_maxima">
							</div>
							<div class="form-group">
								<label for="">Sueldo</label>
								<input type="number" class="form-control" name="sueldo">
							</div>
							<div class="form-group">
								<label for="">Descripcion</label>
								<textarea name="descripcion" class="form-control" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group">
								<label for="">Prestaciones</label>
								<textarea name="prestaciones" class="form-control" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group">
								<label for="">Sector Poblacion</label>
								<select name="sector_poblacion" class="form-control">
									<option value="">-- Seleccione Sector --</option>
									<option value="estudiantes">ESTUDIANTES</option>
									<option value="ingenieros">INGENIEROS</option>
									<option value="licenciados">LICENCIADOS</option>
									<option value="general">GENERAL</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Cambio de Domicilio</label>
								<select name="cambio_domicilio" id="" class="form-control">
									<option value="">-- Seleccione Opcion --</option>
									<option value="si">SI</option>
									<option value="no">NO</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Disponibilidad Para Viajar</label>
								<select name="disponibilidad_viajar" class="form-control">
									<option value="">-- Seleccione Opcion --</option>
									<option value="si">SI</option>
									<option value="no">NO</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Numero De Vacantes</label>
								<input type="number" class="form-control" name="num_vacantes">
							</div>
							<div class="form-group">
								<label for="">Nivel Academico</label>
								<input type="number" class="form-control" name="nivel_academico">
							</div>
							<div class="form-group">
								<label for="">Direccion</label>
								<input type="text" name="direccion" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Ciudad</label>
								<input type="text" class="form-control" name="ciudad">
							</div>
							<div class="form-group">
								<label for="">Estado</label>
								<input type="text" class="form-control" name="estado">
							</div>
							<div class="form-group">
								<label for="">Idiomas</label>
								<input type="text" class="form-control" name="idiomas">
							</div>
							<div class="form-group">
								<label for="">Porcentaje Idiomas</label>
								<input type="text" class="form-control" name="porcentaje">
							</div>
							<button type="submit" name="RegistrarVacante" class="btn btn-primary">Publicar Vacante</button>
						</form>
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
<?php require("../panelRight.php"); ?>
</body>


</html>