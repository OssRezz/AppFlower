<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloTmGeneral.php';

$modal = new Modal();
$TmGeneral = new tmGeneral();

$accion = $_POST['accion'];
$idTmGeneral = $_POST['idTmGeneral'];
$operario = $_POST['operarioTmGeneral'];
$labor = $_POST['laborTmGeneral'];
$semana = $_POST['semanaTmGeneral'];
$fecha = $_POST['fechaTmGeneral'];
$tiempo = $_POST['tiempoTmGeneral'];
$causa = $_POST['causaTmGeneral'];

$Operario = rtrim($operario, " ");
$Labor = rtrim($labor, " ");
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Tiempo = rtrim($tiempo, " ");
$Causa = rtrim($causa, " ");


try {

    if ($accion === "btn-update-tmGeneral") {

        if (empty($Operario) != 1 && empty($Tiempo) != 1) {
            if ($TmGeneral->updateTmGeneral($idTmGeneral, $Operario, $Labor, $Causa, $Fecha, $Semana, $Tiempo)) {
                $modal->modalInfo("success", "Tiempo muerto de producción  actualizado.");
            } else {
                $modal->modalInfo("danger", "Error en la base de datos");
            }
        } else {
            $modal->modalInfo("danger", "Verifica los datos ingresados.");
        }
    }
} catch (PDOException $e) {
    $modal->modalInfo("danger", "Verifica los datos ingresados.");
}

?>
