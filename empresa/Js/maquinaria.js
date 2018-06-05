$(document).ready(function() {

    var valorDeLaMaquinaria;
    var vidaUtil;

    var depreciacionacomulada;
    var depresiacionanual;
    var valorneto;

    $("#search").keydown(function() {
        mostrar();
    });

    $("#okmaquinaria").click(function() {
        buscarmaquinaria();
    });



    $("#consulVidaUtil").click(function() {
        hallarvidautil();
    });

    $(document).on("ready", maquinaria);

    function maquinaria() {
        $("#Form-crear-Maqui").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: $("form").attr("action"),
                type: $("form").attr("method"),
                data: $("form").serialize(),
                success: function(resp11) {
                    if (resp11 === "error") {
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
                            });
                    }
                }
            });
        });
    }

    function buscarmaquinaria(valor) {

        $.ajax({
            url: 'http://localhost/empresa/maquinarias/mostrarmaquinaria',
            type: 'post',
            data: {
                buscarIdU: $('#buscarIdU').val()
            },
            success: function(datas) {
                datos1 = $.parseJSON(datas);
                //console.log(datos1);
                $('#tablaDataMaqui').empty();
                for (var i = 0; i < datos1.length; i++) {
                    //window.location.href = "http://localhost/empresa/cuenta?";
                    $('#tablaDataMaqui').append(
                        '<tr>' +
                        '<td>' + datos1[i]["idMaquinaria"] + '</td>' +
                        '<td>' + datos1[i]["nombreMaquinaria"] + '</td>' +
                        '<td>' + datos1[i]["descrpcionMaquinaria"] + '</td>' +
                        '<td>' + datos1[i]["valorMaquinaria"] + '</td>' +
                        '<td>' + datos1[i]["fechaMaquinariaRe"] + '</td>' +
                        '<td>' + datos1[i]["Usuario_idUsuario"] + '</td>' +
                        '<td>' + datos1[i]["Estado_idEstado"] + '</td>' +
                        '<td><button type="button" class="btn btn-default" id="okmaqui' + i + '"  data-toggle="modal" data-target="#modificaMaquinaria">Modificar</button></td>' +
                        '</tr>');
                    modificarMaquinaria(datos1, i);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function modificarMaquinaria(datos1, i) {
        $('#okmaqui' + i).click(function() {
            $('#consulmaquina').modal('hide');
            $('#idM').val(datos1[i]["idMaquinaria"]);
            $('#nomMaquinaria').val(datos1[i]["nombreMaquinaria"]);
            $('#desMaquinaria').val(datos1[i]["descrpcionMaquinaria"]);
            $('#valoMaquinaria').val(datos1[i]["valorMaquinaria"]);
            $("#EstadoMaquin option[value=" + datos1[i]["Estado_idEstado"] + "]").attr("selected", true);

        });
        $('#ModificarMaquinaria').click(function() {
            $.ajax({
                url: 'http://localhost/empresa/maquinarias/modificamaquinaria',
                type: 'post',
                data: {
                    nomMaquinaria: $('#nomMaquinaria').val(),
                    desMaquinaria: $('#desMaquinaria').val(),
                    valorMaquinaria: $('#valoMaquinaria').val(),
                    EstadoMaquin: $('#EstadoMaquin').val(),
                    idM: $('#idM').val()
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


    function mostrar(valor) {
        $.ajax({
            url: 'http://localhost/empresa/maquinarias/mostrartiemporeal',
            type: 'POST',
            data: {
                search: $('#search').val(),
                idusuamaq: $('#idusuamaq').val()
            },
            success: function(data) {
                //console.log(data);
                datos1 = $.parseJSON(data);
                $('#appenddatos').empty();
                for (var i = 0; i < datos1.length; i++) {
                    $('#appenddatos').append(
                        '<a class="dropdown-item" id="most' + i + '">' + datos1[i]["nombreMaquinaria"] + '<a><br>'
                        //'<span id="most' + i + '">' + datos1[i]["nombreMaquinaria"] + '</span><br>'                        
                    );
                    creareventoclic(i, datos1[i]);
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        })
    }

    function creareventoclic(parametro, datosmaq) {
        $('#most' + parametro).click(function() {
            //console.log(datosmaq);
            $('#search').val(datosmaq["nombreMaquinaria"]);
            $('#appenddatos').empty();
            valorDeLaMaquinaria = datosmaq["valorMaquinaria"];

        });
    }

    function hallarvidautil() {
        //$('#vidaUtilmaquinaria').modal('hide');
        vidaUtil = $('#vidamaquinaria').val();
        $('#vdutil').empty();        
        meses = vidaUtil * 12;
        depresiacionanual = parseInt(valorDeLaMaquinaria) / parseInt(meses);
        depreciacionacomulada = depresiacionanual;
        valorneto = valorDeLaMaquinaria - depreciacionacomulada;

        for (var i = 1; i <= meses; i++) {
            //$('#myModalExito').modal('show');
            $('#vdutil').append(
                '<tr>' +
                '<td>' + i + '</td>' +
                '<td>' + depresiacionanual + '</td>' +
                '<td>' + depreciacionacomulada + '</td>' +
                '<td>' + valorneto + '</td>' +
                '</tr>'
            );

            depreciacionacomulada = depreciacionacomulada + depresiacionanual;
            valorneto = valorDeLaMaquinaria - depreciacionacomulada;
        }
        $('#vidaUtilmaquinaria').modal('hide');
    }

});
//Para crear las funciones se debe:
//1. crear variables locales valordelactivo y los añosdevida
//2. darles valor en creareventoclic
//3.crear funcion y utilizarlas