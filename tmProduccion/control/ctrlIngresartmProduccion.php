<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloTmProduccion.php';


$modal = new Modal();
$TmProduccion = new tmProduccion();

$operario = $_POST['operario'];
$labor = $_POST['labor'];
$posicion = $_POST['posicion'];
$causa = $_POST['causa'];
$fecha = $_POST['fecha'];
$semana = $_POST['semana'];
$tiempo = $_POST['tiempo'];


$Operario = rtrim($operario, " ");
$Labor = rtrim($labor, " ");
$Posicion = rtrim($posicion, " ");
$Causa = $_POST['causa'];
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Tiempo = rtrim($tiempo, " ");

try {

    if (empty($Operario) != 1 && empty($Labor) != 1 && empty($Posicion) != 1  && empty($Fecha) != 1 && empty($Semana) != 1 && empty($Tiempo) != 1) {

        if ($TmProduccion->ingresartmProduccion($Operario, $Labor, $Posicion, $Causa, $Fecha, $Semana, $Tiempo)) {
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