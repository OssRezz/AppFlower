<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloMaterialSeco.php';


$modal = new Modal();
$MaterialSeco = new materialSeco();

$operario = $_POST['operario'];
$labor = $_POST['labor'];
$fecha = $_POST['fecha'];
$semana = $_POST['semana'];
$hora = $_POST['hora'];
$cantidad = $_POST['cantidad'];


$Operario = rtrim($operario, " ");
$Labor = rtrim($labor, " ");
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Hora = rtrim($hora, " ");
$Cantidad = rtrim($cantidad, " ");

try {
    if (empty($Operario) != 1 && empty($Labor) != 1  && empty($Fecha) != 1 && empty($Semana) != 1 && empty($Hora) != 1  && empty($Cantidad) != 1) {

        if ($MaterialSeco->insertarMaterialSeco( $Operario,$Labor, $Semana,$Fecha,  $Cantidad, $Hora)) {
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