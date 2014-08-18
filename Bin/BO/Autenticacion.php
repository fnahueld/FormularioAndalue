<?php
require_once("../DAL/Database.class.php");
require_once("../BO/Usuario.php");
require_once("../BO/IntentoSesion.php");
session_start();
class Autenticacion
{    
    public function autenticar($usuario, $contrasena) 
    {
		$miusuario = new Usuario();
		
		//Verifica existencia del usuario segun el mail ingresado
		$resultado = $miusuario->obtenerUsuarioPorCorreo($usuario);
		
		//Si el mail existe
        if(count($resultado)>0)
        {
        	//Verifica la igualdad de la contraseña de dicho usuario
        	$resultado = $miusuario->obtenerContrasenaPorCorreoYContrasena($usuario, $contrasena);
        	
        	//Si la igualdad existe
        	if(count($resultado)>0)
        	{
        		//Verifica el estado del usuario: 1 Si es activo, 2 Si esta bloqueado
        		foreach($resultado as $f)
				{
	        		if($f['estadousuario_id'] == 1)
	        		{
	        			//Se inician las variables de session correspondientes
	        			$_SESSION['idusuario'] = $f['id'];
						$_SESSION['correo'] = $f['correo'];
						$_SESSION['perfil'] = $f['perfil_id'];
						$_SESSION['estado'] = $f['estadousuario_id'];
						$_SESSION['nombre'] = $f['nombre'];
						$_SESSION['primerapellido'] = $f['primerapellido'];
						$_SESSION['segundoapellido'] = $f['segundoapellido'];
						
						//Se reestablecen los intentos de sesion
						$misession = new IntentoSesion();
						$misession->RestableceIntentoSesion($usuario);
						
						$resultado = array(   
	        					0=>"Usuario Autenticado",  
	        					1=>"Bienvenido",  
	        					2=>$_SESSION['nombre'],  
	        					3=>$_SESSION['primerapellido']  
						);
						
						return $resultado;
	       
	        		}
	        		else
	        		{
	        			//Se envia el mensaje de que el usuario esta bloqueado y se indica
	        			//el procedimiento a seguir para restablecer la cuenta
	        			$resultado = array(   
	        					0=>"Usuario Bloqueado",  
	        					1=>"Para reestablecer su cuenta",  
	        					2=>"un mail será enviado a la direccion",  
	        					3=>$usuario  
						);
						
						return $resultado;
	        		}
        		}
        	}
        	//Si la igualdad no existe
        	else
        	{	
				//Caso contraseña incorrecta
				//Obtiene el numero de intentos de sesion
				//Si es mayor a 1, bloquea la cuenta e incrementa el numero de intentos
				//dejandolo el 3
				$misession = new IntentoSesion();
				$resultado = $misession->obtieneIntentoSesionPorUsuario($usuario);
				foreach($resultado as $f)
				{
					if($f['numero'] > 1)
					{
						//Bloquea el usuario
						$miusuario->bloqueaUsuarioPorCorreo($usuario);
						
						//Incrementa el intento 1 dejandolo en 3 intentos fallidos
						$misession->incrementaIntentoSesion($usuario);
						
						//Usuario bloqueado
						$resultado = array(
							0=>"Autenticacion fallida",  
	        				1=>"Su cuenta ha sido bloqueada",  
	        				2=>"Para desbloquear su cuenta",  
	        				3=>"Utilice el mecanismo de recuperacion"
	        			);						
						
					}
					//Incrementa en 1 el numero de intento se session
					else
					{
						$misession->incrementaIntentoSesion($usuario);
						
						//Contraseña invalida
						$resultado = array(   
	        				0=>"Autenticacion fallida",  
	        				1=>"La contraseña es incorrecta",  
	        				2=>"para el usuario",  
	        				3=>$usuario  
						);						
					}
						
				}
        	}
        }
        //Si el usuario no existe
        else
        {
        	$resultado = array(   
	        	0=>"Autenticacion fallida",  
	        	1=>"Segun nuestros registros",  
	        	2=>$usuario,  
	        	3=>"No existe"  
			);			
			return $resultado;

        }
        return $resultado;
    }
    
}