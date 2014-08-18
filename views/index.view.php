<article id="inicio">
			<div id="login">
				<form action="controllers/login.ctl.php" method="POST">
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="text" name="usuario" id="txtUser" class="form-control" placeholder="tucorreo@dominio.cl" onfocus="castLoginBorraError()">
						<p id="txtErrorUser" style="display:none; color:red; font-weight:bold;"></p>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="txtPass" class="form-control" placeholder="******" onfocus="castLoginBorraError()">
						<p id="txtErrorPass" style="display:none; color:red; font-weight:bold;"></p>
					</div>
					<div class="form-group">
						<input type="button" value="Ingresar" class="btn" onclick="castLogin()">
					</div>

				</form>
			</div>
			<div id="mensajeModalPopup">
			</div>
			
</article>