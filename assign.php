<?php

$server="localhost";
$user="root";
$pass="";
$database="register";

$con=mysqli_connect($server,$user,$pass,$database);

if (!$con) {
  die("Connection to database failed due to ".mysqli_connect_error());
}

session_start();






 ?>







<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php require 'nav.php' ?>





  </body>
</html>
