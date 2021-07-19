$(document).ready(function () {
    var perfil = $("#perfil").val();
    var title = $(document).attr('title');
    $.post('../../roles/control/ctrlMenuLateral.php', {
        perfil: perfil,
        title: title
    }, function (responseText) {
        $('#respuesta-menu').html(responseText);
    });

    $("#labor").change(function () {
        var value = $(this).val();
        if (value != 1) {
            $("#recetas").hide();
            $("#recetasLabel").hide();
            $("#tallos").show();
            $("#tallosLabel").show();
            $('#horasLabor').removeClass('form-group col-sm-12 col-xl-12').addClass( "form-group col-sm-12 col-md-6" );
        } else {
            $("#recetas").show();
            $("#recetasLabel").show();
            $("#tallos").hide();
            $("#tallosLabel").hide();
            $('#horasLabor').attr('class','form-group col-sm-12 col-xl-12');

        }
    });

    //Modal Para salir de la sesión ctrlModalOut
    $("#btn-logOut").click(function (e) {
        var numero = 1;
        $.post('../../roles/control/ctrlModalOut.php', {
            numero: numero
        }, function (responseText) {
            $('#respuesta').html(responseText);
        });
    });

    //Cerrar la sesion, volver al index. ctrlSesiónDestroy
    $(document).click(function (e) {
        var accion = e.target.id;
        if (accion === "btn-sesionOut") {
            $.post('../../roles/control/ctrlSesionDestroy.php', {
                accion: accion
            }, function (responseText) {
                $('#respuesta').html(responseText);
            });
        }
    });


});