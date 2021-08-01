<?php
require_once '../../modal/modal.php';
require_once '../Modelo/ModeloTmProduccion.php';


$modal = new Modal();
$TmProduccion = new tmProduccion();

$id_tmproduccioon = $_POST['idTmProduccion'];
$accion = $_POST['accion'];


if ($accion == "btn-editar-tmProduccion") {

    $tmProduccion = $TmProduccion->listarTmProduccionUpdate($id_tmproduccioon);
    if ($tmProduccion != null) {
        foreach ($tmProduccion as $tmProduccion) {
            $laborNombre =  $tmProduccion['nombreLabor'];
            $idLabor =  $tmProduccion['labor'];
            $codigo =  $tmProduccion['operario'];
            $nombre =  $tmProduccion['nombre'];
            $posicion =  $tmProduccion['posicion'];
            $fecha =  $tmProduccion['fecha'];
            $Semana =  $tmProduccion['semana'];
            $tiempo =  $tmProduccion['tiempo'];
            $nombreCausa =  $tmProduccion['nombreCausa'];
            $causa =  $tmProduccion['causa'];
        }
        $labores = $TmProduccion->listarLaborProduccion();
        $causas = $TmProduccion->listarCausaProduccion();
        $modal->modalActualiarTmProduccion($id_tmproduccioon,$fecha,$Semana,$nombre, $codigo,$laborNombre, $idLabor, $labores,$posicion,$nombreCausa,$causa,$causas,$tiempo);
    } else {
        $modal->modalInfo("danger","algo salio mal");
    }

}


?>
