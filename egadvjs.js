$(document).ready(function(){
	console.log('hello');
	
		var tbsem=$('#tbsem').val();
		console.log(tbsem+"\n");
		$('#tbtype').on('change',function(){
			console.log('hii')
		});

	$('#tbtype').on('change',function(){
		// var x=$(this).parent();
		// console.log(x)
		// x=$(this).closest();
		// console.log(x)
		x=$(this).parent().parent().parent().parent().parent().parent();
		x=x.attr('id');
		console.log(x)
		tbtype=$('#tbtype').val();
		console.log(tbtype+'\n');


		$('#'+x+' #tbcourse').prop("disabled",false);
		$('#'+x+' #tbtname').prop("disabled",false);
		$('#'+x+' #tbdesc').prop("disabled",false);


	if(tbtype=="Theory")
	{
	 	$.ajax('pqr.php')
			.done(function(response){
			$('#'+x+' #tbcourse').empty();
			$('#'+x+' #tbtname').empty();
			$('#'+x+' #tbcourse').append(response);
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
			$('#'+x+' #tbcourse').empty();
			$('#'+x+' #tbtname').empty();
			$('#'+x+' #tbcourse').append(response);
			console.log(response)
			})
			.fail(function(request,errorType,errorMessage){
			alert(errorMessage);
			console.log(errorType);
			})
	}
	else{
		// document.getElementById('#mon1 #tbcourse').disabled=true;
		$('#'+x+' #tbcourse').empty();
		$('#'+x+' #tbcourse').prop("disabled",true);
		$('#'+x+' #tbtname').empty();
		$('#'+x+' #tbtname').prop("disabled",true);
		$('#'+x+' #tbdesc').empty();
		$('#'+x+' #tbdesc').prop("disabled",true);
	}
	
	});
	$('#tbcourse1').on('change',function(){
		var x=$(this).parent().parent().parent().parent().parent();
		x=x.attr('id');
		console.log(x);

			$('#'+x+' #tbtname').prop("disabled",false);
		console.log($('#'+x+' #tbcourse').val());
		var tbcid=$('#'+x+' #tbcourse option:selected').attr('id');
		console.log(tbcid);
				$.ajax('abc.php')
			.done(function(response){
			$('#'+x+' #tbtname').empty();
			$('#'+x+' #tbtname').append(response);
			console.log(response);
			
			$('#'+x+' #tbtname option[id='+tbcid+']').attr('selected','selected');
			$('#'+x+' #tbtname').prop("disabled",true);
			})
			.fail(function(request,errorType,errorMessage){
			alert(errorMessage);
			console.log(errorType);
			})
	});

	// $('#mon2 #tbtype').on('change',function(){
	// 	tbtype=$('#mon2 #tbtype').val();
	// 	console.log(tbtype+'\n');

	// });


});