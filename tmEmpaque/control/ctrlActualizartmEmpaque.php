<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloTmEmpaque.php';

$modal = new Modal();
$TmEmpaque = new tmEmpaque();

$accion = $_POST['accion'];
$id_empaquetm = $_POST['idTmEmpaque'];
$operario = $_POST['operarioTmEmpaque'];
$celula = $_POST['celulaTmEmpaque'];
$semana = $_POST['semanaTmEmpaque'];
$fecha = $_POST['fechaTmEmpaque'];
$horas = $_POST['horasTmEmpaque'];
$minutos = $_POST['minutosTmEmpaque'];
$causa = $_POST['causaTmEmpaque'];

$Operario = rtrim($operario, " ");
$Celula = rtrim($celula, " ");
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Minutos = rtrim($minutos, " ");
$Horas = rtrim($horas, " ");
$Causa = rtrim($causa, " ");


try {

    if ($accion === "btn-update-tmEmpaque") {

        if (empty($Operario) != 1 && empty($Minutos) != 1) {
            if ($TmEmpaque->updateTmEmpaque($id_empaquetm, $Operario, $Celula, $Causa, $Fecha, $Semana, $Minutos,$Horas)) {
                $modal->modalInfo("success", "Tiempo muerto de empaque  actualizado.");
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
