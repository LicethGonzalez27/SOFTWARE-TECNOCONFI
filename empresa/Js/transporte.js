$(document).ready(function() {

    var valorDelTransporte;
    var vidaUtilTransporte;

    $("#oktransporte").click(function() {
        buscarTransporte();
    });

    $("#searchTransporte").keydown(function() {
        mostrartodo();
    });

    $("#consulVidaUtilTransporte").click(function() {
        hallarvidautilTransporte();
    });
    $(document).on("ready", tranporte);

    function tranporte() {
        $("#Form-crear-trans").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: $("form").attr("action"),
                type: $("form").attr("method"),
                data: $("form").serialize(),
                success: function(resp11) {
                    if (resp11 === "error") {
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
                                window.location.href = "http://localhost/empresa/Parametrizar?";
                            });
                    }
                }
            });
        });
    }


    function buscarTransporte(valorid) {

        $.ajax({
            url: 'http://localhost/empresa/Transporte/mostrartransporte',
            type: 'post',
            data: {
                buscarIdUar: $('#buscarIdUar').val()
            },
            success: function(datas) {
                datos1t = $.parseJSON(datas);
                //console.log(datos1t);
                $('#tablaDataTrans').empty();
                for (var i = 0; i < datos1t.length; i++) {
                    //window.location.href = "http://localhost/empresa/cuenta?";
                    $('#tablaDataTrans').append(
                        '<tr>' +
                        '<td>' + datos1t[i]["idTransporte"] + '</td>' +
                        '<td>' + datos1t[i]["tipoTransporte"] + '</td>' +
                        '<td>' + datos1t[i]["descripcionTransporte"] + '</td>' +
                        '<td>' + datos1t[i]["valorTransporte"] + '</td>' +
                        '<td>' + datos1t[i]["fechaTransporte"] + '</td>' +
                        '<td>' + datos1t[i]["Usuario_idUsuario"] + '</td>' +
                        '<td>' + datos1t[i]["Estado_idEstado"] + '</td>' +
                        '<td><button type="button" class="btn btn-default" id="oktranspor' + i + '"  data-toggle="modal" data-target="#modificaTransporte">Modificar</button></td>' +
                        '</tr>');
                    modificarTransporte(datos1t, i);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function modificarTransporte(datos1, i) {
        $('#oktranspor' + i).click(function() {
            $('#consultransporte').modal('hide');
            $('#idT').val(datos1[i]["idTransporte"]);
            $('#tipoTransporte').val(datos1[i]["tipoTransporte"]);
            $('#descripcionTransporte').val(datos1[i]["descripcionTransporte"]);
            $('#valorTransporte').val(datos1[i]["valorTransporte"]);
            $("#EstadoTrans option[value=" + datos1[i]["Estado_idEstado"] + "]").attr("selected", true);

        });
        $('#ModificarTransporte').click(function() {
            $.ajax({
                url: 'http://localhost/empresa/Transporte/modificatransporte',
                type: 'post',
                data: {
                    tipoTransporte: $('#tipoTransporte').val(),
                    descripcionTransporte: $('#descripcionTransporte').val(),
                    valorTransporte: $('#valorTransporte').val(),
                    EstadoTrans: $('#EstadoTrans').val(),
                    idT: $('#idT').val()
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


    function mostrartodo(valor) {
        $.ajax({
            url: 'http://localhost/empresa/Transporte/mostrartiemporealTransporte',
            type: 'POST',
            data: {
                searchTransporte: $('#searchTransporte').val(),
                idusuaTrans: $('#idusuaTrans').val()
            },
            success: function(data) {
                //console.log(data);
                datos1 = $.parseJSON(data);
                $('#appendTransporte').empty();
                for (var i = 0; i < datos1.length; i++) {
                    $('#appendTransporte').append(
                        '<a class="dropdown-item" id="mostra' + i + '">' + datos1[i]["tipoTransporte"] + '<a><br>'
                        //'<span id="most' + i + '">' + datos1[i]["nombreMaquinaria"] + '</span><br>'                        
                    );
                    creareventoclicTrans(i, datos1[i]);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        })
    }

    function creareventoclicTrans(parametro, datostran) {
        $('#mostra' + parametro).click(function() {
            //console.log(datosmaq);
            $('#searchTransporte').val(datostran["tipoTransporte"]);
            $('#appendTransporte').empty();
            valorDelTransporte = datostran["valorTransporte"];

        });
    }

    function hallarvidautilTransporte() {

        vidaUtilTransporte = $('#vidaTransporte').val();
        $('#vdutiltransporte').empty();

        meses = vidaUtilTransporte * 12;
        depresiacionanual = parseInt(valorDelTransporte) / parseInt(meses);
        depreciacionacomulada = depresiacionanual;
        valorneto = valorDelTransporte - depreciacionacomulada;

        for (var i = 1; i <= meses; i++) {
            //window.location.href = "http://localhost/empresa/consultas?";
            $('#vdutiltransporte').append(
                '<tr>' +
                '<td>' + i + '</td>' +
                '<td>' + depresiacionanual + '</td>' +
                '<td>' + depreciacionacomulada + '</td>' +
                '<td>' + valorneto + '</td>' +
                '</tr>'
            );

            depreciacionacomulada = depreciacionacomulada + depresiacionanual;
            valorneto = valorDelTransporte - depreciacionacomulada;
        }
        $('#vidaUtilTranporte').modal('hide');
    }
});