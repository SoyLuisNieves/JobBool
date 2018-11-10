<div class="modal fade" id="myModalRegistrarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				<form method="POST">
					<div class="form-group">
						<label for="EmailAddres">Nombre</label>
						<input type="text" class="form-control" name="nombre" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="">Apellido Paterno</label>
						<input type="text" class="form-control" name="ape_pat">
					</div>
					<div class="form-group">
						<label for="">Apellido Materno</label>
						<input type="text" class="form-control" name="ape_mat">
					</div>
					<div class="form-group">
						<label for="">Fecha de Nacimiento</label>
						<input type="date" class="form-control" name="fecha_nacimiento">
					</div>
					<div class="form-group">
						<label for="">Sexo</label>
						<select name="sexo" id="" class="form-control">
							<option value="">-- Seleccione Sexo --</option>
							<option value="1">HOMBRE</option>
							<option value="0">MUJER</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Estado Civil</label>
						<select name="estado_civil" id="" class="form-control">
							<option value="">-- Seleccione Sexo --</option>
							<option value="1">SOLTERO</option>
							<option value="0">CASADO</option>
							<option value="0">DIVORCIADO</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Nacionalidad</label>
						<input type="text" class="form-control" name="nacionalidad">
					</div>
					<h3 align="center"><span class="label label-primary">Comunicacion</span></h3>
					<div class="form-group">
						<label for="">Telefono</label>
						<input type="date" class="form-control" name="telefono">
					</div>
					<div class="form-group">
						<label for="">Celular</label>
						<input type="date" class="form-control" name="celular">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="date" class="form-control" name="email">
					</div>
					<h3 align="center"><span class="label label-primary">Domicilio</span></h3>
					<div class="form-group">
						<label for="">Calle</label>
						<input type="date" class="form-control" name="calle">
					</div>
					<div class="form-group">
						<label for="">Colonia</label>
						<input type="date" class="form-control" name="colonia">
					</div>
					<div class="form-group">
						<label for="">Ciudad</label>
						<input type="date" class="form-control" name="ciudad">
					</div>
					<div class="form-group">
						<label for="">Estado</label>
						<input type="date" class="form-control" name="estado">
					</div>
					<div class="form-group">
						<label for="">Codigo Postal</label>
						<input type="date" class="form-control" name="cp">
					</div>
					<h3 align="center"><span class="label label-primary">Documentos</span></h3>
					<div class="form-group">
						<label for="">CURP</label>
						<input type="date" class="form-control" name="curp">
					</div>
					<div class="form-group">
						<label for="">NSS</label>
						<input type="date" class="form-control" name="nss">
					</div>
					<div class="form-group">
						<label for="">Pasaporte</label>
						<select name="pasaporte" id="" class="form-control">
							<option value="">-- Seleccione Sexo --</option>
							<option value="1">SI</option>
							<option value="0">NO</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Visa</label>
						<select name="visa" id="" class="form-control">
							<option value="">-- Seleccione Sexo --</option>
							<option value="1">SI</option>
							<option value="0">NO</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Licencia</label>
						<select name="licencia" id="" class="form-control">
							<option value="">-- Seleccione Sexo --</option>
							<option value="1">SI</option>
							<option value="0">NO</option>
						</select>
					</div>
					<h3 align="center"><span class="label label-primary">Otros</span></h3>
					<div class="form-group">
						<label for="">Auto Propio</label>
						<select name="auto_propio" id="" class="form-control">
							<option value="">-- Seleccione Sexo --</option>
							<option value="1">SI</option>
							<option value="0">NO</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Discapacidad</label>
						<select name="discapacidad" id="" class="form-control">
							<option value="">-- Seleccione Sexo --</option>
							<option value="1">SI</option>
							<option value="0">NO</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<input type="hidden" name="perfil" value="usuario">
					<button type="submit" name="RegistrarUsuario" class="btn btn-primary">Registrarse</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
			</div>
		</div>