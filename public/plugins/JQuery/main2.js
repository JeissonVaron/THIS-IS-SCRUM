jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();

	jQuery.ajax({
		url:'../../Model/login.php',
		type: 'POST',
		dateType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){

		}
	})
	.done(function(respuesta){
		console.log(respuesta);
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});
