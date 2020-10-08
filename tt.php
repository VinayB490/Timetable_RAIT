<!DOCTYPE html>
<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","timetable")or die("connection not established");
?>
<html>
<head><title>tt</title> 
</head>
<body>
<?php
if(isset($_POST['display'])){
  $tbsemtp=$_POST['tbsemtp'];
  $_SESSION['tbsemtp'] = $tbsemtp;
  $tbdept=$_POST['tbdept'];
  $_SESSION['tbdept']=$tbdept;
  $tbclass=$_POST['tbclass'];
  $_SESSION['tbclass'] =$tbclass;
  $tbdiv=$_POST['tbdiv'];
  $_SESSION['tbdiv'] =$tbdiv;
  $tbroom=$_POST['tbroom'];
  $_SESSION['tbroom'] =$tbroom;
  $tbstart=$_POST['tbstart'];
  $_SESSION['tbstart'] =$tbstart;
  $tabletb=$tbdept.$tbclass.$tbdiv.$tbstart;

  // echo "<script>window.location.href='./display.php';</script>";
  if($tbdept=='IT' && $tbstart=='0830' ) 
  { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('IT has 2 division A & B');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for it a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE IT"; 
          echo "<script>window.location.href='./display.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE IT"; 
       echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE IT"; 
       echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
    else
    {
      //code for it b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE IT";
       echo "<script>window.location.href='./display.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE IT"; 
        echo "<script>window.location.href='./display.php';</script>";
      }
      else 
      {
       echo "code for BE IT"; 
      }
    }
  }
  elseif($tbdept=='IT' && $tbstart=='1230')
  {
    echo "<script>alert('IT has only morning shift');</script>";
    echo "<script>window.location.href='./table.php';</script>"; 
  }
 
  elseif($tbdept=='ET' && $tbstart=='0830' ) 
  { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('ET has 2 division A & B');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE ET"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE ET"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE ET"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
    else
    {
      //code for et b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE ET";
        echo "<script>window.location.href='./display.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE ET"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE ET"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
  }
  elseif($tbdept=='ET' && $tbstart=='1230')
  {
    echo "<script>alert('ET has only morning shift');</script>";
    echo "<script>window.location.href='./table.php';</script>"; 
  }

  elseif($tbdept=='IN' && $tbstart=='0830' ) 
  { if($tbdiv=='B'||$tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('IN has only A division ');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    else
    {
      //code for in a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE IN";
        echo "<script>window.location.href='./display.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE IN"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE IN"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
    
  }
  elseif($tbdept=='IN' && $tbstart=='1230')
  {
    echo "<script>alert('IN has only morning shift');</script>";
    echo "<script>window.location.href='./table.php';</script>"; 
  }

  elseif($tbdept=='EX' && $tbstart=='0830' ) 
  { if($tbdiv=='D')
    {
      echo "<script>alert('EX has 3 division A , B & C in morning shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
    elseif($tbdiv=='B')
    {
      //code for et c
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      elseif($tbclas=="TE")
      {
       echo "code for TE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
    else
    {
      //code for et b
      echo "C";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE EX"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
  }
  elseif($tbdept=='EX' && $tbstart=='1230')
   { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('EX has 2 division A & B in afternoon shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
      }
      else 
      {
       echo "code for BE EX"; 
      }
    }
    else
    {
      //code for et b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
      }
      else 
      {
       echo "code for BE EX"; 
      }
    }
  }

  elseif($tbdept=='CE' && $tbstart=='0830' ) 
  { if($tbdiv=='D')
    {
      echo "<script>alert('CE has 3 division A , B & C in morning shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE CE"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE CE"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
    }
    elseif($tbdiv=='B')
    {
      //code for et c
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE CE";
        echo "<script>window.location.href='./display.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE";
        echo "<script>window.location.href='./display.php';</script>";  
      }
      else 
      {
       echo "code for BE CE";
        echo "<script>window.location.href='./display.php';</script>";  
      }
    }
    else
    {
      //code for et b
      echo "C";
      if($tbclass=="SE")
      {
       echo "code for SE CE";
        echo "<script>window.location.href='./display.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
        echo "<script>window.location.href='./display.php';</script>"; 
      }
      else 
      {
       echo "code for BE CE";
        echo "<script>window.location.href='./display.php';</script>";  
      }
    }
  }
  elseif($tbdept=='CE' && $tbstart=='1230')
   { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('CE has 2 division A & B in afternoon shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE CE"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
      }
      else 
      {
       echo "code for BE CE"; 
      }
    }
    else
    {
      //code for et b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE CE"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
      }
      else 
      {
       echo "code for BE CE"; 
      }
    }
  }
  else 
  {
    echo 'select some field';
  }

}

if(isset($_POST['submit1']))
{ $tbsemtp=$_POST['tbsemtp'];
  $_SESSION['tbsemtp'] = $tbsemtp;
  $tbdept=$_POST['tbdept'];
  $_SESSION['tbdept']=$tbdept;
  $tbclass=$_POST['tbclass'];
  $_SESSION['tbclass'] =$tbclass;
  $tbdiv=$_POST['tbdiv'];
  $_SESSION['tbdiv'] =$tbdiv;
  $tbroom=$_POST['tbroom'];
  $_SESSION['tbroom'] =$tbroom;
  $tbstart=$_POST['tbstart'];
  $_SESSION['tbstart'] =$tbstart;
  $tabletb=$tbdept.$tbclass.$tbdiv.$tbstart;
echo $tabletb;
  if($tbdept=='IT' && $tbstart=='0830' ) 
  { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('IT has 2 division A & B');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for it a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE IT"; 
          echo "<script>window.location.href='./eg.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE IT"; 
       echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE IT"; 
       echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
    else
    {
      //code for it b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE IT";
       echo "<script>window.location.href='./eg.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE IT"; 
        echo "<script>window.location.href='./eg.php';</script>";
      }
      else 
      {
       echo "code for BE IT"; 
      }
    }
  }
  elseif($tbdept=='IT' && $tbstart=='1230')
  {
    echo "<script>alert('IT has only morning shift');</script>";
    echo "<script>window.location.href='./table.php';</script>"; 
  }
 
  elseif($tbdept=='ET' && $tbstart=='0830' ) 
  { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('ET has 2 division A & B');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE ET"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE ET"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE ET"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
    else
    {
      //code for et b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE ET";
        echo "<script>window.location.href='./eg.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE ET"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE ET"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
  }
  elseif($tbdept=='ET' && $tbstart=='1230')
  {
    echo "<script>alert('ET has only morning shift');</script>";
    echo "<script>window.location.href='./table.php';</script>"; 
  }

  elseif($tbdept=='IN' && $tbstart=='0830' ) 
  { if($tbdiv=='B'||$tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('IN has only A division ');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    else
    {
      //code for in a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE IN";
        echo "<script>window.location.href='./eg.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE IN"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE IN"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
    
  }
  elseif($tbdept=='IN' && $tbstart=='1230')
  {
    echo "<script>alert('IN has only morning shift');</script>";
    echo "<script>window.location.href='./table.php';</script>"; 
  }

  elseif($tbdept=='EX' && $tbstart=='0830' ) 
  { if($tbdiv=='D')
    {
      echo "<script>alert('EX has 3 division A , B & C in morning shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
    elseif($tbdiv=='B')
    {
      //code for et c
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      elseif($tbclas=="TE")
      {
       echo "code for TE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
    else
    {
      //code for et b
      echo "C";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE EX"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
  }
  elseif($tbdept=='EX' && $tbstart=='1230')
   { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('EX has 2 division A & B in afternoon shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
      }
      else 
      {
       echo "code for BE EX"; 
      }
    }
    else
    {
      //code for et b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE EX"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE EX"; 
      }
      else 
      {
       echo "code for BE EX"; 
      }
    }
  }

  elseif($tbdept=='CE' && $tbstart=='0830' ) 
  { if($tbdiv=='D')
    {
      echo "<script>alert('CE has 3 division A , B & C in morning shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE CE"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE CE"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
    }
    elseif($tbdiv=='B')
    {
      //code for et c
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE CE";
        echo "<script>window.location.href='./eg.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE";
        echo "<script>window.location.href='./eg.php';</script>";  
      }
      else 
      {
       echo "code for BE CE";
        echo "<script>window.location.href='./eg.php';</script>";  
      }
    }
    else
    {
      //code for et b
      echo "C";
      if($tbclass=="SE")
      {
       echo "code for SE CE";
        echo "<script>window.location.href='./eg.php';</script>";  
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
        echo "<script>window.location.href='./eg.php';</script>"; 
      }
      else 
      {
       echo "code for BE CE";
        echo "<script>window.location.href='./eg.php';</script>";  
      }
    }
  }
  elseif($tbdept=='CE' && $tbstart=='1230')
   { if($tbdiv=='C'||$tbdiv=='D')
    {
      echo "<script>alert('CE has 2 division A & B in afternoon shift');</script>";
      echo "<script>window.location.href='./table.php';</script>"; 
    }
    elseif($tbdiv=='A')
    {
      //code for et a
      echo "A";
      if($tbclass=="SE")
      {
       echo "code for SE CE"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
      }
      else 
      {
       echo "code for BE CE"; 
      }
    }
    else
    {
      //code for et b
      echo "B";
      if($tbclass=="SE")
      {
       echo "code for SE CE"; 
      }
      elseif($tbclass=="TE")
      {
       echo "code for TE CE"; 
      }
      else 
      {
       echo "code for BE CE"; 
      }
    }
  }
  else 
  {
    echo 'select some field';
  }






  /*  $search="select * from ttables where tbvar='$tbvar'";
   $run_search=mysqli_query($conn,$search);
  if($run_search){
         die("table already exist");


  }else{        $ins="insert into ttables values('$tbvar');";
  echo $ins." \n";
  $run_ins=mysqli_query($conn,$ins)or die("not inserted");



  $sql="CREATE TABLE  '{$tbvar}'(lec INT AUTO_INCREMENT,
  mon VARCHAR(90),
  tue VARCHAR(90),  
  wed VARCHAR(90),    
  thu VARCHAR(90),  
  fri VARCHAR(90),
  PRIMARY KEY(lec)
  )";
 

  $sql="CREATE TABLE asa ( a INT(10) NOT NULL AUTO_INCREMENT , s VARCHAR(10) NOT NULL , PRIMARY KEY (a(10)));"; 
  echo $sql."\n";
  $run_sql=mysqli_query($conn,$sql)or die("table not created");
        

  $ins="insert into $tbvar values('1','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('2','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('3','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('4','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('5','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('6','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('7','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('8','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('9','','','','','');";
  $run_ins=mysqli_query($conn,$ins);
  $ins="insert into $tbvar values('10','','','','','');";
  $run_ins=mysqli_query($conn,$ins)or die("insert unsuccessful");

  */
}
?>
</body>
</html>