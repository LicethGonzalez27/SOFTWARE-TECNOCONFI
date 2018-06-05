    $(document).ready(function() {

        $("#okcul").click(function() {
            buscartodoscultivos();
        });

        $(document).on("ready", cultivo);

        function cultivo() {

            $("#form-crearCulti").submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: $("form").attr("action"),
                    type: $("form").attr("method"),
                    data: $("form").serialize(),
                    success: function(respu) {
                        if (respu === "error") {
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
                                    window.location.href = "http://localhost/empresa/cultivo?";
                                });
                        }
                    }
                });
            });

            $("#form-buscarculti").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: $(this).attr("action"),
                    type: $(this).attr("method"),
                    data: $(this).serialize(),
                    success: function(resp1) {
                        if (resp1 === "error") {
                            swal(
                                'Error',
                                'Datos No Encontrados',
                                'error'
                            );
                        } else {
                            // }
                            $('#consulCulti').modal('hide');
                            $('#Mirar').modal('hide');
                            //window.location.href = "http://localhost/empresa/CultivosGuardar?";		
                            $('#consultartercero').modal('show');
                        }
                    }
                });
            });

            $("#form-buscarcultivos").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: $(this).attr("action"),
                    type: $(this).attr("method"),
                    data: $(this).serialize(),
                    success: function(resp1) {
                        if (resp1 === "error") {
                            swal(
                                'Error',
                                'Datos No Encontrados',
                                'error'
                            );
                        } else {
                            $('#consulCultivosbuscar').modal('hide');
                            $('#consultarcliente').modal('show');
                        }
                    }
                });
            });
        }

        function buscartodoscultivos(valor) {

            $.ajax({
                url: 'http://localhost/empresa/CultivosGuardar/mostrarcultivos',
                type: 'post',
                data: {
                    buscarIdu: $('#buscarIdu').val()
                },
                success: function(data) {
                    datos1234 = $.parseJSON(data);
                    console.log(datos1234);
                    for (var i = 0; i < datos1234.length; i++) {
                        //window.location.href = "http://localhost/empresa/cuenta?";
                        $('#tablaDataCultivo').empty();
                        $('#tablaDataCultivo').append(
                            '<tr>' +
                            '<td>' + datos1234[i]["idCultivo"] + '</td>' +
                            '<td>' + datos1234[i]["nombreCultivo"] + '</td>' +
                            '<td>' + datos1234[i]["descripcionCultivo"] + '</td>' +
                            '<td>' + datos1234[i]["fechaCultivo"] + '</td>' +
                            '<td>' + datos1234[i]["Usuario_idUsuario"] + '</td>' +
                            '<td>' + datos1234[i]["Terreno_idTerreno"] + '</td>' +
                            '<td><button type="button" class="btn btn-default" id="okcultivo' + i + '"  data-toggle="modal" data-target="#modificaCultivo">Modificar</button></td>' +
                            '</tr>');
                        modificarcultivo(datos1234, i);
                    }
                },
                error: function(xhr) {

                    console.log(xhr.responseText);
                }
            });
        }

        function modificarcultivo(datos1234, i) {
            $('#okcultivo' + i).click(function() {
                $('#consulcultivos').modal('hide');
                $('#idCul').val(datos1234[i]["idCultivo"]);
                $('#nomCultivo').val(datos1234[i]["nombreCultivo"]);
                $('#desCultivo').val(datos1234[i]["descripcionCultivo"]);
            });
            $('#ModificarCultivo ').click(function() {
                $.ajax({
                    url: 'http://localhost/empresa/CultivosGuardar/modificarcultivos',
                    type: 'post',
                    data: {
                        idCul: $('#idCul').val(),
                        nomCultivo: $('#nomCultivo').val(),
                        desCultivo: $('#desCultivo').val()
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
                                    window.location.href = "http://localhost/empresa/cultivo";
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