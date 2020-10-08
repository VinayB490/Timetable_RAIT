<?php 


$conn=mysqli_connect("localhost","root","","timetable") or die("connection not established");
$it='IT';
$type='Theory';


 $select="select * from courses where cdept='$it' and ctype='$type'";
      $run=mysqli_query($conn,$select)or die('alert');
      echo $select;
       while ($row=mysqli_fetch_assoc($run)){
       	echo "<option>".$row['cname']."</option>";
       }

    


?>