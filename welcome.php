<?php
session_start();

if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true)
{
  header("location:login.php");
  exit;
}

 ?>















 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Welcome- <?php $_SESSION['username'] ?> </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css">
   </head>

   <body>
     <?php require 'nav.php' ?>
    <h1>Welcome- <?php echo $_SESSION['username'] ?>  </h1>

    <a href="/Login/course.php">Enroll in your Course</a>

    <h1>Your Courses</h1>


    <h2> -><?php
if(isset($_SESSION['btn']))
{
  echo  $_SESSION['s1'];
}

      ?></h2>

      <p><?php

      if(isset($_SESSION['tname']))
      {
        echo $_SESSION['tname'];
      }



       ?></p>

      <h2> -><?php
  if(isset($_SESSION['btn']))
  {
    echo  $_SESSION['s2'];
  }

        ?></h2>

        <p><?php

        if(isset($_SESSION['aname']))
        {
          echo $_SESSION['aname'];
        }



         ?></p>


        <h2> -><?php
    if(isset($_SESSION['btn']))
    {
      echo  $_SESSION['s3'];
    }

          ?></h2>

          <p><?php

          if(isset($_SESSION['bname']))
          {
            echo $_SESSION['bname'];
          }



           ?></p>


          <h2> -><?php
      if(isset($_SESSION['btn']))
      {
        echo  $_SESSION['s4'];
      }

            ?></h2>

            <p><?php

            if(isset($_SESSION['cname']))
            {
              echo $_SESSION['cname'];
            }



             ?></p>



            <h2> -><?php
        if(isset($_SESSION['btn']))
        {
          echo  $_SESSION['s5'];
        }

              ?></h2>

              <p><?php

              if(isset($_SESSION['dname']))
              {
                echo $_SESSION['dname'];
              }



               ?></p>







   </body>
 </html>
