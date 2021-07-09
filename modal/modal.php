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
    
}
    








?>