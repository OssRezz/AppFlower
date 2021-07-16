<?php 
require '../Modelo/ModeloOperarios.php';
require '../../modal/modal.php';


$Operario = new Operarios();
$Modal = new Modal ();

$Codigo = $_POST['codigo'];
$accion = $_POST['accion'];


if ($accion == "btn-delete-operario") {
    if($Operario->eliminarOperario($Codigo)){
        $Modal->modalInfo("success","Usuario Eliminado");
    } else {
        $Modal->modalInfo("danger","Algo salió mal.");
    }
}





?>