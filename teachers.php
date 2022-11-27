

<?php
$showAlert=false;
$server="localhost";
$user="root";
$pass="";
$database="register";
$con=mysqli_connect($server,$user,$pass,$database);

if (!$con) {
  die("Connection to database failed due to ".mysqli_connect_error());
}

if(isset($_POST['name'])||isset($_POST['subject']))
{
  $subject=$_POST["subject"];
  $name=$_POST["name"];


$sql="INSERT INTO `register`.`teachers` (`id`, `subject`, `tname`) VALUES ( NULL,'$subject', '$name')";

$result=mysqli_query($con,$sql);
if($result)
{
  $showAlert=true;
}

if($showAlert)
{
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Great Job!</strong> Recorded Entry
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

  $con->close();
}









 ?>



















<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teachers-Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
  </head>
  <body>
     <?php require 'nav.php' ?>

    <h1>Enter Record</h1>
    <form class="form" action="teachers.php" method="post">

      <input type="text" name="name" id="name" placeholder="Enter Name">

      <input type="text" name="subject" id="subject" placeholder="Enter Subject">

      <button type="submit" name="button">Record</button>

    </form>



  </body>
</html>
