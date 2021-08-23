<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> MY WEBSITE </title>
    </head>
 <body>

   <a href="home.html">Logout</a>
   <h1>this is the index page</h1>

   <br>
   hello
   <a href="profilee.html"><button type="redirect" class="submit-btn1">Profile Register</button></a>
 </body>
</html>

