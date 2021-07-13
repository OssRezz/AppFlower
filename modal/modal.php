<?php

Class Modal {
    
    //Modal de inicio de sesion
    public function modalLogin($color,$n){
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content modal-md'>";
        echo            "<div class='modal-body'>";
        echo            "<div class='modal-header border-0 py-2 mb-3'>";
        echo                "<p class='modal-title text-$color'><i class='fas fa-info'></i> Información</p>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo                "<div class=' d-flex justify-content-center text-black mb-3'><p>Bienvenido a AppFlower</p></div>";
        echo                "<div class=' d-flex justify-content-center text-black mb-3'> <p><b>$n</b></p></div>";
        echo            "<div class='d-flex justify-content-center'>";
        echo                "<button type='button' class='btn btn-outline-primary btn-sm  btn-block'  id='cerrar2' data-dismiss='modal' aria-label='Close'>Continuar</button>";
        echo            "</div>";
        echo            "</div>";
        
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#cerrar2').click(function(){location.href='reportes/vista/reportesVista.php'})</script>";
        echo "<script>$('#cerrar').click(function(){location.href='reportes/vista/reportesVista.php'})</script>";
    }
    
    //LimpiarCampos 0 = Limpiar, 1 = no limpiar campos
    public function modalInfo($color,$mensaje,$limpiarCampos=0){

        $limpiarCampos = "<script>$('#btn-Regresar').click(function(){location.reload()});</script>";

        if($limpiarCampos == 1) $limpiarCampos = "<script>$('#btn-Regresar').click(function(){});</script>";

        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";        
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content modal-md'>";
        echo            "<div class='modal-header border-0 py-2'>";
        echo                "<p class='modal-title text-$color'><i class='fas fa-info'></i> Información</p>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
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


    public function modalOut($color){
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h5 class='modal-title text-$color'>¡AppFlower!</h5>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo                "<p>¿ Deseas salir de la aplicación ? <p>";
        echo       "<div class='d-flex flex-row-reverse bd-highlight'>";
        echo        "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-danger'  id='btn-sesionOut' data-dismiss='modal' aria-label='Close'>Aceptar</button>";
        echo            "</div>";  
        echo        "</div>";
        echo            "<div class='p-2 bd-highlight'>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-primary'  id='No' data-dismiss='modal' aria-label='Close'>Cancelar</button>";
        echo            "</div>";
        echo        "</div>";
        echo        "</div>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#btn-sesionOut').click(function(){location.href='../../index.php'})</script>";
        echo "<script>$('#No').click(function(){location.reload()});</script>";

    }

    public function modalInsert($color,$n){
        echo "<div class='modal fade' id='modal-login' tabindex='-1'style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h5 class='modal-title text-$color'>¡NotApp!</h5>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body'>";
        echo                "<p><strong>$n</strong>, Se ha registrado correctamente. <p>";
        echo            "<div class='d-flex justify-content-end'>";
        echo                "<button type='button' class='btn btn-outline-primary'  id='cerrar2' data-dismiss='modal' aria-label='Close'>Aceptar</button>";
        echo            "</div>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#cerrar2').click(function(){location.reload()});</script>";
        echo "<script>$('#cerrar').click(function(){location.reload()});</script>";

    }


    public function modalActualizarUsuario($correo, $nombre, $password, $id_perfil){
        echo "<div class='modal fade' id='modal-login' tabindex='-1' style='display: block;' data-keyboard='false' data-backdrop='static'>";
        echo    "<div class='modal-dialog modal-dialog-centered'>";
        echo        "<div class='modal-content'>";
        echo            "<div class='modal-header'>";
        echo                "<h5 class='modal-title text-primary'>Actualizar Usuario</h5>";
        echo            "<button type='button' class='close' id='cerrar' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo            "</div>";
        echo            "<div class='modal-body p-2'>";

        echo                 "<form class='p-1'>";
        echo                	"<div class='form-group col'>";
        echo                		"<label for='correoUser'>Correo</label>";
        echo                		"<input type='email' class='form-control' id='correoUser' value='$correo'>";
        echo                	"</div>";
        echo                	"<div class='form-group col'>";
        echo                		"<label for='nombreUser'>Nombre</label>";
        echo                		"<input type='text' class='form-control' id='nombreUser' value='$nombre'>";
        echo                	"</div>";
        echo                	"<div class='form-group col'>";
        echo                		"<label for='passwordUser'>Contraseña</label>";
        echo                		"<input type='text' class='form-control' id='passwordUser' value='$password'>";
        echo                	"</div>";
        echo                	"<div class='form-group col mb-5 hidden'>";
        echo                		"<input type='hidden' class='form-control' id='perfilUser' value='$id_perfil'>";
        echo                	"</div>";
        echo                	"<div class='form-group d-flex justify-content-center'>";
        echo                	"<div class='form-group col-sm-12 col-md-12 col-lg-5'>";
        echo                		"<input type='button' class='btn btn-outline-dark  btn-block' id='btn-updateUser' value='Regresar'>";
        echo                	"</div>";
        echo                	"<div class='form-group col-sm-12 col-md-12 col-lg-5'>";
        echo                		"<input type='button' class='btn btn-outline-primary btn-block' id='btn-Regresar' value='Actualizar'>";
        echo                	"</div>";
        echo                	"</div>";
        echo                	"<div class='form-group d-flex justify-content-center'>";
        echo                	"</div>";
        echo                 "</form>";

        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
        echo "<script>$('#modal-login').modal('show')</script>";
        echo "<script>$('#btn-Regresar').click(function(){location.reload()});</script>";
    }
    
}
    








?>