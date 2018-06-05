
function validacion(campo, campo1) {
    var a = 0;


// // Validar el camopos de contraseñas

    if (campo === 'Contrasena') {


        Contrasena = document.getElementById(campo).value;

        if (Contrasena.length <= 8) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span1').text(" Contraseña debe contener mas de 8 caracteres").show();
            $('#' + campo).parent().append("<span1 id='glypcn" + campo + "' glyphicon glyphicon-remove form-control-feedback'></span1>");

            return false;

        }

        if (Contrasena == null || Contrasena.length == 0 || /^\s+$/.test(Contrasena)) {

            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span1').text(" Ingrese Su Contraseña").show();
            $('#' + campo).parent().append("<span1 id='glypcn" + campo + "' glyphicon glyphicon-remove form-control-feedback'></span1>");

            return false;

        } else {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo).parent().children('span1').hide();
            $('#' + campo).parent().append("<span1 id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span1>");
            return true;

        }

    }



    if (campo === 'ConfirmarContrasena' && campo1 === 'Contrasena') {


        ConfirmarContrasena = document.getElementById(campo).value;
        Contrasena = document.getElementById(campo1).value;


        if (ConfirmarContrasena != Contrasena || ConfirmarContrasena == null || ConfirmarContrasena.length == 0 || /^\s+$/.test(ConfirmarContrasena)) {

            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span1').text(" Ingrese Su Contraseña que sea igual ala anterior").show();
            $('#' + campo).parent().append("<span1 id='glypcn" + campo + "' glyphicon glyphicon-remove form-control-feedback'></span1>");

            return false;

        } else {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo).parent().children('span1').hide();
            $('#' + campo).parent().append("<span1 id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span1>");
            return true;

        }

    }


}



