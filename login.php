<?php
$login=false;
$server="localhost";
$user="root";
$pass="";
$database="register";

$con=mysqli_connect($server,$user,$pass,$database);

if (!$con) {
  die("Connection to database failed due to ".mysqli_connect_error());
}

if(isset($_POST['username'])||isset($_POST['password']))
{
  $username=$_POST["username"];
  $password=$_POST["password"];


  $sql="Select *  from rform where username='$username' AND password='$password'";

  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);

  if($num == 1)
  {
    $login=true;
  }

  else {
    $login=false;
  }
  if($login)
  {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Great Job!</strong> You have Logged In Sucessfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['username']=$username;

  header("location:welcome.php");
  }
  else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>No!</strong> This account does not exist
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
     <title>Login  Page </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css">
   </head>
 
   <body>
     <?php require 'nav.php' ?>
     <div class="log">
       <h1>Login Here</h1>
       <form class="form" action="login.php" method="post">
         <input type="text" name="username" id="username" placeholder="Username">
         <input type="password" name="password" id="password" placeholder="Password">
         <button type="submit" name="btn">Login</button>



       </form>

     </div>


   </body>
 </html>
