<?php

require '../../modal/modal.php';
require '../Modelo/ModeloPicking.php';

$picking = new Picking();
$Modal =  new Modal();

$id_picking = $_POST['id_picking'];
$accion = $_POST['accion'];


if ($accion === "btn-editar-picking") {

    $Picking = $picking->listaPickingUpdate($id_picking);
    if ($Picking != null) {
        foreach ($Picking as $Picking) {
            $fecha =  $Picking['fecha'];
            $laborNombre =  $Picking['labor'];
            $idLabor =  $Picking['id_labor'];
            $operario =  $Picking['operario'];
            $nombre =  $Picking['nombre'];
            $Semana =  $Picking['semana'];
            $horas =  $Picking['horas'];
            $tallos =  $Picking['tallos'];

        }
    }
    $labores = $picking->listarLaborGeneral();
    $Modal->modalActualiarPicking($id_picking,$fecha,$Semana,$nombre, $operario,$idLabor,$laborNombre, $labores,$horas,$tallos);
}


?>

