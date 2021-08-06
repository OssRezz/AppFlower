<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloTmEmpaque.php';


$modal = new Modal();
$TmEmpaque = new tmEmpaque();

$operario = $_POST['operario'];
$celula = $_POST['celula'];
$causa = $_POST['causa'];
$fecha = $_POST['fecha'];
$minutos = $_POST['minutos'];
$horas = $_POST['horas'];



$Operario = rtrim($operario, " ");
$Celula = rtrim($celula, " ");
$Causa = rtrim($causa, " ");
$Fecha = rtrim($fecha, " ");
$Minutos = rtrim($minutos, " ");
$Horas = rtrim($horas, " ");

try {

    if (empty($Operario) != 1 && empty($Horas) != 1 && empty($Celula) != 1  && empty($Fecha) != 1 && empty($Minutos) != 1) {
        $date = new DateTime($Fecha);
        $week = $date->format("W");
        $year = $date->format('Y');
        $Semana = "$year-W$week";

        if ($TmEmpaque->ingresartmEmpaque($Operario, $Celula, $Causa, $Fecha, $Semana, $Minutos,$Horas)) {
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