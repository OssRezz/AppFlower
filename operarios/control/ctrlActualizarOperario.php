<?php

require '../Modelo/ModeloOperarios.php';
require '../../modal/modal.php';

$Operario = new Operarios();
$Modal = new Modal();

$accion = $_POST['accion'];
$codigo = $_POST['idOperario'];
$id = $_POST['id'];
$nombre = $_POST['nombreOperario'];


$Codigo = rtrim($codigo, " ");
$Nombre = rtrim($nombre, " ");

try {

    if ($accion == "btn-update-operario") {
        if (empty($Codigo) != 1 && empty($Nombre) != 1) {
            if ($Operario->actualizarOperario($id, $Codigo, $Nombre)) {
                $Modal->modalInfo("success", "Operario actualizado.");
            } else {
                $Modal->modalInfo("danger", "Verifica los datos ingresados");
            }
        } else {
            $Modal->modalInfo("primary", "Verifica los datos ingresados.");
        }
    }
} catch (PDOException $e) {
    $Modal->modalInfo("danger", "El operario no se puede modificar");
}

?>