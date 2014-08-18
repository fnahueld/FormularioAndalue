<?php

require_once("../DAL/Database.class.php");

class Usuario
{    
    public function obtenerUsuarioPorCorreo($correo) 
    {
		$db = DatabaseLayer::getConnection("MySqlProvider");
        $resultado = $db->execute("Select * from usuario where correo = '".$correo."'",array("ontuts%"));
        return $resultado;
    }
    
    public function obtenerContrasenaPorCorreoYContrasena($correo, $contrasena) 
    {
		$db = DatabaseLayer::getConnection("MySqlProvider");
        $resultado = $db->execute("Select * from usuario where correo = '".$correo."' and contrasena = '".$contrasena."'",array("ontuts%"));
        return $resultado;
    }
    
    public function bloqueaUsuarioPorCorreo($correo) 
    {
		$db = DatabaseLayer::getConnection("MySqlProvider");
        $resultado = $db->execute("update usuario set estadousuario_id = 2 where correo = '".$correo."'",array("ontuts%"));
        return $resultado;
    }
}

?>