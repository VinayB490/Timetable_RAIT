$(document).ready(function(){
	console.log('hello');
	
		var tbsem=$('#tbsem').val();
		console.log(tbsem+"\n");

	$('#mon1 #tbtype').on('change',function(){
		tbtype=$('#mon1 #tbtype').val();
		console.log(tbtype+'\n');


		$('#mon1 #tbcourse').prop("disabled",false);
		$('#mon1 #tbtname').prop("disabled",false);
		$('#mon1 #tbdesc').prop("disabled",false);


	if(tbtype=="Theory")
	{
	 	$.ajax('pqr.php')
			.done(function(response){
			$('#mon1 #tbcourse').empty();
			$('#mon1 #tbtname').empty();
			$('#mon1 #tbcourse').append(response);
			console.log(response)
			})
			.fail(function(request,errorType,errorMessage){
			alert(errorMessage);
			console.log(errorType);
			})

			// 	$.ajax('abc.php')
			// .done(function(response){
			// $('#mon1 #tbtname').empty();
			// $('#mon1 #tbtname').append(response);
			// console.log(response)
			// })
			// .fail(function(request,errorType,errorMessage){
			// alert(errorMessage);
			// console.log(errorType);
			// })
			

	}
	else if(tbtype=="Lab")
	{
	 	$.ajax('pqrlab.php')
			.done(function(response){
			$('#mon1 #tbcourse').empty();
			$('#mon1 #tbtname').empty();
			$('#mon1 #tbcourse').append(response);
			console.log(response)
			})
			.fail(function(request,errorType,errorMessage){
			alert(errorMessage);
			console.log(errorType);
			})
	}
	else{
		// document.getElementById('#mon1 #tbcourse').disabled=true;
		$('#mon1 #tbcourse').empty();
		$('#mon1 #tbcourse').prop("disabled",true);
		$('#mon1 #tbtname').empty();
		$('#mon1 #tbtname').prop("disabled",true);
		$('#mon1 #tbdesc').empty();
		$('#mon1 #tbdesc').prop("disabled",true);
	}
	
	});
	$('#mon1 #tbcourse1').on('change',function(){
			$('#mon1 #tbtname').prop("disabled",false);
		console.log($('#mon1 #tbcourse').val());
		var tbcid=$('#mon1 #tbcourse option:selected').attr('id');
		console.log(tbcid);
				$.ajax('abc.php')
			.done(function(response){
			$('#mon1 #tbtname').empty();
			$('#mon1 #tbtname').append(response);
			console.log(response);
			
			$('#mon1 #tbtname option[id='+tbcid+']').attr('selected','selected');
			$('#mon1 #tbtname').prop("disabled",true);
			})
			.fail(function(request,errorType,errorMessage){
			alert(errorMessage);
			console.log(errorType);
			})
	});

	$('#mon2 #tbtype').on('change',function(){
		tbtype=$('#mon2 #tbtype').val();
		console.log(tbtype+'\n');

	});


});