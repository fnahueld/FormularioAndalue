<script>
	$(document).ready(function(){
		$('#estadoProyecto').change(function(){
		var valor = $('#estadoProyecto').val();	
		var dyn18 = $('#1-8');
		dyn18.append('<div id="1-8-x"></div>');
		var dyn18x = $('#1-8-x');
		if(valor == "1-8-1"){
			dyn18x.html("<label for='resolucionAmbienta'>Cuenta con resolución de calaficación Ambiental</label> <div class='form-group'><select class='form-control'><option value='si'>Si</option><option value='no'>No</option></select></div>");
		}
		else if(valor == "1-8-2"){
			dyn18x.html("<label for='resolucionAmbienta'>Inició trámites de Declaración o Estudio de Impacto Ambiental en el Sistema de Evaluación de Impacto Ambiental</label> <div class='form-group'><select class='form-control'><option value='si'>Si</option><option value='no'>No</option></select></div>");
		}
		else if (valor == "1-8-3"){
			dyn18x.html("<label for='resolucionAmbienta'>Cual?</label> <div class='form-group'><select class='form-control'><option value='si'>Actividad Actual</option><option value='no'>Actividad a Modificar</option></select></div>");
		}
		else{
			dyn18x.html('');
		}
		
	});
	});

</script>
<article id="item1">
	<div class="menus">
		<?php $funciones->getItems()?>
	</div>
	<div id="bodyItem1">
		<div class="form-group">
			<label for="razonSocial">Nombre o Razón Social</label>
			<input type="text" id="razonSocial" name="razonSocial" class="form-control">
		</div>
		<div class="form-group">
			<label for="direccionParticular">Dirección Particular</label>
			<input type="text" id="direccionParticular" name="direccionParticular" class="form-control">
		</div>
		<div class="form-group">
			<label for="regionNacional">Región</label>
			<select type="text" id="regionNacional" name="regionNacional" class="form-control">
				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
			</select>
		</div>
		<div class="form-group">
			<label for="provinciaNacional">Provincia</label>
			<select type="text" id="provinciaNacional" name="provinciaNacional" class="form-control">
				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
			</select>
		</div>
		<div class="form-group">
			<label for="comunaNacional">Comuna</label>
			<select type="text" id="comunaNacional" name="comunaNacional" class="form-control">
				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
			</select>
		</div>	
		<div class="form-group">
			<label for="esunaNave">Es una Nave?</label>
			<input type="text" id="esunaNave" name="esunaNave" class="form-control">
		</div>
		<div class="form-group" id="1-8">
			<label for="estadoProyecto">Estado del Proyecto</label>
			<select type="text" id="estadoProyecto" name="estadoProyecto" class="form-control">
				<option>Seleccione...</option>
				<option id="1-8-1" value="1-8-1">Actividad existente que se quiere mantener</option>
				<option id="1-8-2"value="1-8-2">Actividad nueva (proyectada)</option>
				<option id="1-8-3"value="1-8-3">Actividad existente que se quiere modificar</option>
			</select>
		</div>	
		<div class="form-group" style="float: right">
			<div class="menus">
				<ul>
					<li>Siguiente</li>
				</ul>
			</div>
		</div>
	</div>
</article>