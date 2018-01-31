function enviarEncuesta(){
	addLoading('idEncuesta');
	setTimeout(function(){ 
		stopLoading('idEncuesta')
	}, 4000);
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
	if(buttonSelect.hasClass('button-select')){
    	buttonSelect.css("background-color","#F8B22C");
    }else{
    	buttonSelect.css("background-color","transparent");
    }
}