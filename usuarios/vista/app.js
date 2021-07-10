$(document).ready(function () {
    var perfil = $("#perfil").val();
    var title = $(document).attr('title');
    $.post('../../roles/control/ctrlMenuLateral.php', {
        perfil: perfil,
        title: title
    }, function (responseText) {
        $('#respuesta-menu').html(responseText);
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

    
    $('#btn-insertUser').click(function (e) {
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
});