function enviarEncuesta(){
	var valor = [];
	var boton = [];
	$("input:checked").each(function() {
	  valor.push($(this).val());
	});
	var rate = $('#rate').val();
	var suggestions = $('#suggestions').val();
	var future = $('#future').val();
	var rate = $(".button-select").text();
	$($(':checkbox').prop('checked', true)).each(function() {
	  console.log($(this));
	});
	/*addLoading('idEncuesta');
	setTimeout(function(){ 
		stopLoading('idEncuesta')
	}, 4000);*/
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