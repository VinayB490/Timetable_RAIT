<!DOCTYPE html>
<?php
session_start();

$conn=mysqli_connect("localhost","root","","timetable") or die("connection not established");


?>
<html>
<head> <title>Faculty Management</title>
</head>
<body>
	<center><b>
		<a name="top"></a>
<form name="ftform" method="post" action="tform.php">
   <table>
      	<tr><th colspan="2"> <h1>FACULTY DETAILS </h1> </th>
		</tr>
      	<tr><td>SDRN: </td><td><input type="text" name="tsdrn" placeholder="Enter SDRN"></td></tr>
		<tr><td> </td><td> </td></tr>
		<tr><td>Initials: </td><td><input type="text" name="tinit" placeholder="Enter Initials"></td></tr>
        <tr><td> </td><td> </td></tr>
		<tr><td>Name: </td><td><input type="text" name="tname" placeholder="Enter Name"></td></tr>
        <tr><td> </td><td> </td></tr>
		<tr>
      	<td>Dept: </td>
      	<td><select name="tdept">
            <option value="IT" selected>INFT</option>
            <option value="CE">COMPS</option>            
            <option value="EX">EXTC</option>
            <option value="IN">INSTU</option>
          <!--  <option value="FE">E.Sci</option> -->
            <option value="ET">ELTC</option>            
            </select>
        </td></tr>

           <tr><td> </td><td> </td></tr>

        <tr><td>Availability:</td> 
          <td>
          <select name="tshift">
            <option value="AM">Morning Shift</option>
            <option value="PM">Afternoon Shift</option>            
            <option value="FM"selected>Full Shift</option>
          </select></td></tr>

           <tr><td> </td><td> </td></tr>
    </table><br><br>
		<input type="submit" name="submit" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET">
		



	</form>
	<?php

if(isset($_POST['submit'])){
	$tsdrn=$_POST['tsdrn'];
	$tinit=$_POST['tinit'];
	$tname=$_POST['tname'];
	$tdept=$_POST['tdept'];
	$tshift=$_POST['tshift']; 
	
	if($_SESSION['T']==1)
	{
		$_SESSION['T'] = 0;
		
		$query = "update tform set tinit='$tinit',tname='$tname',tdept='$tdept',tshift='$tshift' where tsdrn='$tsdrn';";
	}
	else{
		$query="insert into tform(tsdrn,tinit,tname,tdept,tshift) values('$tsdrn','$tinit','$tname','$tdept','$tshift');";
	}
	
	$run=mysqli_query($conn,$query);
	if($run){

		echo "<script>alert('successful');</script>";
		echo "<script>window.location.href='./tform.php';</script>";	
	}
}
?> 
<br>
<br><br>
<table width="500" border="2" bgcolor="#ff3074">
		<tr>
			<th>tsdrn</th>
			<th>tinit</th>
			<th>tname</th>
			<th>tdept</th>
			<th>tshift</th>
			<th></th>
			<th></th>
		</tr>

	
		<?php 
			$select="select * from tform";
			$run=mysqli_query($conn,$select);
			while ($row=mysqli_fetch_array($run)){
			?>
				<tr>
					<td><?php echo $sdrn=$row['tsdrn'] ?></td>
					<td><?php echo $init=$row['tinit'] ?></td>
					<td><?php echo $name=$row['tname'] ?></td>
					<td><?php echo $dept=$row['tdept'] ?></td>
					<td><?php echo $shift=$row['tshift'] ?></td>
					
					<td><a href="tform.php?edit=<?php echo $sdrn; ?>"><img src="edit.png" width="20" height="20" align="center"></a></td>
					<td><a href="tform.php?delete=<?php echo $sdrn; ?>"><img src="del.png" width="20" height="20" align="center"></a></td>
				</tr>
			<?php
		 	} ?>
</table>
	<?php
		if(isset($_GET['delete'])){
			$del_sdrn=$_GET['delete'];
			$delete="delete from tform where tsdrn='$del_sdrn'";
			$run_del=mysqli_query($conn,$delete);
			if($run_del){
				echo "<script>alert('successfully deleted');</script>";
				echo "<script>window.location.href='./tform.php';</script>";						
			}
		}

		if(isset($_GET['edit']))
		{	
			$_SESSION['T']=1;
		
			$edit_sdrn=$_GET['edit'];
			$edit="select * from tform where tsdrn='$edit_sdrn'";
			$run_edit=mysqli_query($conn,$edit);
				
			$editArray= mysqli_fetch_assoc($run_edit);
				 	  $sdrn=$editArray['tsdrn'];
					  $init=$editArray['tinit']; 
					  $name=$editArray['tname'];
					  $dept=$editArray['tdept'];
					  $shift=$editArray['tshift']; 
					  ?>
				 	  <script type="text/javascript">
				 	  	ftform.tsdrn.value = "<?php echo $sdrn; ?>";
				 	  	ftform.tsdrn.setAttribute("readonly");
				 	  	ftform.tinit.value = "<?php echo $init; ?>";
				 	  	ftform.tname.value = "<?php echo $name; ?>";
				 	  	ftform.tdept.value = "<?php echo $dept; ?>";
				 	  	ftform.tshift.value = "<?php echo $shift; ?>";
				 	  	
				 	  </script>
				 	  <?php			
		}
		?>

		<br><br>
|&nbsp;&nbsp;&nbsp;<a href="course.php"> Course Details </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="loada.php"> Load Details </a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#top"> Back to top </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;<a href="resource.php"> Resource Details </a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="feedback.html"> Feedback </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
</b>
</center>
</body>
</html>