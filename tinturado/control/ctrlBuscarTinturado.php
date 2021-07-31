<?php

require '../../modal/modal.php';
require '../Modelo/ModeloTinturados.php';

$tinturados = new Tinturados();
$Modal =  new Modal();

$codigo = $_POST['idTinturado'];
$accion = $_POST['accion'];




if ($accion === "btn-buscar-tinturado" && empty($codigo) != 1) {

    $Tinturados = $tinturados->listarTinturadoTable($codigo);
    if ($Tinturados != null) {

        echo "<div class='modal fade table-sm' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false'>";
        echo    "<div class='modal-dialog modal-dialog-centered modal-lg'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-primary'><i class='fas fa-info'></i> Información de producción</h6>";
        echo                "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-0'>";
        echo                "<table class='table table-sm table-responsive-sm  table-border table-hover'>";
        echo                    "<tr>";
        echo                        "<div id='accordionModal'>";

        foreach ($Tinturados as $Tinturados) {
            $id_tinturado =  $Tinturados['id_tinturado'];
            $fecha =  $Tinturados['fecha'];
            $laborNombre =  $Tinturados['labor'];
            $idLabor =  $Tinturados['id_labor'];
            $operario =  $Tinturados['operario'];
            $nombre =  $Tinturados['nombre'];
            $Semana =  $Tinturados['Semana'];
            $horas =  $Tinturados['horas'];
            $Tallos =  $Tinturados['tallos'];
            $promedio =  $Tinturados['Promedio'];
            echo                            "<div class=''>";
            echo                                "<button class='btn btn-block  p-0 border bg-light rounded-0 shadow-none px-2 text-dark' data-toggle='collapse' data-target='#tarjeta$id_tinturado' aria-expanded='true' aria-controls='tarjeta$id_tinturado'>";
            echo                                     "<div class='row text-center'>";
            echo                                        "<div class='col-8 d-flex justify-content-start'>";
            echo                                            "<div class='m-2'><i class='fad fa-user-hard-hat text-muted pr-1'></i> $nombre</div>";
            echo                                        "</div>";
            echo                                        "<div class='col d-flex justify-content-end'>";
            echo                                            "<div class='m-2'>$fecha</div>";
            echo                                        "</div>";
            echo                                     "</div>";
            echo                                "</button>";
            echo                            "</div>";
            echo                            "<div class='collapse border border-top-0 ' id='tarjeta$id_tinturado' data-parent='#accordionModal'>";
            echo                             "<ul class='list-group list-group-flush'>";
            echo                             "<li class='list-group-item lp d-flex justify-content-between'>";
            echo                                 "<div><b>Labor </b>: $laborNombre </div>";
            echo                                     "<div class='text-center'>";
            echo                                         "<button class='btn btn-sm btn-outline-primary border-0 lp' id='btn-editar-tinturados' value='$id_tinturado'>Editar</button>";
            echo                                     "</div>";
            echo                             "</li>";
            echo                              "<li class='list-group-item lp'><b>Codigo </b>: $operario</li>";
            echo                              "<li class='list-group-item lp'><b>Nombre </b>: $nombre</li>";
            echo                              "<li class='list-group-item lp'><b>Fecha </b>: $fecha</li>";
            echo                              "<li class='list-group-item lp'><b>Semana </b>:  $Semana</li>";
            echo                              "<li class='list-group-item lp'><b>Tiempo </b>: $horas</li>";
            echo                              "<li class='list-group-item lp'><b>Tallos </b>:  $Tallos</li>";
            echo                              "<li class='list-group-item lp'><b>Rendimiento </b>:  $promedio</li>";
            echo                           "</ul>";
            echo                           "</div>";
        }
        echo                        "</div>";
        echo                    "</tr>";
        echo                "</table>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
    } else {
        $Modal->modalInfo("danger", "El operario no se encuentra registrado");
    }
} else {
    $Modal->modalInfo("primary", "Ingresa el codigo o nombre del operario");
}

?>