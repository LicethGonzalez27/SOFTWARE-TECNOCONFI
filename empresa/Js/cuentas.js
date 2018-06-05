$(document).on("ready", cuentas);

function cuentas(){

	$("#form-buscarCuenta").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp1){
				if(resp1==="error"){
					swal(
                        'Error',
                        'Datos No Encontrados En La Base De Datos',
                        'error'
                    );
				}
				else{
					window.location.href = "http://localhost/empresa/RegEntradas?";		
				}
			}
		});
	});

	$("#form-buscarCuentasIn").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp1){
				if(resp1==="error"){
					swal(
                        'Error',
                        'Datos No Encontrados En La Base De Datos',
                        'error'
                    );
				}
				else{
					window.location.href = "http://localhost/empresa/RegEntradas?";		
				}
			}
		});
	});

	$("#form-buscarCuentaRecur").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp1){
				if(resp1==="error"){
					swal(
                        'Error',
                        'Datos No Encontrados En La Base De Datos',
                        'error'
                    );
				}
				else{
					window.location.href = "http://localhost/empresa/RegEntradas?";				
				}
			}
		});
	});
	
	$("#form-buscarCuentasTrans").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp1){
				if(resp1==="error"){
					swal(
                        'Error',
                        'Datos No Encontrados En La Base De Datos',
                        'error'
                    );
				}
				else{
					window.location.href = "http://localhost/empresa/RegEntradas?";		
				}
			}
		});
	});

	$("#form-buscarCuentasVentas").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp1){
				if(resp1==="error"){
					swal(
                        'Error',
                        'Datos No Encontrados En La Base De Datos',
                        'error'
                    );
				}
				else{
					
					window.location.href = "http://localhost/empresa/RegEntradas?";			
				}
			}
		});
	});
}