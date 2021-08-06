<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloProduccion.php';


$modal = new Modal();
$produccion = new Produccion();

$operario = $_POST['operario'];
$labor = $_POST['labor'];
$posicion = $_POST['posicion'];
$fecha = $_POST['fecha'];
$semana = $_POST['semana'];
$hora = $_POST['hora'];


$Operario = rtrim($operario, " ");
$Labor = rtrim($labor, " ");
$Posicion = rtrim($posicion, " ");
$Fecha = rtrim($fecha, " ");
$Semana = rtrim($semana, " ");
$Hora = rtrim($hora, " ");


try {
    if (empty($Operario) != 1 && empty($Labor) != 1 && empty($Posicion) != 1  && empty($Fecha) != 1 && empty($Semana) != 1 && empty($Hora) != 1) {

        if ($labor === "1") {

            $recetas = $_POST['recetas'];
            $Separador = str_replace("+", ',', $recetas);
            $produccion_arreglo = preg_split("/\,/", $Separador);
            $Tallos = array_sum($produccion_arreglo);

            if ($produccion->insertarProduccion($Operario, $Labor, $Posicion, $Fecha, $Semana, $Tallos, $Hora, $recetas)) {
                $modal->modalInsert("success");
            } else {
                $modal->modalInfo("danger", "Error en la base de datos");
            }
        } else {

            $Tallos = $_POST['tallos'];
            $recetas = null;

            if ($produccion->insertarProduccion($Operario, $Labor, $Posicion, $Fecha, $Semana, $Tallos, $Hora, $recetas)) {
                $modal->modalInsert("success");
            } else {
                $modal->modalInfo("danger", "Error en la base de datos");
            }
        }
    } else {
        $modal->modalInfo("primary", "Verifica los datos ingresados.");
    }
} catch (PDOException $e) {
    $Modal->modalInfo("danger", "Verifica los datos ingresados.");
}

?>