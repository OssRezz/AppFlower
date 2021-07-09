<?php
require_once('../../conexion.php');
session_start();

Class Roles extends Conexion{
    
    public function __construct(){
        $this->db = parent::__construct();
    }

    public function loginApp($correo,$password){
        $statement = $this->db->prepare("SELECT * FROM tbl_usuario WHERE correo= :correo AND password= :password");
        $statement->bindParam(':correo',$correo);
        $statement->bindParam(':password',$password);
        $statement->execute();
        if($statement->rowCount() == 1){
            $consulta= $statement->fetch();
            $_SESSION['nombre'] = $consulta["nombre"];
            $_SESSION['perfil'] = $consulta["perfil"];
            return true;
        }
        return false;
    }


    public function getUsername(){
        return $_SESSION['nombre'];
    }

    public function getPerfil(){
        return $_SESSION['perfil'];
    }

    public function session()
    {
        if ($_SESSION['nombre'] != null) {
            if ($_SESSION['perfil'] != 1 & $_SESSION['perfil'] != 2) {
                header('Location: ../../produccion/vista/produccionVista.php');
            }
        }
    }

    public function logOut(){
        session_destroy();
    }


}


?>