<!DOCTYPE html>
<?php
session_start();

$conn=mysqli_connect("localhost","root","","timetable") or die("connection not established");


?>
<html>
<head>
  
<title>Load alloc</title>
<script src="js/jquery.js">
</script>
</head>
<body><center><b>
  <a name="top"></a>
<form  name="fload" action="loada.php" method="post" id="fload" >
<table>
<tr >
<th  colspan="2"><h1>LOAD ALLOCATION</h1> </th>
</tr>

<tr >
        <td colspan="2">  </td>
      </tr>
     <tr>
        <td>Dept: </td>
        <td>
          <div class="lvar"> 
          <select name="ldept" id="ldept" >
            <!-- <option>.</option> -->
            <option value="IT" selected>INFT</option>
            <option value="CE">COMPS</option>            
            <option value="EX">EXTC</option>
            <option value="IN">INSTU</option>
          <!--  <option value="FE">E.Sci</option> -->
            <option value="ET">ELTC</option>            
            </select></div>
            
</td></tr>
<tr >
        <td colspan="2">  </td>
      </tr>


        <tr>
<td>SEM:</td>
<td> <div class="lvar"><select name="lsem" id="lsem">
          
            <option value="even" >EVEN</option>            
            <option value="odd" selected>ODD</option>
    
          </select></div></td>
</tr>

      <tr >
        <td colspan="2">  </td>
      </tr>
<tr> 
<td>Class:</td>
<td><div class="lvar">  
  <select name="lclass" id="lclass">
           <!-- <option  >.</option> -->
            <option value="SE" selected>SE</option>            
            <option value="TE">TE</option>
            <option value="BE">BE</option>
          </select></div></td>
</tr>
<tr >
        <td colspan="2">  </td>
      </tr>
<tr>
<td>Type:</td>
<td><div class="lvar"> <select name="ltype" id="ltype" >
  <option value="Theory" selected>Theory</option>
  <option value="Lab">Lab</option>
</select></div></td>
</tr>
<tr>
  <td colspan="2">  </td>
</tr>
<tr>
<td>Course Name:</td>
 
<td > <select name="lcourse" id='lcourse' >
</select>

   
</td> 

</tr>
<tr>
        <td colspan="2">  </td>
      </tr>
<tr>
<td>Teacher Allocated : </td>
<td > <select name="ltname" id='ltname' >
</select>

   
</td> 
</tr>


<tr>
<td colspan="2">  </td>
</tr>
<tr>
<td>Division:</td>
<td> <select name="ldiv">
            <option value="A" selected>A   </option>
            <option value="B">B </option>            
            <option value="C">C </option>
             <option value="D">D </option>
          </select>
          
        </td>
</tr>
<tr >
        <td colspan="2">  </td>
      </tr>
<tr>
<td>Batch:</td>
<td><select name="lbatch">
            <option value="1">1 </option>
            <option value="2">2 </option>            
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="0" selected>ALL </option>
          </select></td>
</tr>
<tr >
        <td colspan="2">  </td>
  </tr>
<tr>
<td>No. of Hours per week: </td>
<td><input type="text" name="ltime" required placeholder="Enter Time in HRS"></td>
</tr>

<tr>
<th colspan="2"></th>
</tr>  
</table><br><br>
<input type="submit" name="submit" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET">
</form>

<?php

if(isset($_POST['submit'])){
  $lcourse=$_POST['lcourse'];
  $ltname=$_POST['ltname'];
  $ltype=$_POST['ltype'];
  $lclass=$_POST['lclass'];
  $ldiv=$_POST['ldiv'];
  $lbatch=$_POST['lbatch']; 
  $ltime=$_POST['ltime']; 
  $ldept=$_POST['ldept'];


  if($_SESSION['L']==1)
  {
    $_SESSION['L'] = 0;
    
    $query = "update loads set ltname='$ltname',ltype='$ltype',lclass='$lclass',ldiv='$ldiv',lbatch='$lbatch',ltime='$ltime',ldept='$ldept' where lcourse='$lcourse';";
  }
  else
    $query="insert into loads(ldept,lcourse,ltname,ltype,lclass,ldiv,lbatch,ltime) values('$ldept','$lcourse','$ltname','$ltype','$lclass','$ldiv','$lbatch','$ltime');";
  
   echo $query;
  $run=mysqli_query($conn,$query);
  if($run){

    echo "<script>alert('successful');</script>";
    echo "<script>window.location.href='./loada.php';</script>"; 
  }
}
?> 
<br>
<br><br>
<table width="500" border="2" bgcolor="#ff3074">
    <tr>
      <th>lcourse</th>
      <th>lcid</th>
      <th>lcsname</th>
      <th>ldept</th>
      <th>ltname</th>
      <th>ltsdrn</th>
      <th>ltsname</th>
      
      <th>ltype</th>
      <th>lclass</th>
      <th>ldiv</th>
      <th>lbatch</th>
      <th>ltime</th>
      <th></th>
      <th></th>
    </tr>

  
    <?php 
      $select="select * from loads";
      $run=mysqli_query($conn,$select);
      while ($row=mysqli_fetch_assoc($run)){
      ?>
        <tr>
          <td><?php echo $course=$row['lcourse'] ?></td>
         
 <?php 
          $sel_courses="select * from courses where cname='$course'";  
         
          $run_courses=mysqli_query($conn,$sel_courses);
          $row_courses=mysqli_fetch_assoc($run_courses);
               
          ?>
         
          <td><?php echo $lcid=$row_courses['cid'] ?></td>
          <td><?php echo $lcsname=$row_courses['csname'] ?></td> 



          <td><?php echo $dept=$row['ldept'] ?> </td>
          <td><?php echo $tname=$row['ltname'] ?> </td>
<?php
          $sel_tform="select * from tform where tname='$tname'";  
         
          $run_tform=mysqli_query($conn,$sel_tform);
          $row_tform=mysqli_fetch_assoc($run_tform);
          
          ?>
         
          <td><?php echo $tsdrn=$row_tform['tsdrn'] ?></td>
          <td><?php echo $tinit=$row_tform['tinit'] ?></td> 

          <td><?php echo $type=$row['ltype'] ?> </td>
          <td><?php echo $class=$row['lclass'] ?> </td>
          <td><?php echo $div=$row['ldiv'] ?> </td>
          <td><?php echo $batch=$row['lbatch'] ?> </td>
          <td><?php echo $time=$row['ltime'] ?> </td>
          <td><a href="loada.php?edit=<?php echo $course; ?>"><img src="edit.png" width="20" height="20" align="center"></a></td>
          <td><a href="loada.php?delete=<?php echo $course; ?>"><img src="del.png" width="20" height="20" align="center"></a></td>
        </tr>
      <?php
      } ?>
</table>
  <?php
    if(isset($_GET['delete'])){
      $del_course=$_GET['delete'];
      $delete="delete from loads where lcourse='$del_course'";
      $run_del=mysqli_query($conn,$delete);
      if($run_del){
        echo "<script>alert('successfully deleted');</script>";
        echo "<script>window.location.href='./loada.php';</script>";           
      }
    }

    if(isset($_GET['edit']))
    { 
      $_SESSION['L']=1;
    
      $edit_course=$_GET['edit'];
      $edit="select * from loads where lcourse='$edit_course'";
      $run_edit=mysqli_query($conn,$edit);
      $editArray= mysqli_fetch_assoc($run_edit);
           echo $dept=$editArray['ldept'];
           echo $course=$editArray['lcourse'];
           echo $tname=$editArray['ltname']; 
           echo $type=$editArray['ltype'];
           echo $class=$editArray['lclass'];
           echo $div=$editArray['ldiv']; 
           echo $batch=$editArray['lbatch'];
           echo $time=$editArray['ltime'];
          
            ?>
            <script>
              fload.ldept.value="<?php echo $dept; ?>";
              fload.lcourse.value = "<?php echo $course; ?>";
              fload.lcourse.setAttribute('readonly');
              fload.ltname.value = "<?php echo $tname; ?>";
              fload.ltype.value = "<?php echo $type; ?>";
              fload.lclass.value = "<?php echo $class; ?>";
              fload.ldiv.value = "<?php echo $div; ?>";
              fload.lbatch.value = "<?php echo $batch; ?>";
              fload.ltime.value = "<?php echo $time; ?>";
            </script>
            <?php     
    }
    ?>
<br><br>
|&nbsp;&nbsp;&nbsp;<a href="course.php"> Course Details </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="tform.php"> Faculty Details </a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#top"> Back to top </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;<a href="resource.php"> Resource Details </a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="feedback.html"> Feedback </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
</b>
</center>
<script src="loada_js.js"></script>


</body>
</html>