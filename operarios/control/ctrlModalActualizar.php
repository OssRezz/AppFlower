<?php

require '../../modal/modal.php';
require '../Modelo/ModeloOperarios.php';

$Operario = new Operarios();
$Modal =  new Modal();

$codigo = $_POST['codigo'];
$accion = $_POST['accion'];


if ($accion == "btn-editar-operario"){

    $Operarios = $Operario->listarOperarioById($codigo);
    if ($Operarios !=null) {
        foreach($Operarios as $Operarios){
            $codigo =  $Operarios['id_operario'];
            $nombre =  $Operarios['nombre'];
        }
        $Modal->modalActualizarOperario($codigo,$nombre);
    }
}


?>