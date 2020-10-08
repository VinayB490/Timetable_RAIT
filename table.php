<!DOCTYPE html>

<html>
<head>
  <title>Time tabler</title>
<script src="js/jquery.js">
 
</script>
</head>
<body>
  <center>
    <b>
     
      <form name="ftbdetails" method="post" action="tt.php">
        <table>
                    <tr >
        <td colspan="2">  </td>
      </tr>


        <tr>
<td>SEM:</td>
<td> <select name="tbsemtp">
           <!-- <option value="FE">FE</option>-->
            <option value="even" >EVEN</option>            
            <option value="odd" selected>ODD</option>
    
          </select></td>
</tr>
          <tr><td> </td><td> </td></tr>
    <tr>
        <td>Dept: </td>
        <td><select name="tbdept" id="tbdept">
            <option value="IT" selected>INFT</option>
            <option value="CE">COMPS</option>            
            <option value="EX">EXTC</option>
            <option value="IN">INSTU</option>
            <!--<option value="FE">E.Sci</option>-->
            <option value="ET">ELCT</option>            
            </select>
        </td></tr>
      
          <tr >
        <td colspan="2">  </td>
      </tr>


        <tr>
<td>Class:</td>
<td> <select name="tbclass">
           <!-- <option value="FE">FE</option>-->
            <option value="SE" selected>SE</option>            
            <option value="TE">TE</option>
            <option value="BE">BE</option>
          </select></td>
</tr>

        
<tr >
        <td colspan="2">  </td>
      </tr>
<tr>
<td>Division:</td>
<td>
  <input type="radio" name="tbdiv" value="A" id="a" checked>A &nbsp;<input type="radio" name="tbdiv" value="B" id="b">B &nbsp;<input type="radio" name="tbdiv" value="C" id="c">C &nbsp;<input type="radio" name="tbdiv" value="D" id="d">D &nbsp;


</td>
</tr>
<tr >
        <td colspan="2">  </td>
      </tr>
<tr>
<td>LEC start time:</td>
<td> <select name="tbstart" >
            <option value="0830" selected>08:30 </option>
            <option value="1230">12:30 </option>            
            
          </select></td>
</tr>
                    <tr >
        <td colspan="2">  </td>
      </tr>


        <tr>
<td>Class Counsellor:</td>
<td> <select name="tbcc" id="tbcc" required>
      </select></td>
</tr>


<tr >
        <td colspan="2">  </td>
      </tr>
<tr>
<td>Room No.:</td>
<td><input type="text" name="tbroom" required  ></td>
</tr>



      </table><br><br>
 <input type="submit" name="submit1" value="SUBMIT" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"  value="RESET">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="display"  value="Display" >
</form>
 <script> 
 $(document).ready(function(){
   var tbdept=$('#tbdept').val();
    console.log(tbdept);
   if(tbdept=="IT"){
    $.ajax('lt/it.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="CE"){
    $.ajax('lt/ce.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="EX"){
    $.ajax('lt/ex.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="ET"){
    $.ajax('lt/et.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="IN"){
    $.ajax('lt/in.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }
  $('#tbdept').on('change',function(){
    var tbdept=$('#tbdept').val();
    console.log(tbdept);
  //wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
  if(tbdept=="IT"){
    $.ajax('lt/it.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="CE"){
    $.ajax('lt/ce.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="EX"){
    $.ajax('lt/ex.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="ET"){
    $.ajax('lt/et.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }else if(tbdept=="IN"){
    $.ajax('lt/in.php')
      .done(function(response){
      $('#tbcc').empty();
      $('#tbcc').append(response);
      console.log(response)
      })
      .fail(function(request,errorType,errorMessage){
      alert(errorMessage);
      console.log(errorType);
      })
  }
});
});

</script>

       <br><br> 
    
    </b>
  </center>

</body>
</html>