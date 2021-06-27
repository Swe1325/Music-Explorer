<?php
 $user2 = $_POST["user2"];
 $em1 = $_POST["em1"];
 $pass2 = $_POST["pass2"];

 if(!empty($user2) || !empty($em1) || !empty($pass2))
 {
     $host = "localhost";
     $dbusername = "root";
     $dbpassword = "";
     $dbname = "music";

     $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

     if(mysqli_connect_error()){
         dei('Connect Error('.mysqli_connect_errno() .') '.mysqli_connect_error());
     }
     else{
         $SELECT = "SELECT em1 From registerd Where em1 = ? Limit 1";
         $INSERT = "INSERT Into register( user2 , em1 , pass2 ) values(?,?,?)";

         $stmt = $conn->prepare($SELECT)
         $stmt->bind_param("s",$em1);
         $stmt->execute();
         $stmt->bind_result($em1);
         $stmt->bind_result();
         $rnum = $stmt->num_rows;

         if($rnum==0){
             $stmt->close();
             $stmt = $conn->prepare($INSERT);
             $stmt->bind_param("sss", $user2, $em1, $pass2);
             $stmt->execute();
             echo "New record inserted successfully";
         } else {
            echo "Someone already registered using this email";
         }
         $stmt->close();
         $conn->close();
     }
 } else {
    echo "All fields are required";
    die();
 }
 ?>