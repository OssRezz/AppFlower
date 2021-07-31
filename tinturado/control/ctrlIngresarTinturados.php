<?php
require '../Modelo/ModeloTinturados.php';
require '../../modal/modal.php';

$tinturados = new Tinturados();
$modal = new Modal();

$operario = $_POST['operario'];
$labor = $_POST['labor'];
$fecha = $_POST['fecha'];
$semana = $_POST['semana'];
$horas = $_POST['horas'];
$tallos = $_POST['tallos'];


$Operario = rtrim($operario, " ");
$Labor = rtrim($labor, " ");
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Horas = rtrim($horas, " ");
$Tallos = rtrim($tallos, " ");

try {
    if (empty($Operario) != 1 && empty($Labor) != 1  && empty($Fecha) != 1 && empty($Semana) != 1 && empty($Horas) != 1  && empty($Tallos) != 1) {

        if ($tinturados->ingresarTinturado($Operario,$Labor,$Fecha,$Semana,$Tallos,$Horas)) {
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