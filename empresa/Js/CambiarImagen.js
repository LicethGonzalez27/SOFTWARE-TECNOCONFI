$(document).ready(function() {

    $("#form-cambio-Imagen").submit(function(event) {
        event.preventDefault();

        var formData = new FormData($("#form-cambio-Imagen")[0]);

        $.ajax({
            url: 'http://localhost/empresa/usuarios/CargarFoto',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            /*beforeSend: function(xhr) {

                             },*/
            success: function(data) {
                datos = $.parseJSON(data);
                if (datos['id']) {
                   swal({
                        title: "Felicidades",
                        text: "Cambio de Foto Exitoso",
                        type: "success",
                        confirmButtonColor: "#04B4AE",
                        confirmButtonText: "¡Ok!",
                        closeOnConfirm: false
                        },
                        function() {
                            window.location.href = "http://localhost/empresa/empleados";
                         });
                } else {
                    swal(
                        'Oops...',
                        'No guardo foto',
                        'error'
                    )
                }
            },
            error: function(xhr) {
                swal({
                    title: "¡Ops!",
                    text: "Error de codigo. contacta al desarrollador"
                });
                console.log(xhr.responseText);
            }
        });
    });
});