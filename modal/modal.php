<?php

class Modal
{

    //Modal de inicio de sesion
    public function modalLogin($color, $n)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content pt-4 modal-md'>";
        echo               "<div class='row'>";
        echo                    "<div class='col-12 d-flex justify-content-center'>";
        echo                        "<h4 class='mb-0'>Bienvenido a</h4>";
        echo                    "</div>";
        echo                    "<div class='col-12'>";
        echo                        "<p class='text-center text-weight-light' style='font-size: 25px;'>Flores Isabelita S.A.S<p>";
        echo                    "</div>";
        echo              "</div>";
        echo            "<div class='modal-body d-flex justify-content-center'>";
        echo                "<img  src='../img/flower.gif' style='width: 80%'>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo            "<div class='form-group d-flex justify-content-center'>";
        echo               "<input type='button' class='btn  btn-success btn-lg px-5' id='continuar' value='Ingresar'>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#cerrar').click(function(){location.href='reportes/vista/reportesVista.php'})</script>";
        echo "<script>$('#continuar').click(function(){location.href='reportes/vista/reportesVista.php'})</script>";
    }

    //LimpiarCampos 0 = Limpiar, 1 = no limpiar campos
    public function modalInfo($color, $mensaje, $limpiarCampos = 0)
    {

        $limpiarCampos = "<script>$('#cerrar').click(function(){location.reload()});</script>";

        if ($limpiarCampos == 1) $limpiarCampos = "<script>$('#cerrar').click(function(){});</script>";

        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content modal-md'>";
        echo            "<div class='modal-header border-0 py-2'>";
        echo                "<p class='modal-title text-$color'><i class='fas fa-info'></i> Información</p>";
        echo            "<button type='button' class='close' data-dismiss='modal' id='cerrar' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo            "<p> $mensaje <p>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo $limpiarCampos;
    }



    public function modalOut($color)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-$color'><i class='far fa-info-circle'></i> Cerrar sesión</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo                "<p>¿ Deseas salir de la aplicación ? <p>";
        echo       "<div class='d-flex flex-row-reverse bd-highlight'>";
        echo        "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-primary'  id='btn-sesionOut' data-dismiss='modal' aria-label='Close'>Aceptar</button>";
        echo            "</div>";
        echo        "</div>";
        echo            "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-dark' data-dismiss='modal' aria-label='Close'>Cancelar</button>";
        echo            "</div>";
        echo        "</div>";
        echo        "</div>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#btn-sesionOut').click(function(){location.href='../../index.php'})</script>";
    }

    public function modalEliminar($color, $nombre, $correo)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-$color'><i class='far fa-trash-alt'></i> Eliminar usuario</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo                "<p>¿Eliminar al usuario <b>$nombre</b>? ¿ Estas seguro ? <p>";
        echo       "<div class='d-flex flex-row-reverse bd-highlight'>";
        echo        "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-primary'  id='btn-delete-usuario' data-dismiss='modal' aria-label='Close' value='$correo'>Eliminar</button>";
        echo            "</div>";
        echo        "</div>";
        echo            "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-dark' data-dismiss='modal' aria-label='Close'>Regresar</button>";
        echo            "</div>";
        echo        "</div>";
        echo        "</div>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#btn-delete-usuario').click(function(){location.reload()})</script>";
    }
    public function modalEliminarOperario($color, $nombre, $Codigo)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-$color'><i class='far fa-trash-alt'></i> Eliminar usuario</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo                "<p>¿Eliminar al operario <b>$nombre</b>? ¿ Estas seguro ? <p>";
        echo       "<div class='d-flex flex-row-reverse bd-highlight'>";
        echo        "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-primary'  id='btn-delete-operario' data-dismiss='modal' aria-label='Close' value='$Codigo'>Eliminar</button>";
        echo            "</div>";
        echo        "</div>";
        echo            "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-dark' data-dismiss='modal' aria-label='Close'>Regresar</button>";
        echo            "</div>";
        echo        "</div>";
        echo        "</div>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#btn-delete-operario').click(function(){location.reload()})</script>";
    }

    public function modalInsert($color)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1'style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-$color'><i class='far fa-check-circle'></i> Registro exitoso</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo                "<p>La información se almacenó en la base de datos.<p>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-primary'  id='aceptar' data-dismiss='modal' aria-label='Close'>Aceptar</button>";
        echo            "</div>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#aceptar').click(function(){location.reload()});</script>";
        echo "<script>$('#cerrar').click(function(){location.reload()});</script>";
    }


    public function modalActualizarUsuario($correo, $nombre, $password, $id_perfil)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-primary'><i class='far fa-edit'></i> Actualizar usuario</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-2'>";

        echo                 "<form class='p-1'>";
        echo                    "<div class='form-group col'>";
        echo                        "<label for='correoUser'>Correo</label>";
        echo                        "<input type='email' class='form-control' id='correoUser' value='$correo' disabled>";
        echo                    "</div>";
        echo                    "<div class='form-group col'>";
        echo                        "<label for='nombreUser'>Nombre</label>";
        echo                        "<input type='text' class='form-control' id='nombreUser' value='$nombre'>";
        echo                    "</div>";
        echo                    "<div class='form-group col'>";
        echo                        "<label for='passwordUser'>Contraseña</label>";
        echo                        "<input type='text' class='form-control' id='passwordUser' value='$password'>";
        echo                    "</div>";
        echo                    "<div class='form-group col mb-5 hidden'>";
        echo                        "<input type='hidden' class='form-control' id='perfilUser' value='$id_perfil'>";
        echo                    "</div>";
        echo                    "<div class='form-group d-flex justify-content-center'>";
        echo                    "<div class='form-group col-5'>";
        echo                        "<input type='button' class='btn btn-outline-dark  btn-block' data-dismiss='modal' value='Regresar'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-5'>";
        echo                        "<input type='button' class='btn btn-outline-primary btn-block' id='btn-update-usuarios' value='Actualizar'>";
        echo                    "</div>";
        echo                    "</div>";
        echo                    "<div class='form-group d-flex justify-content-center'>";
        echo                    "</div>";
        echo                 "</form>";

        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
    }

    public function modalActualizarOperario($codigo, $nombre)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-primary'><i class='far fa-edit'></i> Actualizar operario</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-2'>";

        echo                 "<form class='p-1'>";
        echo                    "<div class='form-group col'>";
        echo                        "<label for='idOperario'>Codigo</label>";
        echo                        "<input type='email' class='form-control' id='idOperario' value='$codigo' disabled>";
        echo                    "</div>";
        echo                    "<div class='form-group col mb-5'>";
        echo                        "<label for='nombreOperario'>Nombre</label>";
        echo                        "<input type='text' class='form-control' id='nombreOperario' value='$nombre'>";
        echo                    "</div>";
        echo                    "<div class='form-group d-flex justify-content-center'>";
        echo                    "<div class='form-group col-5'>";
        echo                        "<input type='button' class='btn btn-outline-dark  btn-block' data-dismiss='modal' value='Regresar'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-5'>";
        echo                        "<input type='button' class='btn btn-outline-primary btn-block' id='btn-update-operario' value='Actualizar'>";
        echo                    "</div>";
        echo                    "</div>";
        echo                    "<div class='form-group d-flex justify-content-center'>";
        echo                    "</div>";
        echo                 "</form>";

        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
    }

    public function modalActualizarProduccion($idProduccion,$fecha,$Semana,$nombre, $codigo,$laborNombre, $idLabor, $labores,$posicion,$tiempo,$tallos,$recetas)
    {
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered modal-lg'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-primary'><i class='far fa-edit'></i> Actualizar producción</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-2'>";

        echo                 "<form class='p-1'>";
        echo                    "<div class='form-row'>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='fechaProduccion'>Fecha</label>";
        echo                        "<input type='hidden' class='form-control' id='idProduccion' value='$idProduccion'>";
        echo                        "<input type='date' class='form-control' id='fechaProduccion' value='$fecha'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='semanaProduccion'>Semana</label>";
        echo                        "<input type='week' class='form-control' id='semanaProduccion' value='$Semana'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='nombreProduccion'>Nombre</label>";
        echo                        "<input type='text' class='form-control' id='nombreProduccion' value='$nombre' disabled>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='codigoProduccion'>Codigo</label>";
        echo                        "<input type='number' class='form-control' id='codigoProduccion' value='$codigo'>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='laborProduccion'>Labor</label>";
        echo                        "<select name='laborProduccion' id='laborProduccion' class='form-control'>";
  //      echo                        "<option value='$idLabor' disabled selected>$laborNombre</option>";
         echo                        "<option value='$idLabor' disabled selected>Seleccione la labor</option>";

  
        foreach ($labores as $labores) {
                $id_labor =  $labores['id_labor'];
                $laborProduccion =  $labores['labor'];
                echo                        "<option value='$id_labor'>$laborProduccion</option>";
            
        }
        echo                        "</select>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='posicionProduccion'>Posicion</label>";
        echo                        "<select name='posicionProduccion' id='posicionProduccion' class='form-control'>";
        echo                        "<option value='$posicion' disabled selected>$posicion</option>";
        for ($i = 1; $i < 17; $i++) {
        echo                        "<option value='$i'>$i</option>";
        }
        echo                        "</select>";
        echo                    "</div>";
        if ($idLabor != 1) {
            echo                            "<div class='form-group col-sm-12 col-md-6 ' id='horasLaborProduccion'>";
        echo                                "<label for='tiempoProduccion'>Horas Trabajadas</label>";
        echo                                "<input type='number' class='form-control' id='tiempoProduccion' value='$tiempo'>";
        echo                            "</div>";
        echo                            "<div class='form-group col-sm-12 col-md-6' >";
        echo                                "<label for='tallosLabelProduccion' id='tallosLabelProduccion'>Tallos</label>";
        echo                                "<input type='number' class='form-control' id='tallosProduccion' value='$tallos'>";
        echo                            "</div>";
        echo                            "<div class='form-group col-sm-12 col-md-12 mb-4'>";
        echo                                "<label for='recetasLabelProduccion' id='recetasLabelProduccion' style='display: none;'>Recetas</label>";
        echo                                "<textarea  class='form-control' id='recetasProduccion' rows='2' style='display: none; resize: none'>$recetas</textarea>";
        echo                            "</div>";
        } else {
            echo                            "<div class='form-group col-sm-12 col-md-6 ' id='horasLaborProduccion'>";
            echo                                "<label for='tiempoProduccion'>Horas Trabajadas</label>";
            echo                                "<input type='number' class='form-control' id='tiempoProduccion' value='$tiempo'>";
            echo                            "</div>";
            echo                            "<div class='form-group col-sm-12 col-md-6' >";
            echo                                "<label for='tallosLabelProduccion' id='tallosLabelProduccion'>Tallos</label>";
            echo                                "<input type='number' class='form-control' id='tallosProduccion' value='$tallos'>";
            echo                            "</div>";
            echo                            "<div class='form-group col-sm-12 col-md-12 mb-4'>";
            echo                                "<label for='recetasLabelProduccion' id='recetasLabelProduccion'>Recetas</label>";
            echo                                "<textarea  class='form-control' id='recetasProduccion' rows='2' style='resize: none'>$recetas</textarea>";
            echo                            "</div>";
        }

        echo                    "<div class='form-group col-sm-12 mb-0 col-md-12 d-flex justify-content-center'>";
        echo                        "<div class='form-group col-sm-12 col-md-5'>";
        echo                            "<input type='button' class='btn btn-outline-dark  btn-block' data-dismiss='modal' value='Regresar'>";
        echo                        "</div>";
        echo                        "<div class='form-group col-sm-12 col-md-5'>";
        echo                            "<input type='button' class='btn btn-outline-primary btn-block' id='btn-update-usuarios' value='Actualizar'>";
        echo                        "</div>";
        echo                    "</div>";
        echo                    "</div>";
        echo                 "</form>";

        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
    }

    public function modalActualizarEmpaque($idEmpaque,$fecha,$Semana,$nombre, $operario,$posicion,$idLabor,$laborNombre, $labores,$hora,$cajas)
    {
        echo "<div class='modal fade' id='modal-empaque' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered modal-lg'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-primary'><i class='far fa-edit'></i> Actualizar producción</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-2'>";

        echo                 "<form class='p-1'>";
        echo                    "<div class='form-row'>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='idEmpaque'>Fecha</label>";
        echo                        "<input type='hidden' class='form-control' id='idEmpaque' value='$idEmpaque'>";
        echo                        "<input type='date' class='form-control' id='fechaEmpaque' value='$fecha'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='semanaEmpaque'>Semana</label>";
        echo                        "<input type='week' class='form-control' id='semanaEmpaque' value='$Semana'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='nombreEmpaque'>Nombre</label>";
        echo                        "<input type='text' class='form-control' id='nombreEmpaque' value='$nombre' disabled>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='operarioEmpaque'>Codigo</label>";
        echo                        "<input type='number' class='form-control' id='operarioEmpaque' value='$operario'>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='posicionEmpaque'>Posicion</label>";
        echo                        "<select name='posicionEmpaque' id='posicionEmpaque' class='form-control'>";
        echo                        "<option value='$posicion' selected>$posicion</option>";
        echo                        "<option value='Celula-1'>Célula-1</option>";
        echo                        "<option value='Celula-2'>Celula-2</option>";
        echo                        "<option value='Celula-3'>Celula-3</option>";
        echo                        "<option value='Celula-4'>Celula-4</option>";
        echo                        "<option value='Postcosecha'>Postcosecha</option>";
        echo                        "</select>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='laborEmpaque'>Labor</label>";
        echo                        "<select name='laborEmpaque' id='laborEmpaque' class='form-control'>";
        echo                        "<option value='$idLabor' selected>$laborNombre</option>";
                                    foreach ($labores as $labores) {
                                            $id_labor =  $labores['id_labor'];
                                            $laborEmpaque =  $labores['labor'];
        echo                               "<option value='$id_labor'>$laborEmpaque</option>";
                                    }
        echo                        "</select>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                                "<label for='horaEmpaque'>Horas Trabajadas</label>";
        echo                                "<input type='number' class='form-control' id='horaEmpaque' value='$hora'>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-6 mb-4'>";
        echo                                "<label for='cajasEmpaque' id='tallosLabelProduccion'>Cajas</label>";
        echo                                "<input type='number' class='form-control' id='cajasEmpaque' value='$cajas'>";
        echo                    "</div>";


        echo                    "<div class='form-group col-sm-12 col-md-12 d-flex justify-content-center mb-3'>";
        echo                        "<div class='form-group col-sm-12 col-md-5 mb-0'>";
        echo                            "<input type='button' class='btn btn-outline-dark  btn-block' data-dismiss='modal' id='regresar' value='Regresar'>";
        echo                        "</div>";
        echo                        "<div class='form-group col-sm-12 col-md-5 mb-0'>";
        echo                            "<input type='button' class='btn btn-outline-primary btn-block' id='btn-update-empaque' value='Actualizar'>";
        echo                        "</div>";
        echo                    "</div>";
        echo                    "</div>";
        echo                 "</form>";

        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-empaque').modal('show')</script>";
        echo "<script>$('#cerrar').click(function(){location.reload()});</script>";
        echo "<script>$('#regresar').click(function(){location.reload()});</script>";

    }

    public function modalActualiarMaterial($id_seco,$fecha,$Semana,$nombre, $operario,$idLabor,$laborNombre, $labores,$hora,$cantidad)
    {
        echo "<div class='modal fade' id='modal-material' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered modal-lg'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h6 class='modal-title text-primary'><i class='far fa-edit'></i> Actualizar producción</h6>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-2'>";

        echo                 "<form class='p-1'>";
        echo                    "<div class='form-row'>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='idEmpaque'>Fecha</label>";
        echo                        "<input type='hidden' class='form-control' id='idEmpaque' value='$id_seco'>";
        echo                        "<input type='date' class='form-control' id='fechaEmpaque' value='$fecha'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='semanaEmpaque'>Semana</label>";
        echo                        "<input type='week' class='form-control' id='semanaEmpaque' value='$Semana'>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='nombreEmpaque'>Nombre</label>";
        echo                        "<input type='text' class='form-control' id='nombreEmpaque' value='$nombre' disabled>";
        echo                    "</div>";
        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                        "<label for='operarioEmpaque'>Codigo</label>";
        echo                        "<input type='number' class='form-control' id='operarioEmpaque' value='$operario'>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-12'>";
        echo                        "<label for='laborEmpaque'>Labor</label>";
        echo                        "<select name='laborEmpaque' id='laborEmpaque' class='form-control'>";
        echo                        "<option value='$idLabor' selected>$laborNombre</option>";
                                    foreach ($labores as $labores) {
                                            $id_labor =  $labores['id_labor'];
                                            $laborEmpaque =  $labores['labor'];
        echo                               "<option value='$id_labor'>$laborEmpaque</option>";
                                    }
        echo                        "</select>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-6'>";
        echo                                "<label for='horaEmpaque'>Horas Trabajadas</label>";
        echo                                "<input type='number' class='form-control' id='horaEmpaque' value='$hora'>";
        echo                    "</div>";

        echo                    "<div class='form-group col-sm-12 col-md-6 mb-4'>";
        echo                                "<label for='cajasEmpaque' id='tallosLabelProduccion'>Cajas</label>";
        echo                                "<input type='number' class='form-control' id='cajasEmpaque' value='$cantidad'>";
        echo                    "</div>";


        echo                    "<div class='form-group col-sm-12 col-md-12 d-flex justify-content-center mb-3'>";
        echo                        "<div class='form-group col-sm-12 col-md-5 mb-0'>";
        echo                            "<input type='button' class='btn btn-outline-dark  btn-block' data-dismiss='modal' id='regresar' value='Regresar'>";
        echo                        "</div>";
        echo                        "<div class='form-group col-sm-12 col-md-5 mb-0'>";
        echo                            "<input type='button' class='btn btn-outline-primary btn-block' id='btn-update-empaque' value='Actualizar'>";
        echo                        "</div>";
        echo                    "</div>";
        echo                    "</div>";
        echo                 "</form>";

        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-material').modal('show')</script>";
        echo "<script>$('#cerrar').click(function(){location.reload()});</script>";
        echo "<script>$('#regresar').click(function(){location.reload()});</script>";
    }
    
}

?>