        

        
    $('#tbdept').on('change',function(){
    var tbdeptt=$('#tbdept').val();
    console.log($('#tbdept').val());
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