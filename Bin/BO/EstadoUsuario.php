<?php

require_once("../DAL/Database.class.php");

class EstadoUsuario
{    
    public function obtenerEstadoUsuario() 
    {
		$db = DatabaseLayer::getConnection("MySqlProvider");
        $resultado = $db->execute("Select * from estadousuario",array("ontuts%"));
        return $resultado;
    }
}

?>