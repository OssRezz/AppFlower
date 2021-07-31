<?php

require '../../modal/modal.php';
require '../Modelo/ModeloTinturados.php';

$tinturados = new Tinturados();
$Modal =  new Modal();

$id_tinturado = $_POST['id_tinturado'];
$accion = $_POST['accion'];


if ($accion === "btn-editar-tinturados") {

    $Tinturados = $tinturados->listaTinturadoUpdate($id_tinturado);
    if ($Tinturados != null) {
        foreach ($Tinturados as $Tinturados) {
            $fecha =  $Tinturados['fecha'];
            $laborNombre =  $Tinturados['labor'];
            $idLabor =  $Tinturados['id_labor'];
            $operario =  $Tinturados['operario'];
            $nombre =  $Tinturados['nombre'];
            $Semana =  $Tinturados['semana'];
            $horas =  $Tinturados['horas'];
            $tallos =  $Tinturados['tallos'];

        }
    }
    $labores = $tinturados->listarLaborGeneral();
    $Modal->modalActualiarTinturado($id_tinturado,$fecha,$Semana,$nombre, $operario,$idLabor,$laborNombre, $labores,$horas,$tallos);
}


?>
