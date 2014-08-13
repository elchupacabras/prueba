$(document).ready(function(){
	$("#fcontacto").submit(function( event ){
		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: 'send.php',
			data: $(this).serialize(),
			succes: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
			}
		});

		return false;

	});
});