<?php
session_start();
$conn=mysqli_connect("localhost","root","","timetable")or die("connection not established");
$tbsem = $_SESSION['tbsemtp'];
$tbclass=$_SESSION['tbclass'] ;
$tbdept=$_SESSION['tbdept'];
$tbdiv=$_SESSION['tbdiv'] ;
$tbroom=$_SESSION['tbroom'];
$tbstart=$_SESSION['tbstart'];

$tabletb=$tbdept.$tbclass.$tbdiv.$tbstart;
echo $tabletb;
 
?>
<!DOCTYPE html>

<html>
<head>
	<title>eg</title>  
	<script src="js/jquery.js">
		</script> 
		<style type="text/css">
			.the {
				background-color: yellow;
			}
			.lba{
				background-color: violet;
			}
			.brk{
				background-color: silver;
			}
		</style>  
</head>
<body>
<center><script type="text/javascript">

	function sub(x){
		
		console.log(x);
		tbtype=$('#'+x+' #tbtype').val();
		console.log(tbtype+'\n');


		$('#'+x+' #tbcourse').prop("disabled",false);
		$('#'+x+' #tbtname').prop("disabled",false);
		$('#'+x+' #tbdesc').prop("disabled",false);


	if(tbtype=="Theory")
	{	$('#'+x+'').attr('class','');
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
			var y='<?php echo $tbroom;?>';
			$('#'+x+' #tbdesc').val(y);
			$('#'+x+'').attr('class','the');
			// $('#'+x+'').addClass('the');
	}
	else if(tbtype=="Lab")
	{	$('#'+x+'').attr('class','');
		$('#'+x+'').attr('class','lba');
		$('#'+x+' #tbdesc').val('');
		
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
		$('#'+x+'').attr('class','');
		// document.getElementById('#mon1 #tbcourse').disabled=true;
		$('#'+x+' #tbcourse').empty();
		$('#'+x+' #tbcourse').append("<option value=.>.</option>");
		// $('#'+x+' #tbcourse').prop("disabled",true);
		$('#'+x+' #tbtname').empty();
		$('#'+x+' #tbtname').append("<option value=.>.</option>");
		// $('#'+x+' #tbtname').prop("disabled",true);
		$('#'+x+' #tbdesc').empty();
		$('#'+x+' #tbdesc').val('');
		// $('#'+x+' #tbdesc').prop("disabled",true);
		$('#'+x+'').attr('class','brk');
	}

	}
	
	function fac(x) {
		
		console.log(x);

			$('#'+x+' #tbtname').prop("disabled",false);
		console.log($('#'+x+' #tbcourse').val());
		var tbcid=$('#'+x+' #tbcourse option:selected').attr('id');
		console.log(tbcid);
				$.ajax('abc.php')
			.done(function(response){
			$('#'+x+' #tbtname').empty();
			$('#'+x+' #tbtname').append(response);
			$('#'+x+' #tbtname option[id='+tbcid+']').attr('selected','selected');
			$('#'+x+' #tbtname').prop("disabled",false);
			tbtype=$('#'+x+' #tbtype').val();
			if(tbtype=="Lab"){
			var	lr=prompt("Enter Block for LAB "+$('#'+x+' #tbcourse').val()+" ");
			if (lr!=''&&lr!=null) {
			console.log($('#'+x+' #tbcourse').val()+" '"+$('#'+x+' #tbtname').val()+"' "+lr+"\\r");
			lry=$('#'+x+' #tbcourse').val()+" "+$('#'+x+' #tbtname').val()+" "+lr+" ,  ";
			var lrt =$('#'+x+' #tbdesc').val();
			lrt=lrt+lry;
			$('#'+x+' #tbdesc').val(lrt);
			alert('Select another batch & subject for practicals/LAB !! ');
			}
			$('#'+x+' #tbcourse').val('.');
			$('#'+x+' #tbtname').val('.');
			$('#'+x+' #tbcourse').focus();
			}
			
			})
			.fail(function(request,errorType,errorMessage){
			alert(errorMessage);
			console.log(errorType);
			})
			
	}
	
	



</script>
 <?php 
 function readypage(){
	# code...

$conn=mysqli_connect("localhost","root","","timetable")or die("connection not established");
$tbsem = $_SESSION['tbsemtp'];
$tbclass=$_SESSION['tbclass'] ;
$tbdept=$_SESSION['tbdept'];
$tbdiv=$_SESSION['tbdiv'] ;
$tbroom=$_SESSION['tbroom'];
$tbstart=$_SESSION['tbstart'];

$tabletb=$tbdept.$tbclass.$tbdiv.$tbstart;


	?>

<?php
	 $dy= array('mon','tue','wed','thu','fri'); 
	for($di=1;$di<9;$di++){
	$querya="select * from ".$tabletb." where id='$di';";
	$runa=mysqli_query($conn,$querya)or die('alert');
	$rowa= mysqli_fetch_assoc($runa);
		for ($dj = 0; $dj<5;$dj++) {
			// $ptypep=;
			$_SESSION['dij']= 1;
	$pptype=$rowa[$dy[$dj].'type'];
	$ppsub=$rowa[$dy[$dj].'sub'];
	$ppfac=$rowa[$dy[$dj].'fac'];
	$ppblk=$rowa[$dy[$dj].'blk'];
	// $_SESSION['ppsuba']= $ppsub;
?>

	console.log('<?php echo $pptype." ".$ppsub." ".$ppfac." ".$ppblk." " ; ?>');
	$('#<?php echo $dy[$dj].$di; ?> #tbtype').val('<?php echo $pptype; ?>');
	 sub("<?php echo $dy[$dj].$di; ?>"); 
	if("<?php echo$pptype; ?>"=="Theory")
	{
	
	$('#<?php echo $_SESSION['dij']; ?> #tbcourse option[value="<?php echo$ppsub; ?>"]').attr('selected','selected');
	 
	$('#<?php echo $_SESSION['dij']; ?> #tbtname option[value="<?php echo$ppfac; ?>"]').attr('selected','selected');

 	}
	<!-- $('#<?php echo $dy[$dj].$di; ?> #tbtname').val('<?php echo $ppfac; ?>'); -->
	$('#<?php echo $dy[$dj].$di; ?> #tbdesc').val('<?php echo $ppblk; ?>');


<?php	
			}
		}
}	
$_SESSION['dij']=0;	 			
?>
 
	<form name="tb" method="post" action="eg.php">
		<table id="tbdetails">
		<tr><td>SEM. :</td><td><input type="label" name="tbsem" id="tbsem" value="<?php echo $tbsem;?>" disabled> </td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td>DEPT. :</td><td><input type="label" name="tbdept" id="tbdept" value="<?php echo $tbdept;?>" disabled> </td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td>CLASS :</td><td><input type="label" name="tbclass" id="tbclass" value="<?php echo $tbclass;?>" disabled> </td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td>DIV. :</td><td><input type="label" name="tbdiv" id="tbdiv" value="<?php echo $tbdiv;?>" disabled> </td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td>ROOM No. :</td><td><input type="label" name="tbroom" id="tbroom" value="<?php echo $tbroom;?>" disabled> </td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td>START TIME :</td><td><input type="label" name="tbstart" id="tbstart" value="<?php echo $tbstart;?>" disabled> </td></tr>
		<tr><td colspan="2"></td></tr>
	</table>
	<!-- </form> -->

<table border="2" id="tblec" bordercolor="red" >
<tr style="text-align:center;">
	<td>day\<br>time</td>
	<td>08:30 - 09:30</td>
	<td>09:30 - 10:30</td>

	<td>10:30 - 11:30</td>
	<td>11:30 - 12:30</td>
	<td>12:30 - 01:30</td>

	<td>01:30 - 02:30</td>
	<td>02:30 - 03:30</td>
	<td>03:30 - 04:30</td>
	
</tr>	
<tr>
	<td>Mon</td>
	<td  id="mon1">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype1" id="tbtype"  onchange="sub('mon1')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub1" id="tbcourse" onchange="fac('mon1')"  >
	<option>.</option>
	</select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac1" id="tbtname" onchange="fac('mon1')"  >
		
	<option>.</option>
	</select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk1" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>

	<td  id="mon2">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype2" id="tbtype"  onchange="sub('mon2')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub2" id="tbcourse" onchange="fac('mon2')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac2" id="tbtname"   onchange="fac('mon2')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk2" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>
	<td  id="mon3">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype3" id="tbtype"  onchange="sub('mon3')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub3" id="tbcourse" onchange="fac('mon3')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac3" id="tbtname"   onchange="fac('mon3')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk3" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
	<td  id="mon4">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype4" id="tbtype"  onchange="sub('mon4')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub4" id="tbcourse" onchange="fac('mon4')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac4" id="tbtname"   onchange="fac('mon4')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk4" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="mon5">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype5" id="tbtype"  onchange="sub('mon5')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub5" id="tbcourse" onchange="fac('mon5')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac5" id="tbtname"   onchange="fac('mon5')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk5" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="mon6">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype6" id="tbtype"  onchange="sub('mon6')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub6" id="tbcourse" onchange="fac('mon6')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac6" id="tbtname"   onchange="fac('mon6')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk6" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	
	</td>
	<td  id="mon7">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype7" id="tbtype"  onchange="sub('mon7')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub7" id="tbcourse" onchange="fac('mon7')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac7" id="tbtname"   onchange="fac('mon7')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk7" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="mon8">
	<!-- <form name="fmon2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="montype8" id="tbtype"  onchange="sub('mon8')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="monsub8" id="tbcourse" onchange="fac('mon8')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="monfac8" id="tbtname"   onchange="fac('mon8')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="monblk8" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
</tr>
<tr>
	<td>Tue</td>
	<td  id="tue1">
		<!-- <form name="ftue1"> -->
	<table ><tr><td>
	Lec. type:</td><td  >
	<select name="tuetype1" id="tbtype" onchange="sub('tue1')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub1" id="tbcourse" onchange="fac('tue1')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac1" id="tbtname"   onchange="fac('tue1')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk1" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>

	<td  id="tue2">
	<!-- <form name="ftue2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="tuetype2" id="tbtype"  onchange="sub('tue2')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub2" id="tbcourse" onchange="fac('tue2')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac2" id="tbtname"   onchange="fac('tue2')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk2" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>
	<td  id="tue3">
	<!-- <form name="ftue2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="tuetype3" id="tbtype"  onchange="sub('tue3')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub3" id="tbcourse" onchange="fac('tue3')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac3" id="tbtname"   onchange="fac('tue3')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk3" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
	<td  id="tue4">
	<!-- <form name="ftue2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="tuetype4" id="tbtype"  onchange="sub('tue4')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub4" id="tbcourse" onchange="fac('tue4')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac4" id="tbtname"   onchange="fac('tue4')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk4" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="tue5">
	<!-- <form name="ftue2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="tuetype5" id="tbtype"  onchange="sub('tue5')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub5" id="tbcourse" onchange="fac('tue5')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac5" id="tbtname"   onchange="fac('tue5')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk5" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="tue6">
	<!-- <form name="ftue2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="tuetype6" id="tbtype"  onchange="sub('tue6')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub6" id="tbcourse" onchange="fac('tue6')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac6" id="tbtname"   onchange="fac('tue6')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk6" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	
	</td>
	<td  id="tue7">
	<!-- <form name="ftue2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="tuetype7" id="tbtype"  onchange="sub('tue7')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub7" id="tbcourse" onchange="fac('tue7')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac7" id="tbtname"   onchange="fac('tue7')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk7" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="tue8">
	<!-- <form name="ftue2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="tuetype8" id="tbtype"  onchange="sub('tue8')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="tuesub8" id="tbcourse" onchange="fac('tue8')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="tuefac8" id="tbtname"   onchange="fac('tue8')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="tueblk8" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
</tr>
<tr>
	<td>Wed</td>
	<td  id="wed1">
		<!-- <form name="fwed1"> -->
	<table ><tr><td>
	Lec. type:</td><td  >
	<select name="wedtype1" id="tbtype" onchange="sub('wed1')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub1" id="tbcourse" onchange="fac('wed1')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac1" id="tbtname"   onchange="fac('wed1')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk1" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>

	<td  id="wed2">
	<!-- <form name="fwed2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="wedtype2" id="tbtype"  onchange="sub('wed2')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub2" id="tbcourse" onchange="fac('wed2')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac2" id="tbtname"   onchange="fac('wed2')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk2" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>
	<td  id="wed3">
	<!-- <form name="fwed2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="wedtype3" id="tbtype"  onchange="sub('wed3')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub3" id="tbcourse" onchange="fac('wed3')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac3" id="tbtname"   onchange="fac('wed3')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk3" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
	<td  id="wed4">
	<!-- <form name="fwed2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="wedtype4" id="tbtype"  onchange="sub('wed4')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub4" id="tbcourse" onchange="fac('wed4')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac4" id="tbtname"   onchange="fac('wed4')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk4" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="wed5">
	<!-- <form name="fwed2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="wedtype5" id="tbtype"  onchange="sub('wed5')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub5" id="tbcourse" onchange="fac('wed5')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac5" id="tbtname"   onchange="fac('wed5')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk5" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="wed6">
	<!-- <form name="fwed2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="wedtype6" id="tbtype"  onchange="sub('wed6')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub6" id="tbcourse" onchange="fac('wed6')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac6" id="tbtname"   onchange="fac('wed6')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk6" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	
	</td>
	<td  id="wed7">
	<!-- <form name="fwed2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="wedtype7" id="tbtype"  onchange="sub('wed7')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub7" id="tbcourse" onchange="fac('wed7')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac7" id="tbtname"   onchange="fac('wed7')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk7" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="wed8">
	<!-- <form name="fwed2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="wedtype8" id="tbtype"  onchange="sub('wed8')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="wedsub8" id="tbcourse" onchange="fac('wed8')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="wedfac8" id="tbtname"   onchange="fac('wed8')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="wedblk8" id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
</tr>
<tr>
	<td>Thu</td>
	<td  id="thu1">
		<!-- <form name="fthu1"> -->
	<table ><tr><td>
	Lec. type:</td><td  >
	<select name="thutype1" id="tbtype" onchange="sub('thu1')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub1" id="tbcourse" onchange="fac('thu1')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac1" id="tbtname"   onchange="fac('thu1')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk1"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>

	<td  id="thu2">
	<!-- <form name="fthu2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="thutype2" id="tbtype"  onchange="sub('thu2')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub2" id="tbcourse" onchange="fac('thu2')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac2" id="tbtname"   onchange="fac('thu2')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk2"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>
	<td  id="thu3">
	<!-- <form name="fthu2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="thutype3" id="tbtype"  onchange="sub('thu3')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub3" id="tbcourse" onchange="fac('thu3')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac3" id="tbtname"   onchange="fac('thu3')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk3"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
	<td  id="thu4">
	<!-- <form name="fthu2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="thutype4" id="tbtype"  onchange="sub('thu4')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub4" id="tbcourse" onchange="fac('thu4')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac4" id="tbtname"   onchange="fac('thu4')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk4"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="thu5">
	<!-- <form name="fthu2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="thutype5" id="tbtype"  onchange="sub('thu5')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub5" id="tbcourse" onchange="fac('thu5')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac5" id="tbtname"   onchange="fac('thu5')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk5"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="thu6">
	<!-- <form name="fthu2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="thutype6" id="tbtype"  onchange="sub('thu6')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub6" id="tbcourse" onchange="fac('thu6')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac6" id="tbtname"   onchange="fac('thu6')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk6"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	
	</td>
	<td  id="thu7">
	<!-- <form name="fthu2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="thutype7" id="tbtype"  onchange="sub('thu7')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub7" id="tbcourse" onchange="fac('thu7')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac7" id="tbtname"   onchange="fac('thu7')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk7"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="thu8">
	<!-- <form name="fthu2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="thutype8" id="tbtype"  onchange="sub('thu8')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="thusub8" id="tbcourse" onchange="fac('thu8')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="thufac8" id="tbtname"   onchange="fac('thu8')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="thublk8"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
</tr>
<tr>
	<td>Fri</td>
	<td  id="fri1">
		<!-- <form name="ffri1"> -->
	<table ><tr><td>
	Lec. type:</td><td  >
	<select name="fritype1"  id="tbtype" onchange="sub('fri1')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub1"  id="tbcourse" onchange="fac('fri1')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac1"  id="tbtname"   onchange="fac('fri1')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk1"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>

	<td  id="fri2">
	<!-- <form name="ffri2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="fritype2"  id="tbtype"  onchange="sub('fri2')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option>	 -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub2"  id="tbcourse" onchange="fac('fri2')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac2"  id="tbtname"   onchange="fac('fri2')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk2"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
		</td>
	<td  id="fri3">
	<!-- <form name="ffri2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="fritype3"  id="tbtype"  onchange="sub('fri3')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub3"  id="tbcourse" onchange="fac('fri3')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac3"  id="tbtname"   onchange="fac('fri3')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk3"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	
	<td  id="fri4">
	<!-- <form name="ffri2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="fritype4"  id="tbtype"  onchange="sub('fri4')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub4"  id="tbcourse" onchange="fac('fri4')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac4"  id="tbtname"   onchange="fac('fri4')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk4"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="fri5">
	<!-- <form name="ffri2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="fritype5"  id="tbtype"  onchange="sub('fri5')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub5"  id="tbcourse" onchange="fac('fri5')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac5"  id="tbtname"   onchange="fac('fri5')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk5"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="fri6">
	<!-- <form name="ffri2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="fritype6"  id="tbtype"  onchange="sub('fri6')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub6"  id="tbcourse" onchange="fac('fri6')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac6"  id="tbtname"   onchange="fac('fri6')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk6"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	
	</td>
	<td  id="fri7">
	<!-- <form name="ffri2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="fritype7"  id="tbtype"  onchange="sub('fri7')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<!-- <option>.</option> -->
	</select> 
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub7"  id="tbcourse" onchange="fac('fri7')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac7"  id="tbtname"   onchange="fac('fri7')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk7"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>
	<td  id="fri8">
	<!-- <form name="ffri2"> -->
	<table ><tr><td>
	Lec. type:</td><td >
	<select name="fritype8"  id="tbtype" onchange="sub('fri8')">
	<option>.</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<option value="break">Break</option>  
	<option>.</option></select>
	</td></tr><tr><td>
	Sub.:</td><td  id="tbcourse1">
	<select name="frisub8"  id="tbcourse" onchange="fac('fri8')">
	
	<option>.</option></select>
	</td></tr><tr><td>
	Teacher:</td><td>
	<select name="frifac8"  id="tbtname"   onchange="fac('fri8')">
		
	<option>.</option></select>
	</td></tr><tr><td colspan="2">
	<textarea name="friblk8"  id="tbdesc" placeholder="Enter Room no " cols="20" rows="4"></textarea>
	</td></tr>
	</table>
	<!-- </form> -->
	</td>

</tr>


</table>
<br>
	<input type="submit" name="submit" value="SUBMIT" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="display"  value="Display" >
	<!-- onclick="fun()" -->
</form>
<?php

if(isset($_POST['submit'])){
echo "HI<br>";
echo $tabletb;
$ab='eg';
	 $dy= array('mon','tue','wed','thu','fri'); 
	 for($di=1;$di<9;$di++){
		for ($dj = 0; $dj<5;$dj++) {
			// $ptypep=;

	$ptype=$_POST[$dy[$dj].'type'.$di];
	$psub=$_POST[$dy[$dj].'sub'.$di];
	$pfac=$_POST[$dy[$dj].'fac'.$di];
	$pblk=$_POST[$dy[$dj].'blk'.$di];

	echo $ptype." ".$psub." ".$pfac." ".$pblk." <br>";

	$query="update ".$tabletb." set ".$dy[$dj].'type'." ='$ptype',".$dy[$dj].'sub'."='$psub',".$dy[$dj].'fac'."='$pfac',".$dy[$dj].'blk'."='$pblk' where id='$di';";
	echo $query;
	$run=mysqli_query($conn,$query)or die('alert');
	}
		}

}
if(isset($_POST['display'])){

  echo "<script>window.location.href='./display.php';</script>";
 
}
 ?>
</center>

</body>
<script type="text/javascript">
		 $(document).ready(function(){
	 	// readypg();
	 	<?php 
	 	$_SESSION['dij']=1;
	 	readypage(); 
	 	
	 	?>
});
</script>
	<?php 
	 	$_SESSION['dij']=0;
	
	 	
	 	?>
</html>

