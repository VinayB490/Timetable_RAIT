
<!DOCTYPE html>
<?php
session_start();

$conn=mysqli_connect("localhost","root","","timetable") or die("connection not established");


?>
<html>
<head><title>resource management</title>
<script src="js/jquery.js">
		</script> 
</head>
<body>
<!-- 	<?php $x=0; ?>
	<script type="text/javascript">
		function lab(){
			x=fresource.rtype.value;
			console.log(x);
			if(x=='.'){
				fresource.rtype.value="Room";
				fresource.rtype.onfocus;
			}
			else if(x=='Lab'){
				$('#rinfo').empty();
				$.ajax('rlab.php')
					.done(function(response){
					$('#rinfo').empty();
					$('#rinfo').append(response);
					console.log(response)
					})
					.fail(function(request,errorType,errorMessage){
					alert(errorMessage);
					console.log(errorType);
					})
			}
		}
	</script> -->
	<form method="post" action="resource.php" name="fresource" >
		<center><a name="top"></a><b><table >
			<tr>
				<th colspan="2"> <h1> RESOURCE INFO </h1> </th>
			</tr>
			<tr >
				<td colspan="2">  </td>
			</tr>
			<tr >
				<td>Block no. :</td>
				<td><input type="text" name="rno" placeholder="Enter Block No. " required></td>
			</tr>
				<tr >
				<td colspan="2">  </td>
			</tr>
			<tr><td>Type :</td>
				<td><select name="rtype">
				<option>.</option>
  				<option value="Room">Classroom</option>
 				<option value="Lab">Lab</option>
 				</select></td>
				
			</tr>
			<tr >
				<td colspan="2">  </td>
			</tr>
			
			<tr >
				<td>Description:</td>
				<td id="rinfo"><input type="text" name="rinfo" placeholder="Enter Description "  ></td>

			</tr>
			<tr>
				<td colspan="2">  </td>
			</tr >
			</table>
		<br><br>
		<input type="submit" name="submit" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET">
		

	</form>
		<?php

if(isset($_POST['submit'])){
	$rno=$_POST['rno'];
	$rtype=$_POST['rtype'];
	$rinfo=$_POST['rinfo'];
	 
	
	if($_SESSION['R']==1)
	{	
		$_SESSION['R'] = 0;
		
		$query = "update resource set rtype='$rtype',rinfo='$rinfo' where rno='$rno';";
	}
	else{
		$query="insert into resource(rno,rtype,rinfo) values('$rno','$rtype','$rinfo');";
	}
	
	$run=mysqli_query($conn,$query);
	if($run){

		echo "<script>alert('successful');</script>";
		echo "<script>window.location.href='./resource.php';</script>";	
	}
}
?> 
<br>
<br><br>
<table width="500" border="2" bgcolor="#ff3074">
		<tr>
			<th>rno</th>
			<th>rtype</th>
			<th>rinfo</th>
			<th></th>
			<th></th>
		</tr>

	
		<?php 
			$select="select * from resource";
			$run=mysqli_query($conn,$select);
			while ($row=mysqli_fetch_array($run)){
			?>
				<tr>
					<td><?php echo $no=$row['rno'] ?></td>
					<td><?php echo $type=$row['rtype'] ?></td>
					<td><?php echo $info=$row['rinfo'] ?></td>
					<td><a href="resource.php?edit=<?php echo $no; ?>"><img src="edit.png" width="20" height="20" align="center" alt="edit"></a></td>
					<td><a href="resource.php?delete=<?php echo $no; ?>"><img src="del.png" width="20" height="20" align="center" alt="delete"></a></td>
				</tr>
			<?php
		 	} ?>
</table>
	<?php
		if(isset($_GET['delete'])){
			$del_no=$_GET['delete'];
			$delete="delete from resource where rno='$del_no'";
			$run_del=mysqli_query($conn,$delete);
			if($run_del){
				echo "<script>alert('successfully deleted');</script>";
				echo "<script>window.location.href='./resource.php';</script>";						
			}
		}

		if(isset($_GET['edit']))
		{	
			$_SESSION['R']=1;
		
			$edit_no=$_GET['edit']  ;
			$edit="select * from resource where  rno='$edit_no'";
			$run_edit=mysqli_query($conn,$edit);
				
			$editArray= mysqli_fetch_assoc($run_edit);
				 	  $rno=$editArray['rno'];
					  $rtype=$editArray['rtype']; 
					  $rinfo=$editArray['rinfo'];
					  ?>
				 	  <script type="text/javascript">
				 	  	fresource.rno.value = "<?php echo $rno; ?>";
				 	  	
				 	  	fresource.rtype.value = "<?php echo $rtype; ?>";
				 	  	fresource.rinfo.value = "<?php echo $rinfo; ?>";	
				 	  </script>
				 	  <?php			
		}
		?>

		<br><br>
|&nbsp;&nbsp;&nbsp;<a href="tform.php"> Faculty Details </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="loada.php"> Load Details </a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#top"> Back to top </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;<a href="course.php"> Course Details </a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="feedback.html"> Feedback </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|



</b>
</center>

</body>
</html>