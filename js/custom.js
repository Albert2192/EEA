url_base = '';

/* VISUALIZA LAS CONTRASEÑAS */
function passwordVisible(IDboton, IDcampoPassword) {
    $(IDboton).click(function () {
        if ($(IDcampoPassword).attr('type') == 'password') {
            $(IDcampoPassword).attr('type', 'text');
        } else {
            $(IDcampoPassword).attr('type', 'password');
        }
    });
}

/* MUESTRA EL SIDEBAR DE MENSAJES */
$('#direct_message_on').click(function (e) { 
    e.preventDefault();
    $('#direct_message').addClass('active');
});
$('#direct_message_off').click(function (e) { 
    e.preventDefault();
    $('#direct_message').removeClass('active');
});