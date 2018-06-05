$(document).ready(function() {

    $("#okterceros").click(function() {
        buscarterceros();
    });

    $(document).on("ready", nuevo);

    function nuevo() {

        $("#form-create-terceros").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: $("form").attr("action"),
                type: $("form").attr("method"),
                data: $("form").serialize(),
                success: function(resp) {

                    if (resp === "error") {
                        swal('Error',
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
    }

    $("#form-buscar").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(resp1) {
                if (resp1 === "error") {
                    swal('Error',
                        'Datos No Existen En La Base De Datos',
                        'error'
                    );
                } else {

                    $('#consultartercero').modal('hide');
                    //window.location.href = "http://localhost/empresa/RegEntradas";
                    $('#Mirar').modal('show');
                }
            }
        });
    });

    $("#form-buscarCliente").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(resp2) {
                if (resp2 === "error") {
                    swal('Error',
                        'Datos No Existen En La Base De Datos',
                        'error'
                    );
                } else {
                    $('#consultarcliente').modal('hide');
                    $('#Ventas').modal('show');
                }
            }
        });
    });

    function buscarterceros(valor) {

        $.ajax({
            url: 'http://localhost/empresa/PasaraReg/mostrarTerceros',
            type: 'post',
            data: {
                buscarIdUsa: $('#buscarIdUsa').val()
            },
            success: function(datas) {
                datos123 = $.parseJSON(datas);
                //console.log(datos123);
                $('#tablaDataTercero').empty();
                for (var i = 0; i < datos123.length; i++) {
                    $('#tablaDataTercero').append(
                        '<tr>' +
                        '<td>' + datos123[i]["idTerceros"] + '</td>' +
                        '<td>' + datos123[i]["nombreTerceros"] + '</td>' +
                        '<td>' + datos123[i]["apellidoTerceros"] + '</td>' +
                        '<td>' + datos123[i]["identificacionTerceros"] + '</td>' +
                        '<td>' + datos123[i]["direccionTerceros"] + '</td>' +
                        '<td>' + datos123[i]["telefonoTerceros"] + '</td>' +
                        '<td>' + datos123[i]["fechaTerceros"] + '</td>' +
                        '<td>' + datos123[i]["Tipo_idTipo"] + '</td>' +
                        '<td>' + datos123[i]["Usuario_idUsuario"] + '</td>' +
                        '<td>' + datos123[i]["Estado_idEstado"] + '</td>' +
                        '<td><button type="button" class="btn btn-default" id="oktercero' + i + '"  data-toggle="modal" data-target="#modificaTercero">Modificar</button></td>' +
                        '</tr>');
                    modificartercero(datos123, i);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }


    function modificartercero(datos123, i) {
        $('#oktercero' + i).click(function() {
            $('#consulRecurs').modal('hide');
            $('#idTer').val(datos123[i]["idTerceros"]);
            $('#nomTercero').val(datos123[i]["nombreTerceros"]);
            $('#apeTercero').val(datos123[i]["apellidoTerceros"]);
            $('#idenTercero').val(datos123[i]["identificacionTerceros"]);
            $('#direcTercero').val(datos123[i]["direccionTerceros"]);
            $('#teleTercero').val(datos123[i]["telefonoTerceros"]);
            $("#tipotercero option[value=" + datos123[i]["Tipo_idTipo"] + "]").attr("selected", true);
            $("#EstadoTercero option[value=" + datos123[i]["Estado_idEstado"] + "]").attr("selected", true);

        });
        $('#ModificarTerceros ').click(function() {
            $.ajax({
                url: 'http://localhost/empresa/PasaraReg/modificaTerceros',
                type: 'post',
                data: {
                    nomTercero: $('#nomTercero').val(),
                    apeTercero: $('#apeTercero').val(),
                    idenTercero: $('#idenTercero').val(),
                    direcTercero: $('#direcTercero').val(),
                    teleTercero: $('#teleTercero').val(),
                    tipotercero: $('#tipotercero').val(),
                    EstadoTercero: $('#EstadoTercero').val(),
                    idTer: $('#idTer').val()
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