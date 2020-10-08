<?php 
session_start();

$conn=mysqli_connect("localhost","root","","timetable") or die("connection not established");

$tbsem = $_SESSION['tbsemtp'];
// echo $tbsem;
$tbclass=$_SESSION['tbclass'];
 // echo $tbclass;
$tbdept=$_SESSION['tbdept'];
 // echo $tbdept;
$tbdiv=$_SESSION['tbdiv'] ;
 // echo $tbdiv;
$tbroom=$_SESSION['tbroom'];
 // echo $tbroom;
$tbstart=$_SESSION['tbstart'];
  // echo $tbstart;
 echo "<option value=. >.</option>";
 $select="select * from loads where ldept='$tbdept' and lclass='$tbclass' and ldiv='$tbdiv'";
      $run=mysqli_query($conn,$select)or die('alert');
     
      $i=0;
       while ($row=mysqli_fetch_assoc($run)){
       	$pqr=$row['ltname'];
         $select_c="select * from tform where tname='$pqr'"or die('alert');
      $run_c=mysqli_query($conn,$select_c)or die('alert');
     
      $row_c=mysqli_fetch_assoc($run_c);
       	echo "<option id=".$i." value=".$row_c['tinit'].">".$row_c['tinit']."</option>";
       	$i++;
       }
?>