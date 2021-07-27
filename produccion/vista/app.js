$(document).ready(function () {
    var perfil = $("#perfil").val();
    var title = $(document).attr('title');
    var page = $(document).attr('page');
    var limit = $("#limit").val();
    var pagina = $("#pagina").val();

    $.post('../../roles/control/ctrlMenuLateral.php', {
        perfil: perfil,
        title: title
    }, function (responseText) {
        $('#respuesta-menu').html(responseText);
    });

    //Carga la paginación de la vista de operarios
    $.post('../control/ctrlPaginacion.php', {
        limit: limit,
        pagina: pagina
    }, function (responseText) {
        $('#respuesta-paginacion').html(responseText);
    });

    $("#labor").change(function () {
        var value = $(this).val();
        if (value != 1) {
            $("#recetas").hide();
            $("#recetasLabel").hide();
            $("#tallos").show();
            $("#tallosLabel").show();
            $('#horasLabor').removeClass('form-group col-sm-12 col-xl-12').addClass("form-group col-sm-12 col-md-6");
        } else {
            $("#recetas").show();
            $("#recetasLabel").show();
            $("#tallos").hide();
            $("#tallosLabel").hide();
            $('#horasLabor').attr('class', 'form-group col-sm-12 col-xl-12');

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

    //Enviar los datos de la vista al control de la inserción 
    $("#ingresar-produccion").click(function (e) {
        var operario = $("#operario").val();
        var labor = $("#labor").val();
        var posicion = $("#posicion").val();
        var fecha = $("#fecha").val();
        var semana = $("#semana").val();
        var tallos = $("#tallos").val();
        var hora = $("#hora").val();
        var recetas = $("#recetas").val();
        $.post('../control/ctrlIngresarProduccion.php', {
            operario: operario,
            labor: labor,
            posicion: posicion,
            fecha: fecha,
            semana: semana,
            tallos: tallos,
            hora: hora,
            recetas: recetas
        }, function (responseText) {
            $('#respuesta').html(responseText);
        });
    });


    //Responde la modal con la información de la produccion
    $(document).click(function (e) {
        var accion = e.target.id;
        if (accion === "btn-buscar-produccion") {
            var idProduccion = $('#BuscarProduccion').val();
            $.post('../control/ctrlBuscarProduccion.php', {
                accion: accion,
                idProduccion: idProduccion
            }, function (responseText) {
                $('#respuesta').html(responseText);
            });
        }
    });

    //Muestra la modal con la informacion del usuario
    $(document).click(function (e) {
        var accion = e.target.id;
        if (accion === "btn-editar-produccion") {
            var idProduccion = e.target.value;
            $.post('../control/ctrlModalActualizar.php', {
                accion: accion,
                idProduccion: idProduccion
            }, function (responseText) {
                $('#respuesta').html(responseText);
            });
        }
    });

    $(document).click(function (e) {
        $("#laborProduccion").change(function () {
            var value = $(this).val();
            if (value != 1) {
                $("#recetasProduccion").hide();
                $("#recetasLabelProduccion").hide();
                $("#tallosProduccion").show();
                $("#tallosLabelProduccion").show();
                $('#horasLaborProduccion').removeClass('form-group col-sm-12 col-xl-12').addClass("form-group col-sm-12 col-md-6");
            } else {
                $("#recetasProduccion").show();
                $("#recetasLabelProduccion").show();
                $("#tallosProduccion").hide();
                $("#tallosLabelProduccion").hide();
                $('#horasLaborProduccion').attr('class', 'form-group col-sm-12 col-xl-12');
            }
        });

    });

});