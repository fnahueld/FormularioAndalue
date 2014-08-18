<?php
	class funciones{

		public function verificaSesion($sesion)
		{
			
			if(!$sesion){
				header('location:index.php');
			}

		}
		public function getNav($tipoUsuario)
		{	
				$admin = "<ul>
							<li><a href='?url=menu'>Inicio</a></li>
							<li><a href='?url=gestionUsuarios'>Gestión de usuarios</a></li>
							<li><a href='?url=item1'>Formularios</a></li>
							<li><a href='#'>Listar formularios</a></li>
						</ul>";
				$cliente = "
						<ul>
							<li><a href='#'>Formularios</a></li>
						</ul>";
				$moderador = "
						<ul>
							<li><a href='#'>Listar formularios</a></li>
						</ul>";

			switch($tipoUsuario){
				case 1 : echo $admin;
					break;
				case 2 : echo $cliente;
					break;
				case 3 : echo $moderador;
					break;
			}

		}

		public function getInidicaciones($tipoUsuario)
		{
				$admin = "		
				";
				$cliente = "
					Para llenar el siguiente formulario usted deberá contar con el Certificado de Informaciones Previas (CIP), <br>
					el cuál se solicita en la municipalidad donde se encuentra ubicado el inmueble. <br>	
					<br>			
					El siguiente formulario no aplica para las siguientes actividades:<br>			
					<br>
					a) Reactores y establecimientos nucleares e instalaciones relacionadas.<br>				
					b) Reparación o recuperación de áreas que contengan contaminantes.<br>				
					c) Proyectos de desarrollo, cultivo o explotación, en las áreas mineras, agrícolas, forestales e hidrobiológicas <br>
					que utilicen organismos genéticamente modificados con fines de producción y en áreas no confinadas.<br> 				
					d) Cotos de Caza.<br>				
					e) Defensa o alteración de un cuerpo o curso de aguas continentales.<br>				
					f) Ductos mineros.<br>				
				";



				$moderador = "";
				switch(2){
					case 1 : echo $admin;	
							break;
					case 2 : echo $cliente;
							break;
					case 3 : echo $moderado;
							break;
				}
		}
		public function getItems()
		{
			echo "<ul>
					<li><a href='#'>Item I</a></li>
					<li class='li-disable'><a href='#'>Item II</a></li>
					<li class='li-disable'><a href='#'>Item III</a></li>
					<li class='li-disable'><a href='#'>Item IV</a></li>
				 </ul>";
		}

	}