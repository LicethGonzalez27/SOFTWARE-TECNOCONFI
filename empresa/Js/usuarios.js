$(document).ready(function() {

    $("#btnactualizar").click(function() {
        modificarUsuario();
    });

    $("#guardaContra").click(function() {
        comprobarClave();
    });
    $(document).on("ready", main);

    function main() {
        $("#form-create-usuarios").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: $("form").attr("action"),
                type: $("form").attr("method"),
                data: $("form").serialize(),
                success: function(resp) {
                    if (resp === "error") {
                        swal(
                            'Error',
                            'Datos No Fueron Registrados',
                            'error'
                        );
                    } else {
                        swal({
                                title: "Felicidades",
                                text: "Registro Exitoso",
                                type: "success",
                                confirmButtonColor: "#04B4AE",
                                confirmButtonText: "¡Ok!",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "http://localhost/empresa/";
                            }
                        );
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
    }

    function modificarUsuario() {
        $.ajax({
            url: 'http://localhost/empresa/usuarios/modificarUsuarios',
            type: 'post',
            data: {
                idsele: $('#idsele').val(),
                Nombresele: $('#Nombresele').val(),
                Apellidosele: $('#Apellidosele').val(),
                TipoDocumentosele: $('#TipoDocumentosele').val(),
                NumeroDocumentosele: $('#NumeroDocumentosele').val(),
                Direcionsele: $('#Direcionsele').val(),
                TelefonoCelularsele: $('#TelefonoCelularsele').val(),
                CorreoElectronicosele: $('#CorreoElectronicosele').val()
            },
            success: function(data) {
                 datos = $.parseJSON(data);
                if (datos['id']) {
                   swal({
                        title: "Felicidades",
                        text: "Modificación De Datos Exitoso",
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
                        'No guardo Modificación De Datos',
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
    }

    function comprobarClave() {
        clave1 = document.f1.clave1.value;
        clave2 = document.f1.clave2.value;

        if (clave1 == clave2) {
               $.ajax({
            url: 'http://localhost/empresa/usuarios/modificarContrasena',
            type: 'post',
            data: {
                clave1: $('#clave1').val()
                
            },
            success: function(data) {
                datos = $.parseJSON(data);
                if (datos['id']) {
                   swal({
                        title: "Felicidades",
                        text: "Cambio de Contraseña Exitoso",
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
                        'No guardo Cambio De Contraseña',
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
        } else {
            swal(
                'Error',
                'Datos Ingresados No Son Iguales ',
                'error'
            );
        }
    }

});