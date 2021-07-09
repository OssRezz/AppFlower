$(document).ready(function () {
    var perfil = $("#perfil").val();
    var title= $(document).attr('title');
    $.post('../../roles/control/ctrlMenuLateral.php', {
        perfil: perfil,
        title: title
    }, function (responseText) {
        $('#respuesta-menu').html(responseText);
    });

});