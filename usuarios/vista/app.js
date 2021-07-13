$(document).ready(function () {

    //Variables que recibimos al cargar la pagina
    var perfil = $("#perfil").val();
    var title = $(document).attr('title');
    var limit = $("#limit").val();
    var pagina = $("#pagina").val();

    //carga el menu lateral de la vista de usuarios
    $.post('../../roles/control/ctrlMenuLateral.php', {
        perfil: perfil,
        title: title
    }, function (responseText) {
        $('#respuesta-menu').html(responseText);
    });

    //Carga la paginación de la vista de usuarios
    $.post('../control/ctrlPaginacion.php', {
        limit: limit,
        pagina: pagina
    }, function (responseText) {
        $('#respuesta-paginacion').html(responseText);
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

    // inserción de vista usuarios
    $('#btn-insertUser').click(function (e) {
        e.preventDefault();
        var correo = $('#correo').val();
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var password = $('#password').val();
        var perfil_user = $('#perfil_user').val();
        $.post('../control/ctrlInsertarUsuario.php', {
            correo: correo,
            nombre: nombre,
            apellido: apellido,
            password: password,
            perfil_user: perfil_user
        }, function (responseText) {
            $('#respuesta').html(responseText);
        });

    });

    $(document).click(function (e) {
        var accion = e.target.id;
        if(accion === "btn-editar-usuario"){
            var correo = e.target.value;
            $.post('../control/ctrlModalActualizar.php', {
                accion: accion,
                correo: correo
            }, function (responseText) {
                $('#respuesta').html(responseText);
            });
        }   
      });
      
});