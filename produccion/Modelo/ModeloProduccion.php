<?php

require_once('../../conexion.php');

class Produccion extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function listarLaborProduccion()
    {
        $listaLabor = null;
        $statement = $this->db->prepare("SELECT * FROM `labor_produccion`;");
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listaLabor[] = $consulta;
        }
        return $listaLabor;
    }

}


?>
