<article id="gestionUsuarios">
	<div class="divGU" id="crearUsuarios">
	<h3>Crear Usuario</h3>
		<div class="form-group">
			<label for="nombreUsuarioNew">Nombre</label>
			<input type="text" name="nombreUsuarioNew" class="form-control">
		</div>
		<div class="form-group">
			<label for="nombreUsuarioNew">Apellido</label>
			<input type="text" name="nombreUsuarioNew" class="form-control">
		</div>
		<div class="form-group">
			<label for="nombreUsuarioNew">E-mail</label>
			<input type="text" name="nombreUsuarioNew" class="form-control">
		</div>
		<div class="form-group">
			<label for="contrasenaUsuarioNew">Password</label>
			<input type="text" name="contrasenaUsuarioNew" class="form-control">
		</div>
		<div class="form-group">
			<label for="tipoUsuarioNew">Nuevo Nombre</label>
			<select name="tipoUsuarioNew" id="tipoUsuarioNew" class="form-control">
				<option value="2">Cliente</option>
				<option value="3">Moderador</option>
				<option value="1">Administrador</option>
			</select>
		</div>
		<br>
		<div class="form-group">
			<button class="btn ">Agregar</button>
		</div>
	</div>
	<div class="divGU" id="clienteModerador">
		<h3>Cliente / Moderador</h3>
		<div class="form-group">
				<label for="nombreUsuarioNew">Cliente</label>
				<select class="form-control" name="" id="">
					<option value=""></option>
					<option value=""></option>
				</select>
		</div>
		<br>
		<div class="form-group">
				<label for="nombreUsuarioNew">Moderador</label>
				<select class="form-control" name="" id="">
					<option value=""></option>
					<option value=""></option>
				</select>
		</div>	
		<br>
		<div class="form-group">
				<button class="btn ">Asignar</button>
		</div>
	</div>
	<div class="divGU" id="actualizarUsuario">
			<h3>Actualizar Contraseña</h3>
			<div class="form-group">
				<label for="nombreUsuarioNew">Cliente</label>
				<select class="form-control" name="" id="">
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>
			<br>
			<div class="form-group">
				<label for="nombreUsuarioNew">Contraseña</label>
				<input type="text" name="nombreUsuarioNew" class="form-control">
			</div>	
			<br>
			<div class="form-group">
				<button class="btn ">Actualizar</button>
			</div>
	</div>

	<div class="divGU" id="eliminarUsuario">
		<h3>Eliminar Usuario</h3>
			<div class="form-group">
				<label for="nombreUsuarioNew">Cliente</label>
				<select class="form-control" name="" id="">
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>
			<br>
			<div class="form-group">
				<button class="btn ">Eliminar</button>
			</div>
			
	</div>
</article>