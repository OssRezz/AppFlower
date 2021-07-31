<?php

require '../../modal/modal.php';
require '../Modelo/ModeloPicking.php';

$picking = new Picking();
$modal =  new Modal();

$accion = $_POST['accion'];
$idPicking = $_POST['idPicking'];
$operario = $_POST['operarioPicking'];
$labor = $_POST['laborPicking'];
$semana = $_POST['semanaPicking'];
$fecha = $_POST['fechaPicking'];
$hora = $_POST['horasPicking'];
$tallos = $_POST['tallosPicking'];

$Operario = rtrim($operario, " ");
$Labor = rtrim($labor, " ");
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Horas = rtrim($hora, " ");
$Tallos = rtrim($tallos, " ");



try {

    if ($accion === "btn-update-picking") {

        if (empty($Operario) != 1 && empty($Tallos) != 1) {
            if ($picking->actualizarPicking($idPicking, $Operario, $Labor, $Fecha,  $Semana,  $Tallos, $Horas)) {
                $modal->modalInfo("success", "Picking  actualizado.");
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
