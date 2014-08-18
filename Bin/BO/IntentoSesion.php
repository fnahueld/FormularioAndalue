<?php

require_once("../DAL/Database.class.php");

class IntentoSesion
{    
    public function obtieneIntentoSesionPorUsuario($correo) 
    {
		$db = DatabaseLayer::getConnection("MySqlProvider");
        $resultado = $db->execute("Select * from intentosesion where correo='".$correo."'",array("ontuts%"));
        return $resultado;
    }
    
    public function incrementaIntentoSesion($correo)
    {
    	$db = DatabaseLayer::getConnection("MySqlProvider");
        $resultado = $db->execute("update intentosesion set numero = numero + 1 where correo='".$correo."'",array("ontuts%"));
        return $resultado;
    }
    
    public function RestableceIntentoSesion($correo)
    {
    	$db = DatabaseLayer::getConnection("MySqlProvider");
        $resultado = $db->execute("update intentosesion set numero = 0 where correo='".$correo."'",array("ontuts%"));
        return $resultado;
    }
}

?>