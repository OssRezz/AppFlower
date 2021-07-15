<?php

require_once('../../conexion.php');

class Operarios extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function ingresarOperarios($Codigo, $Nombre)
    {
        $statement = $this->db->prepare("INSERT INTO tbl_operarios(id_operario,nombre) VALUES (:Codigo,:Nombre)");
        $statement->bindParam(':Codigo', $Codigo);
        $statement->bindParam(':Nombre', $Nombre);
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Lista con el total de los Operarios
    public function contadorOperarios()
    {
        $listOperario = null;
        $statement = $this->db->prepare("SELECT count(id_operario) as 'codigo' FROM `tbl_operarios`;");
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listOperario[] = $consulta;
        }
        return $listOperario;
    }

    //Lista para ponerle el inicio de la paginación y el limite 
    public function listaOperariosLimit($paginationStart, $limit)
    {
        $listOperario = null;
        $statement = $this->db->prepare("SELECT @contador:=@contador+1 contador, O.* FROM tbl_operarios O, (SELECT @contador:=0) r ORDER by nombre desc LIMIT $paginationStart, $limit");
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listOperario[] = $consulta;
        }
        return $listOperario;
    }

    public function listarOperarioById($codigo)
    {
        $listOperario = null;
        $statement = $this->db->prepare("SELECT * FROM `tbl_operarios` Where id_operario LIKE '%' :codigo '%'");
        $statement->bindParam(':codigo', $codigo);
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listOperario[] = $consulta;
        }
        return $listOperario;
    }

    public function listarOperarioByNombre($nombre)
    {
        $listOperario = null;
        $statement = $this->db->prepare("SELECT * FROM `tbl_operarios` WHERE nombre LIKE '%' :nombre '%'");
        $statement->bindParam(':nombre', $nombre);
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listOperario[] = $consulta;
        }
        return $listOperario;
    }
}


?>