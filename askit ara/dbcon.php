<?php
   

   $dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = 'password'; 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass); 
    
   if(! $conn ) { 
      die('Could not connect: ' . mysql_error()); 
   } 
   $user = $_POST["User_Name"];
   $fname = $_POST["First_Name"];
   $lname = $_POST["Last_Name"];
   $password = $_POST["pass"];
   $sid = $_POST["SID"];
   $dob = $_POST["Birthday_day"]."/".$_POST["Birthday_Month"]."/".$_POST["Birthday_Year"];
   $email = $_POST["Email_Id"];
   $contact = $_POST["Mobile_Number"];
   $gender = $_POST["Gender"];
   $ygrad = $_POST["GRAD"];
  $prog = $_POST["PRO"];
   $branch = $_POST["Branch"];
   $sql = 'INSERT INTO user  
      VALUES ( "'.$user.'", "'.$password.'","'.$fname.'", "'.$lname.'", "'.
      $dob.'", "'.$gender.'", '. $ygrad.', "'.$sid.'", "'.
      $prog.'", "'.$branch.'", "'.$contact.'", "'.$email.'");';   
   echo $sql;
   mysql_select_db('askit'); 
   $retval = mysql_query( $sql, $conn ); 
    
   if(! $retval ) { 
      die('Could not enter data: ' . mysql_error()); 
   } 
    else
   {echo "Entered data successfully\n"; 
    include("login.html");
    }
   mysql_close($conn); 
?>
