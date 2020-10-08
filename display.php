<?php
session_start();
$conn=mysqli_connect("localhost","root","","timetable")or die("connection not established");
$issem="asd";
$isdept="sa";
$tbsem = $_SESSION['tbsemtp'];

$tbclass=$_SESSION['tbclass'];  

$tbdept=$_SESSION['tbdept'];      

$tbdiv=$_SESSION['tbdiv'] ;
$tbroom=$_SESSION['tbroom'];
$tbstart=$_SESSION['tbstart'];

$tabletb=$tbdept.$tbclass.$tbdiv.$tbstart;

 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo$tabletb; ?></title>
	<script src="js/jquery.js">
		</script> 
</head>
<body><br><br><br><br><br><br>
	<?php 
	if($tbsem=="even"){
	 $issem="Even";
}elseif($tbsem=="odd"){
	 $issem="Odd";
}
if($tbdept=="IT"){
	$isdept="Information Technology";
}elseif($tbdept=="CE"){
	$disdept="Computer Engineering";
}elseif($tbdept=="EX"){
	$isdept="Electronics & Telecom. Engineering";
}elseif($tbdept=="IN"){
	$isdept="Instrumentation Engineering";
}elseif($tbdept=="ET"){
	$isdept="Electronics Engineering";
}
	?>
<center>
	<form name="tb" method="post" action="eg.php">
	<!-- </form> -->
<table border="2" id="tblec" bordercolor="black" >
<tr style="text-align:center;"><td colspan="7">Department of&nbsp;&nbsp;<b><?php echo$isdept; ?></b></td><td rowspan="4" colspan="2"><img src="dylogo.jpg" height="100" width="230" ></td> </tr>
<tr style="text-align:center;"  bordercolor="white" ><td colspan="7">Sem: <b><?php echo$issem; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class: <b><?php echo$tbclass; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Div: <b><?php echo$tbdiv; ?></b></td></tr>
<tr style="text-align:center;"><td colspan="7">Class Counsellor: <b></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Room No.: <b><?php echo$tbroom; ?></b></td>
</tr>
<tr style="text-align:center;"><td colspan="7"> **************** <b>TIME TABLE</b> ****************</td></tr>
<tr style="text-align:center;">
	<td>.<br>.</td>
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
	<textarea name="monblk1" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="mon2">
	<textarea name="monblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="mon3">
	<textarea name="monblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="mon4">
	<textarea name="monblk4" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="mon5">
	<textarea name="monblk5" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="mon6">
	<textarea name="monblk6" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="mon7">
	<textarea name="monblk7" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="mon8">	
	<textarea name="monblk8" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	
</tr>
<tr>
	<td>Tue</td>
	<td  id="tue1">
	<textarea name="tueblk1" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="tue2">
	<textarea name="tueblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="tue3">
	<textarea name="tueblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="tue4">
	<textarea name="tueblk4" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="tue5">
	<textarea name="tueblk5" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="tue6">
	<textarea name="tueblk6" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="tue7">
	<textarea name="tueblk7" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="tue8">	
	<textarea name="tueblk8" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
</tr>
<tr>
	<td>Wed</td>
		<td  id="wed1">
	<textarea name="wedblk1" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="wed2">
	<textarea name="wedblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="wed3">
	<textarea name="wedblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="wed4">
	<textarea name="wedblk4" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="wed5">
	<textarea name="wedblk5" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="wed6">
	<textarea name="wedblk6" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="wed7">
	<textarea name="wedblk7" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="wed8">	
	<textarea name="wedblk8" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>

</tr>
<tr>
	<td>Thu</td>
	<td  id="thu1">
	<textarea name="thublk1" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="thu2">
	<textarea name="thublk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="thu3">
	<textarea name="thublk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="thu4">
	<textarea name="thublk4" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="thu5">
	<textarea name="thublk5" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="thu6">
	<textarea name="thublk6" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="thu7">
	<textarea name="thublk7" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="thu8">	
	<textarea name="thublk8" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
</tr>
<tr>
	<td>Fri</td>
		<td  id="fri1">
	<textarea name="friblk1" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="fri2">
	<textarea name="friblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="fri3">
	<textarea name="friblk2" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="fri4">
	<textarea name="friblk4" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="fri5">
	<textarea name="friblk5" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="fri6">
	<textarea name="friblk6" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="fri7">
	<textarea name="friblk7" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
	<td  id="fri8">	
	<textarea name="friblk8" id="tbdesc" placeholder="-- " cols="18" rows="4"></textarea>
		</td>
</tr>


</table>
<br>
	<!-- <input type="submit" name="submit" value="SUBMIT" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET"> -->
	<!-- onclick="fun()" -->



<input type="button" name="print" value="Print"> 

</form>

</center>
</body>
</html>