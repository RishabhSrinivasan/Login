<?php

session_start();
$state=false;
$confirm=false;
$server="localhost";
$user="root";
$pass="";
$database="register";

$con=mysqli_connect($server,$user,$pass,$database);

if (!$con) {
  die("Connection to database failed due to ".mysqli_connect_error());
}
if(isset($_POST['s1'])||isset($_POST['s2'])||isset($_POST['s3'])||isset($_POST['s4'])||isset($_POST['s5']))
{
$name=$_SESSION['username'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
$_SESSION['state']=$state;

$sql="INSERT INTO `register`.`courses` (`sno`, `name`, `s1`, `s2`, `s3`, `s4`, `s5`) VALUES (NULL, '$name', '$s1', '$s2', '$s3', '$s4', '$s5')";

$bql="SELECT * FROM courses INNER JOIN teachers ON courses.s1=teachers.subject WHERE s1='$s1'";
$cql="SELECT * FROM courses INNER JOIN teachers ON courses.s2=teachers.subject WHERE s2='$s2'";
$dql="SELECT * FROM courses INNER JOIN teachers ON courses.s3=teachers.subject WHERE s3='$s3'";
$eql="SELECT * FROM courses INNER JOIN teachers ON courses.s4=teachers.subject WHERE s4='$s4'";
$fql="SELECT * FROM courses INNER JOIN teachers ON courses.s5=teachers.subject WHERE s5='$s5'";


$res=mysqli_query($con,$bql);
$mes=mysqli_query($con,$cql);
$ees=mysqli_query($con,$dql);
$fes=mysqli_query($con,$eql);
$ges=mysqli_query($con,$fql);









$result=mysqli_query($con,$sql);



  $row=mysqli_fetch_assoc($res);
  $sow=mysqli_fetch_assoc($mes);
  $uow=mysqli_fetch_assoc($ees);
  $dow=mysqli_fetch_assoc($fes);
  $vow=mysqli_fetch_assoc($ges);







  echo ''.$row['tname'].''  ;

  $_SESSION['tname']=$row['tname'];
  $_SESSION['aname']=$sow['tname'];
  $_SESSION['bname']=$uow['tname'];
  $_SESSION['cname']=$dow['tname'];
  $_SESSION['dname']=$vow['tname'];







if($result)
{
  $confirm=true;

  $_SESSION['state']=true;
}
if($confirm)
{

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Great Job!</strong> You have registerd Sucessfully
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';



$_SESSION['s1']=$s1;
$_SESSION['s2']=$s2;
$_SESSION['s3']=$s3;
$_SESSION['s4']=$s4;
$_SESSION['s5']=$s5;



header("location:welcome.php");




}
$con->close();
}
 ?>




 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Courses</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css">
   </head>
   <body>
     <?php require 'nav.php' ?>
     <h1>Enter your courses</h1>

     <form class="" action="course.php" method="post">

       <input type="text" name="s1" id="s1" placeholder="Subject 1">

       <input type="text" name="s2" id="s2" placeholder="Subject 2">

       <input type="text" name="s3" id="s3" placeholder="Subject 3">

       <input type="text" name="s4" id="s4" placeholder="Subject 4">

       <input type="text" name="s5" id="s5" placeholder="Subject 5">

       <button type="submit" name="btn">ENTER</button>
     </form>


<?php
if(isset($_POST['btn']))
{
$_SESSION['btn']=$_POST['btn'];
}
 ?>


   </body>
 </html>
