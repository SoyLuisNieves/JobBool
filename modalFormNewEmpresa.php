<div class="modal fade" id="myModalRegistrarEmpresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Registro Empresa</h4>
			</div>
			<div class="modal-body">
				<form method="POST">
					<div class="form-group">
						<label for="EmailAddres">Empresa</label>
						<input type="text" class="form-control" name="empresa" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="">Razon Social</label>
						<input type="text" class="form-control" name="razon_social">
					</div>
					<div class="form-group">
						<label for="">RFC</label>
						<input type="text" class="form-control" name="rfc">
					</div>
					<div class="form-group">
						<label for="">Direccion</label>
						<input type="date" class="form-control" name="direccion">
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
						<label for="">CP</label>
						<input type="date" class="form-control" name="cp">
					</div>
					<div class="form-group">
						<label for="">Actividades</label>
						<input type="date" class="form-control" name="actividades">
					</div>
					<div class="form-group">
						<label for="">Giro</label>
						<input type="date" class="form-control" name="giro">
					</div>
					<div class="form-group">
						<label for="">Nombre de Contacto</label>
						<input type="date" class="form-control" name="nombre_contacto">
					</div>
					<div class="form-group">
						<label for="">Telefono</label>
						<input type="date" class="form-control" name="telefono">
					</div>
					<div class="form-group">
						<label for="">Exterior</label>
						<input type="date" class="form-control" name="exterior">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="date" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="">Descripcion Empresa</label>
						<textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label for="">Sitio Web</label>
						<input type="date" class="form-control" name="web">
					</div>
					<div class="form-group">
						<label for="">Licencia</label>
						<input type="date" class="form-control" name="licencia">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<input type="hidden" name="perfil" value="empresa">
					<button type="submit" name="RegistrarEmpresa" class="btn btn-primary">Registrarse</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
			</div>
		</div>