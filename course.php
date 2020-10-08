<!DOCTYPE html>
<?php
session_start();

$conn=mysqli_connect("localhost","root","","timetable") or die("connection not established");

?>
<html>
<head><title>course management</title></head>
<body>
	<center><b>
		<a name="top"></a>
	<form method="post" action="course.php" name="fcourse">
		<table >
			<tr >
				<th colspan="2"> <h1>COURSE DETAILS</h1> </th>
			</tr>
			<tr >
				<td>Course ID. :</td>
				<td><input type="text" name="cid" placeholder="Enter course id " required></td>
			</tr>
				<tr >
				<td colspan="2">  </td>
			</tr>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="cname" placeholder="Enter course name " required></td>
			</tr>
			<tr >
				<td colspan="2">  </td>
			</tr>
		

			<tr >
				<td>Short Name :</td>
				<td><input type="text" name="csname" placeholder="Enter course name in short " ></td>
			</tr>
			<tr >
				<td colspan="2">  </td>
			</tr>
			<tr><td> </td><td> </td></tr>
		<tr>
      	<td>Dept: </td>
      	<td><select name="cdept">
            <option value="IT" selected>INFT</option>
            <option value="CE">COMPS</option>            
            <option value="EX">EXTC</option>
            <option value="IN">INSTU</option>
          <!--  <option value="FE">E.Sci</option> -->
            <option value="ET">ELTC</option>            
            </select>
        </td></tr>
<tr  >
				<td colspan="2">  </td>
			</tr>
			<tr >
				<td>Semester :</td>
				<td>
<select name="csem" size="1" >
<!--  <option value="1">I</option>
  <option value="2">II</option> -->
  <option value="3">III</option>
  <option value="4">IV</option>
  <option value="5">V</option>
  <option value="6">VI</option>
  <option value="7">VII</option>
  <option value="8">VIII</option>
 
</select></td>
			</tr >
			<tr  >
				<td colspan="2">  </td>
			</tr>

			<tr >
				<td>Type :</td>
				<td><select name="ctype" size="1" >
  <option value="Theory" selected>Theory</option>
  <option value="Lab">Lab</option>
 
 
</select></td>
			</tr >
			<tr>
				<td colspan="2">  </td>
			</tr >
			<tr>
				<td>Time(in hrs) :</td>
				<td><input type="text" name="ctime" required></td>
			</tr>
			<tr >
				<td colspan="2">  </td>
			</tr>
			<tr >
				<th colspan="2"></th>
				
			</tr>

			

		</table>
		<br><br>
		<input type="submit" name="submit" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET">
		



	</form>
	<?php

if(isset($_POST['submit'])){
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$csname=$_POST['csname'];
	$csem=$_POST['csem'];
	$ctype=$_POST['ctype'];
	$ctime=$_POST['ctime']; 
	$cdept=$_POST['cdept'];
	if($_SESSION['C']==1)
	{
		$_SESSION['C'] = 0;
		
		$query = "update courses set cname='$cname',csname='$csname',csem='$csem',ctype='$ctype',ctime='$ctime',cdept='$cdept' where cid='$cid';";
	}
	else
		$query="insert into courses(cid,cname,csname,cdept,csem,ctype,ctime) values('$cid','$cname','$csname','$cdept','$csem','$ctype','$ctime');";
	
	$run=mysqli_query($conn,$query);
	if($run){

		echo "<script>alert('successful');</script>";
		echo "<script>window.location.href='./course.php';</script>";	
	}
}
?> 
<br>
<br><br>
<table width="500" border="2" bgcolor="#ff3074">
		<tr>
			<th>cid</th>
			<th>cname</th>
			<th>csname</th>
			<th>cdept</th>
			<th>csem</th>
			<th>ctype</th>
			<th>ctime</th>
			<th></th>
			<th></th>
		</tr>

	
		<?php 
			$select="select * from courses";
			$run=mysqli_query($conn,$select);
			while ($row=mysqli_fetch_array($run)){
			?>
				<tr>
					<td><?php echo $id=$row['cid'] ?></td>
					<td><?php echo $name=$row['cname'] ?></td>
					<td><?php echo $sname=$row['csname'] ?></td>
					<td><?php echo $dept=$row['cdept'] ?></td>
					<td><?php echo $sem=$row['csem'] ?></td>
					<td><?php echo $type=$row['ctype'] ?></td>
					<td><?php echo $time=$row['ctime'] ?></td>
					<td><a href="course.php?edit=<?php echo $id; ?>"><img src="edit.png" width="20" height="20" align="center"></a></td>
					<td><a href="course.php?delete=<?php echo $id; ?>"><img src="del.png" width="20" height="20" align="center"></a></td>
				</tr>
			<?php
		 	} ?>
</table>
	<?php
		if(isset($_GET['delete'])){
			$del_id=$_GET['delete'];
			$delete="delete from courses where cid='$del_id'";
			$run_del=mysqli_query($conn,$delete);
			if($run_del){
				echo "<script>alert('successfully deleted');</script>";
				echo "<script>window.location.href='./course.php';</script>";						
			}
		}

		if(isset($_GET['edit']))
		{	
			$_SESSION['C']=1;
		
			$edit_id=$_GET['edit'];
			$edit="select * from courses where cid='$edit_id'";
			$run_edit=mysqli_query($conn,$edit);
			$editArray= mysqli_fetch_assoc($run_edit);
				 	  $id=$editArray['cid'];
					  $name=$editArray['cname']; 
					  $sname=$editArray['csname'];
					  $dept=$editArray['cdept'];
					  $sem=$editArray['csem'];
					  $type=$editArray['ctype']; 
					  $time=$editArray['ctime'];
				 	  ?>
				 	  <script type="text/javascript">
				 	  	fcourse.cid.value = "<?php echo $id; ?>";
				 	  
				 	  	fcourse.cname.value = "<?php echo $name; ?>";
				 	  	fcourse.csname.value = "<?php echo $sname; ?>";
				 	  	fcourse.cdept.value = "<?php echo $dept; ?>";
				 	  	fcourse.csem.value = "<?php echo $sem; ?>";
				 	  	fcourse.ctype.value = "<?php echo $type; ?>";
				 	  	fcourse.ctime.value = "<?php echo $time; ?>";
				 	  </script>
				 	  <?php			
		}
		?>
<br><br>
|&nbsp;&nbsp;&nbsp;<a href="tform.php"> Faculty Details </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="loada.php"> Load Details </a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#top"> Back to top </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;<a href="resource.php"> Resource Details </a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="feedback.html"> Feedback </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
</b>
</center>
</body>
</html>