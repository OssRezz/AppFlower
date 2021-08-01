<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloTmGeneral.php';


$modal = new Modal();
$TmGeneral = new tmGeneral();

$operario = $_POST['operario'];
$labor = $_POST['labor'];
$causa = $_POST['causa'];
$fecha = $_POST['fecha'];
$semana = $_POST['semana'];
$tiempo = $_POST['tiempo'];


$Operario = rtrim($operario, " ");
$Labor = rtrim($labor, " ");
$Causa = rtrim($causa, " ");
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Tiempo = rtrim($tiempo, " ");

try {

    if (empty($Operario) != 1 && empty($Labor) != 1 &&  empty($Fecha) != 1 && empty($Semana) != 1 && empty($Tiempo) != 1) {

        if ($TmGeneral->ingresartmGeneral($Operario, $Labor, $Causa, $Fecha, $Semana, $Tiempo)) {
            $modal->modalInsert("success");
        } else {
            $modal->modalInfo("danger", "Error en la base de datos");
        }
    } else {
        $modal->modalInfo("primary", "Verifica los datos ingresados.");
    }
} catch (PDOException $e) {
    $modal->modalInfo("danger", "El operario: $Operario. No se encuentra registrado en el sistema, Por favor verifique la información.");
}


?>