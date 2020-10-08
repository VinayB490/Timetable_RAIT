<?php 
session_start();

$conn=mysqli_connect("localhost","root","","timetable") or die("connection not established");

$dept='IT';
$type='Theory';
$year='SE';
$semtype='odd';
$sem='3';

$tbsem = $_SESSION['tbsemtp'];
// echo $tbsem;
 $tbclass=$_SESSION['tbclass'] ;
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

 $select="select * from loads where ldept='$tbdept' and lclass='$tbclass' and ldiv='$tbdiv' and ltype='$type'";
      $run=mysqli_query($conn,$select)or die('alert');
   
       $i=0;
       while ($row=mysqli_fetch_assoc($run)){
         $pqr=$row['lcourse'];
         $select_c="select * from courses where cname='$pqr'"or die('alert');
      $run_c=mysqli_query($conn,$select_c)or die('alert');

      $row_c=mysqli_fetch_assoc($run_c);
      echo "<script>console.log('".$_SESSION['dij'].$_SESSION['ppsuba']."')</script>";
      if($_SESSION['dij']==1){
        if($_SESSION['ppsuba']==$row_c['csname']){
         echo "<option id=".$i." value=".$row_c['csname']." selected>".$row_c['csname']."</option>"; 
        }
      }else{
       	echo "<option id=".$i." value=".$row_c['csname'].">".$row_c['csname']."</option>";
       }
       	$i++;
       }

?>
