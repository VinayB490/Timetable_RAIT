
<!DOCTYPE html>
<html>
<head>
  <title>Configuration Parameter</title>
</head>
<body>
<center>
<form name="fwork" method="post" action="conft.php">
 <!--  <fieldset> -->
   <!--  <legend>Details:</legend> -->
  
    <table>
      <tr>
				<th colspan="2"> <h1>CONFN PARAMETERS</h1></th>
		</tr>
		<tr><td colspan="2"></td></tr>
      <tr><td>Working Days: </td><td><input type="text" name="wdays" placeholder="Enter Working Days"></td></tr>



      <tr><td colspan="2"></td></tr>
      <tr><td>Timing: </td><td><input type="text" name="wtime" placeholder="Enter Timing"></td></tr>

      

      <tr><td colspan="2"></td></tr>


        <tr><td>Shifts:</td>
          <td>
          <select name="wshift">
            <option>Morning Shift</option>
            <option>Afternoon Shift</option>            
            <option>Full Shift</option>
          </select></td></tr>

          
<tr><td colspan="2"></td></tr>

    <tr><td>Division:</td>
          <td>
         <select name="wdiv">
            <option value="A">A </option>
            <option value="B">B </option>            
            <option value="C">C </option>
             <option value="D">D </option>
          </select></td></tr>

          <tr><td colspan="2"></td></tr>



    <tr><td>Batches:</td>
          <td>
          <select name="wbatch">
            <option value="1">1 </option>
            <option value="2">2 </option>            
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="0">ALL </option>
          </select></td></tr>

           
 <tr><td colspan="2"></td></tr>
    </table><br><br>

<input type="submit" name="sub" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET">
<!-- </fieldset> -->
</form>
</body>
</html>
