<?php

require_once('../../conexion.php');

class Usuarios extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarUsuario($Correo,$Nombre,$Password,$Perfil){
        $statement = $this->db->prepare("INSERT INTO tbl_usuario(correo,nombre,password,perfil) VALUES (:Correo,:Nombre,:Password,:Perfil)");
        $statement->bindParam(':Correo',$Correo);
        $statement->bindParam(':Nombre',$Nombre);
        $statement->bindParam(':Password',$Password);
        $statement->bindParam(':Perfil',$Perfil);
        if($statement->execute()) {
            return true;
         }else{
            return false;
         }
    }

    public function listaUsuarios()
    {
        $listUser = null;
        $statement = $this->db->prepare("SELECT `correo`, `nombre`, `password`, P.perfil FROM tbl_usuario
        INNER JOIN tbl_perfil AS P ON P.id_perfil = tbl_usuario.perfil");
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listUser[] = $consulta;
        }
        return $listUser;
    }

}

?>