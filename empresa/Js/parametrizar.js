$(document).ready(function() {
    $("#ok").click(function() {
        buscartodo();
    });
    $(document).on("ready", parametrizar);

    function parametrizar() {
        $("#form-crearTerre").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: $("form").attr("action"),
                type: $("form").attr("method"),
                data: $("form").serialize(),
                success: function(resp) {
                    if (resp === "error") {
                        swal(
                            'Error',
                            'Datos No Registrados En La Base De Datos',
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
                                window.location.href = "http://localhost/empresa/Parametrizar?";
                            }
                        );
                    }
                }
            });
        });
        $("#form-buscarTerre").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: $(this).serialize(),
                success: function(resp1) {
                    if (resp1 === "error") {
                        alert("Los datos  no existen en la tabla terrenos");
                    } else {
                        // }
                        $('#consulTerreno').modal('hide');
                        window.location.href = "http://localhost/empresa/CultivosGuardar?";
                        //$('#Mimodal').modal('show');
                    }
                }
            });
        });
    }

    function buscartodo(valor) {
        $.ajax({
            url: 'http://localhost/empresa/Parametrizar/mostrar',
            type: 'post',
            data: {
                buscarId: $('#buscarId').val()
            },
            success: function(data) {
                datos = $.parseJSON(data);
                //console.log(datos);
                $('#tablaData').empty();
                for (var i = 0; i < datos.length; i++) {
                    //window.location.href = "http://localhost/empresa/cuenta?";
                    $('#tablaData').append(
                        '<tr>' +
                        '<td>' + datos[i]["idTerreno"] + '</td>' +
                        '<td>' + datos[i]["nombreTerreno"] + '</td>' +
                        '<td>' + datos[i]["areaTerreno"] + '</td>' +
                        '<td>' + datos[i]["DescripcionTerreno"] + '</td>' +
                        '<td>' + datos[i]["fechaTerreno"] + '</td>' +
                        '<td>' + datos[i]["Usuario_idUsuario"] + '</td>' +
                        '<td>' + datos[i]["Estado_idEstado"] + '</td>' +
                        '<td><button type="button" class="btn btn-default" id="ok' + i + '"  data-toggle="modal" data-target="#modificaTerreno">Modificar</button></td>' +
                        '</tr>');
                    modificar(datos, i);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function modificar(datos, i) {
        $('#ok' + i).click(function() {
            $('#consulterre').modal('hide');
            $('#id').val(datos[i]["idTerreno"]);
            $('#NombreTerreno').val(datos[i]["nombreTerreno"]);
            $('#AreaTerreno').val(datos[i]["areaTerreno"]);
            $('#descripcionTerreno').val(datos[i]["DescripcionTerreno"]);
            $("#Estado option[value=" + datos[i]["Estado_idEstado"] + "]").attr("selected", true);

        });
        $('#Modificarterreno').click(function() {
            $.ajax({
                url: 'http://localhost/empresa/Parametrizar/modificarTerreno',
                type: 'post',
                data: {
                    NombreTerreno: $('#NombreTerreno').val(),
                    AreaTerreno: $('#AreaTerreno').val(),
                    descripcionTerreno: $('#descripcionTerreno').val(),
                    Estado: $('#Estado').val(),
                    idt: $('#id').val()
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
                                window.location.href = "http://localhost/empresa/Parametrizar";
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
        });
    }
});