$(function(){
	$('#modalButton').click(function(){
		$('#modal').modal('show').find('#modalContent').load($(this).attr('value'));
	});
});

$(function(){
	$('.modalEditButton').click(function(){
		$('#modal').modal('show').find('#modalContent').load($(this).attr('value'));
		// alert('clicked')
	});
});