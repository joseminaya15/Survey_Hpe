function enviarEncuesta(){
	var valor = [];
	var boton = [];
	$("input:checked").each(function() {
	  valor.push($(this).val());
	});
	var suggestions = $('#suggestions').val();
	var future 		= $('#future').val();
	var rate 		= $(".button-select").find("span").text();
	//console.log(rate);
	$.ajax({
		data  : { valor 	  : valor,
				  suggestions : suggestions,
				  future 	  : future,
				  rate 		  : rate},
		url   : 'Inicio/enviarEncuesta',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				/*addLoading('idEncuesta');
					setTimeout(function(){ 
						stopLoading('idEncuesta')
					}, 4000);*/
        	}else {
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
	/*$($(':checkbox').prop('checked', true)).each(function() {
	  console.log($(this));
	});*/
}

function addLoading(id) {
	$('#'+id).append('<div class="opacity-card"><div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div></div>');
	componentHandler.upgradeAllRegistered();
}
function stopLoading(id) {
	$('#'+id).children('.opacity-card').remove();
}

function numberRange(id){
	var buttonSelect = $('#'+id+'.button-number');
	$('.button-number').removeClass('button-select');
	buttonSelect.addClass('button-select');
}