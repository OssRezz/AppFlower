<?php
require '../Modelo/ModeloUsuarios.php';
require '../../modal/modal.php';


$usuario = new Usuarios();
$Modal = new Modal();

$correo = $_POST['correo'];
$accion = $_POST['accion'];

try {
    if ($accion === "btn-delete-usuario") {
        if ($usuario->eliminarUsuario($correo)) {
            $Modal->modalInfo("success", "Usuario Eliminado");
        } else {
            $Modal->modalInfo("danger", "Algo salió mal.");
        }
    }
} catch (PDOException $e) {
    $Modal->modalInfo("danger", "El usuario no se puede eliminar");
}
