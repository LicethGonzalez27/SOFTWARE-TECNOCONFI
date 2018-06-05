$(document).ready(function() {

    $("#okinsumos").click(function() {
        buscarinsumos();
    });


    $(document).on("ready", nuevoinsumo);

    function nuevoinsumo() {

        $("#Form-crear-insu").submit(function(event) {
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
    }


    function buscarinsumos(valor) {

        $.ajax({
            url: 'http://localhost/empresa/insumos/mostrarinsumos',
            type: 'post',
            data: {
                buscarIdUa: $('#buscarIdUa').val()
            },
            success: function(datas) {
                datos12 = $.parseJSON(datas);
                //console.log(datos12);
                $('#tablaDataInsu').empty();
                for (var i = 0; i < datos12.length; i++) {
                    $('#tablaDataInsu').append(
                        '<tr>' +
                        '<td>' + datos12[i]["idInsumos"] + '</td>' +
                        '<td>' + datos12[i]["nombreInsumos"] + '</td>' +
                        '<td>' + datos12[i]["DetalleInsumos"] + '</td>' +
                        '<td>' + datos12[i]["fechaInsumo"] + '</td>' +
                        '<td>' + datos12[i]["Usuario_idUsuario"] + '</td>' +
                        '<td>' + datos12[i]["Estado_idEstado"] + '</td>' +
                        '<td><button type="button" class="btn btn-default" id="okinsumo' + i + '"  data-toggle="modal" data-target="#modificaInsumo">Modificar</button></td>' +
                        '</tr>');
                    modificarInsumo(datos12, i);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function modificarInsumo(datos12, i) {
        $('#okinsumo' + i).click(function() {
            $('#consulinsum').modal('hide');
            $('#idInsu').val(datos12[i]["idInsumos"]);
            $('#nomInsumo').val(datos12[i]["nombreInsumos"]);
            $('#desInsumo').val(datos12[i]["DetalleInsumos"]);
            $("#EstadoInsumo option[value=" + datos12[i]["Estado_idEstado"] + "]").attr("selected", true);

        });
        $('#Modificarinsumos ').click(function() {
            $.ajax({
                url: 'http://localhost/empresa/insumos/modificainsumos',
                type: 'post',
                data: {
                    nomInsumo: $('#nomInsumo').val(),
                    desInsumo: $('#desInsumo').val(),
                    EstadoInsumo: $('#EstadoInsumo').val(),
                    idInsu: $('#idInsu').val()
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