<?php

session_start();
$server="localhost";
$user="root";
$pass="";
$database="register";

$con=mysqli_connect($server,$user,$pass,$database);

$subject=$_POST["subject"];



$sql="Select tname  from teachers where subject='$subject' ";

$result=mysqli_query($con,$sql);



$con->close();





 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Test-Play</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css">
   </head>
   <body>
      <?php require 'nav.php' ?>

     <h1>Enter Subject</h1>
     <form  action="test.php" method="post">

       <input type="text" name="subject" id="subject">
       <button type="submit" name="button">Submit</button>

     </form>

     <?php

     if($result){

       if(mysqli_num_rows($result)>0)
       {
         $row=mysqli_fetch_assoc($result);

         echo ''.$row['tname'].''  ;


       }
     }



      ?>

   </body>
 </html>
