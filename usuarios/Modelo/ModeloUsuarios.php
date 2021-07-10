<?php

require_once('../../conexion.php');

class Usuarios extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarUsuario($Correo, $Nombre, $Password, $Perfil)
    {
        $statement = $this->db->prepare("INSERT INTO tbl_usuario(correo,nombre,password,perfil) VALUES (:Correo,:Nombre,:Password,:Perfil)");
        $statement->bindParam(':Correo', $Correo);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Password', $Password);
        $statement->bindParam(':Perfil', $Perfil);
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function listaUsuarios()
    {
        $listUser = null;
        $statement = $this->db->prepare("SELECT @contador:=@contador+1 contador, u.*, P.perfil as 'tipoPerfil' FROM tbl_usuario U INNER JOIN tbl_perfil AS P ON P.id_perfil=U.perfil, (SELECT @contador:=0) r ORDER by correo desc LIMIT 10;");
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listUser[] = $consulta;
        }
        return $listUser;
    }
}



?>