<?php

require '../../modal/modal.php';
require '../Modelo/ModeloProduccion.php';

$Produccion = new Produccion();
$Modal =  new Modal();

$codigo = $_POST['codigo'];
$accion = $_POST['accion'];




if ($accion == "btn-buscar-produccion" && empty($codigo) != 1) {

    $produccion = $Produccion->listarProduccionTable($codigo);
    if ($produccion != null) {

        echo "<div class='modal fade table-sm' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false'>";
        echo    "<div class='modal-dialog modal-dialog-centered modal-md'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-primary'><i class='fas fa-info'></i> Información de producción</h6>";
        echo                "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-0'>";
        echo                "<table class='table table-sm table-responsive  table-border table-hover'>";
        echo                    "<tr>";
        echo                        "<div id='accordionModal'>";

        foreach ($produccion as $produccion) {
            $id_produccion =  $produccion['id_produccion'];
            $fecha =  $produccion['fecha'];
            $semana =  $produccion['Semana'];
            $labor =  $produccion['labor'];
            $codigo =  $produccion['operario'];
            $nombre =  $produccion['nombre'];
            $tiempo =  $produccion['hora'];
            $tallos =  $produccion['tallos'];
            $promedio =  $produccion['Promedio'];
            $recetas =  $produccion['recetas'];
            $Separador = str_replace("+", ',', $recetas);
            $numeroRecetas = preg_split("/\,/", $Separador);
            $numeroRecetas = count($numeroRecetas);

            echo                            "<div class=''>";
            echo                                "<button class='btn btn-block d-flex align-items-center aligns p-0 border bg-light rounded-0 shadow-none px-2 text-dark' data-toggle='collapse' data-target='#tarjeta$id_produccion' aria-expanded='true' aria-controls='tarjeta$id_produccion'>";
            echo                                "<p class='m-2'>$nombre</p>";
            echo                                "</button>";
            echo                            "</div>";
            echo                            "<div class='collapse border border-top-0 ' id='tarjeta$id_produccion' data-parent='#accordionModal'>";
            echo                             "<ul class='list-group list-group-flush'>";
            echo                             "<li class='list-group-item py-0 d-flex justify-content-between'>";
            echo                                 "<div><b>Labor </b>: $labor </div>";
            echo                                     "<div class='text-center'>";
            echo                                         "<button class='btn btn-outline-primary pr-1 pl-1 py-0' id='btn-editar-produccion' value='$id_produccion'>editar</button>";
            echo                                     "</div>";
            echo                             "</li>";
            echo                              "<li class='list-group-item py-0'><b>Codigo </b>: $codigo</li>";
            echo                              "<li class='list-group-item py-0'><b>Nombre </b>: $nombre</li>";
            echo                              "<li class='list-group-item py-0'><b>Fecha </b>: $fecha</li>";
            echo                              "<li class='list-group-item py-0'><b>Semana </b>:  $semana</li>";
            echo                              "<li class='list-group-item py-0'><b>Tiempo </b>: $tiempo</li>";
            echo                              "<li class='list-group-item py-0'><b>Tallos </b>:  $tallos</li>";
            echo                              "<li class='list-group-item py-0'><b>Tallos </b>:  $promedio</li>";
                if ($labor != "1") {
                    echo                      "<li class='list-group-item py-0'><b>Recetas </b>: N/A</li>";
                } else {
                    echo                      "<li class='list-group-item py-0'><b>Recetas </b>: $recetas</li>";
                }
                if ($labor != "1") {
                    echo                      "<li class='list-group-item py-0'><b>Numero de recetas </b>:  N/A</li>";
                } else {
                    echo                      "<li class='list-group-item py-0'><b>Numero de recetas </b>: $numeroRecetas</li>";
                }
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



















// if ($accion == "btn-buscar-produccion" && empty($codigo) != 1) {
//     $produccion = $Produccion->listarProduccionTable($codigo);
//     if ($produccion != null) {
//         echo "<div class='modal fade table-sm' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false'>";
//         echo    "<div class='modal-dialog modal-dialog-centered modal-xl'>";
//         echo        "<div class='modal-content'>";
//         echo            "<div class='modal-header'>";
//         echo                "<h5 class='modal-title text-primary'>Información del operario</h5>";
//         echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
//         echo            "</div>";
//         echo            "<div class='modal-body p-0'>";
//         echo                "<table class='table table-sm table-responsive  table-border table-hover'>";
//         echo                    "<tr>";
//         echo                        "<th>Fecha</th>";
//         echo                        "<th>Semana</th>";
//         echo                        "<th>Labor</th>";
//         echo                        "<th>Codigo</th>";
//         echo                        "<th>Nombre</th>";
//         echo                        "<th>Tiempo</th>";
//         echo                        "<th class='th-sm'>Tallos</th>";
//         echo                        "<th>Promedio</th>";
//         echo                        "<th>Recetas</th>";
//         echo                        "<th>Cantidad Recetas</th>";
//         echo                    "</tr>";
//         echo                    "<tr>";
//         foreach ($produccion as $produccion) {
//             $fecha =  $produccion['fecha'];
//             $semana =  $produccion['Semana'];
//             $labor =  $produccion['labor'];
//             $codigo =  $produccion['operario'];
//             $nombre =  $produccion['nombre'];
//             $tiempo =  $produccion['hora'];
//             $tallos =  $produccion['tallos'];
//             $promedio =  $produccion['Promedio'];
//             $recetas =  $produccion['recetas'];
//             $Separador = str_replace("+", ',', $recetas);
//             $numeroRecetas = preg_split("/\,/", $Separador);
//             $numeroRecetas = count($numeroRecetas);
//             echo                        "<td>$fecha</td>";
//             echo                        "<td>$semana</td>";
//             echo                        "<td>$labor</td>";
//             echo                        "<td>$codigo</td>";
//             echo                        "<td>$nombre</td>";
//             echo                        "<td>$tiempo</td>";
//             echo                        "<td>$tallos</td>";
//             echo                        "<td>$promedio</td>";
//             echo                        "<td>$recetas</td>";
//             echo                        "<td>$numeroRecetas</td>";    
//             echo                    "</tr>";
//         }
//         echo                "</table>";
//         echo            "</div>";
//         echo        "</div>";
//         echo    "</div>";
//         echo "</div>";
//         echo "<script>$('#modal-login').modal('show')</script>";
//     } else {
//         $Modal->modalInfo("danger", "El operario no se encuentra registrado");
//     }
// } else {
//     $Modal->modalInfo("primary", "Ingresa el codigo o nombre del operario");
// }
