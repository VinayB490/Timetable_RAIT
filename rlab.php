
						<!DOCTYPE html>
						<html>
						<head>
							<title></title><script src="js/jquery.js">
		</script> 
						</head>
						<body><script type="text/javascript">
							function fun(){
		<?php  
	
	 $dy= array('mon','tue','wed','thu','fri');   
				for($di=1;$di<9;$di++){
					for ($dj = 0; $dj<5;$dj++) { ?>
							var a=$('#<?php echo $dy[$dj].$di; ?> #tbtype').val();
							var b=$('#<?php echo $dy[$dj].$di; ?> #tbcourse').val();
							var c=$('#<?php echo $dy[$dj].$di; ?> #tbtname').val();
							var d=$('#<?php echo $dy[$dj].$di; ?> #tbdesc').val();
							console.log(a+'\n'+b+'\n'+c+'\n'+d);

			<?php	}
				}
		 			
?>
}
</script >
						</body>
						<form id="fri8">
							<input type="text" name="tbtype" onkeyup="fun()">
							
						</form>
						</html>
	 
	// function func(){
 	// echo 'hi';
	// 	 $dy= array('mon','tue','wed','thu','fri');   
	// 			for($di=1;$di<9;$di++){
	// 				for ($dj = 0; $dj<5;$dj++) {
	// 					$a='<script>$('.$dy[$dj].$di.' #tbtype).val()</script>';
	// 				}
	// 			}
	//  } ?> 

	
	// 	function fun(){
	// 	<?php  
	
	//  $dy= array('mon','tue','wed','thu','fri');   
	// 			for($di=1;$di<9;$di++){
	// 				 ?>
	// 						var a=$('#<?php echo 'mon'.$di; ?> #tbtype').val();
	// 						var b=$('#<?php echo 'mon'.$di; ?> #tbcourse').val();
	// 						var c=$('#<?php echo 'mon'.$di; ?> #tbtname').val();
	// 						var d=$('#<?php echo 'mon'.$di; ?> #tbdesc').val();
	// 						console.log(a+'\n'+b+'\n'+c+'\n'+d);

						
	// 						a=$('#<?php echo 'tue'.$di; ?> #tbtype').val();
	// 						b=$('#<?php echo 'tue'.$di; ?> #tbcourse').val();
	// 						c=$('#<?php echo 'tue'.$di; ?> #tbtname').val();
	// 						d=$('#<?php echo 'tue'.$di; ?> #tbdesc').val();
	// 						console.log(a+'\n'+b+'\n'+c+'\n'+d);
						
	// 						a=$('#<?php echo 'wed'.$di; ?> #tbtype').val();
	// 						b=$('#<?php echo 'wed'.$di; ?> #tbcourse').val();
	// 						c=$('#<?php echo 'wed'.$di; ?> #tbtname').val();
	// 						d=$('#<?php echo 'wed'.$di; ?> #tbdesc').val();
	// 						console.log(a+'\n'+b+'\n'+c+'\n'+d);

	// 						a=$('#<?php echo 'thu'.$di; ?> #tbtype').val();
	// 						b=$('#<?php echo 'thu'.$di; ?> #tbcourse').val();
	// 						c=$('#<?php echo 'thu'.$di; ?> #tbtname').val();
	// 						d=$('#<?php echo 'thu'.$di; ?> #tbdesc').val();
	// 						console.log(a+'\n'+b+'\n'+c+'\n'+d);

	// 						a=$('#<?php echo 'fri'.$di; ?> #tbtype').val();
	// 						b=$('#<?php echo 'fri'.$di; ?> #tbcourse').val();
	// 						c=$('#<?php echo 'fri'.$di; ?> #tbtname').val();
	// 						d=$('#<?php echo 'fri'.$di; ?> #tbdesc').val();
	// 						console.log(a+'\n'+b+'\n'+c+'\n'+d);

	// 		<?php	
	// 			}
	// 	 		?>
	// }