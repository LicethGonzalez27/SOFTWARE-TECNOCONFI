$(document).ready(function() {

	$("#okentradas").click(function(){
		buscartodasentradas();
	});

    $("#okVentas").click(function(){
        buscarVentas();
    });

	$(document).on("ready", entra);

	function entra(){
		$("#form-create-entradas").submit(function (event){
			event.preventDefault();

			$.ajax({
				url:$("form").attr("action"),
				type:$("form").attr("method"),
				data:$("form").serialize(),
				success:function(resp){

					if(resp==="error"){
						swal(
                                'Error',
                                'Datos No Fueron Registrados',
                                'error'
                            );
					}
					else{										
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
	}

	function buscartodasentradas(valor){	

	$.ajax({
            url: 'http://localhost/empresa/RegEntradas/mostrarEntradas',
            type: 'post',
            data: {
            buscarIdusu:$('#buscarIdusu').val()
            },
            success: function(data) {
                datos12345 = $.parseJSON(data);
                //console.log(datos12345);
                $('#tablaDataEntrada').empty();
                for (var i = 0; i < datos12345.length; i++) {               
                $('#tablaDataEntrada').append(
                	'<tr>'+
                	'<td>'+ datos12345[i]["idMovimientoEntrada"]+'</td>'+
                    '<td>'+ datos12345[i]["cantidadMovimientoEntrada"]+'</td>'+
                	'<td>'+ datos12345[i]["detalleMovimientoEntrada"]+'</td>'+
                	'<td>'+ datos12345[i]["fechaMovimientoEntrada"]+'</td>'+
                	'<td>'+ datos12345[i]["valorMovimientoEntrada"]+'</td>'+
                	'<td>'+ datos12345[i]["Cuenta_idCuenta"]+'</td>'+
                	'<td>'+ datos12345[i]["Terceros_idTerceros"]+'</td>'+
                	'<td>'+ datos12345[i]["Cultivo_idCultivo"]+'</td>'+
                	'<td>'+ datos12345[i]["Usuario_idUsuario"]+'</td>'+
                	'<td><button type="button" class="btn btn-default" id="okentrada' + i + '"  data-toggle="modal" data-target="#modificaEntrada">Modificar</button></td>' +
                	'</tr>');      
                	modificarEntrada(datos12345, i);         
                }                
            },
            error: function(xhr) {
                
                console.log(xhr.responseText);
            }
        });
	}
	function modificarEntrada(datos12345, i) {
        $('#okentrada' + i).click(function() {
            $('#consulEntrada').modal('hide');
            $('#idEnt').val(datos12345[i]["idMovimientoEntrada"]);
            $('#cantEnt').val(datos12345[i]["cantidadMovimientoEntrada"]);
            $('#detaEntrada').val(datos12345[i]["detalleMovimientoEntrada"]);
            $('#valorEntrada').val(datos12345[i]["valorMovimientoEntrada"]);           
        });
         $('#ModificarMovimiento ').click(function() {
                $.ajax({
                    url: 'http://localhost/empresa/RegEntradas/modificarEntradas',
                    type: 'post',
                    data: {
                        idEnt: $('#idEnt').val(),
                        cantEnt: $('#cantEnt').val(),
                        detaEntrada: $('#detaEntrada').val(),
                        valorEntrada: $('#valorEntrada').val()
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
