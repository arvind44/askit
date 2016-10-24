<?php
   $dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = 'password'; 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
 
   $q = "select * from user where user_ID = \"".$_COOKIE["name"]."\";";
   mysql_select_db('askit');
   $result = mysql_query($q,$conn);
  
   $r = mysql_fetch_assoc($result);
    if(!$r){
   	header("location:login.html");
   }
   else
   ;
   $st = "update user set Password = '".$_POST["pass"]."' where user_ID = \"".$_COOKIE["name"]."\";";
  echo $st;
  	mysql_query($st,$conn);
  	header("location: login.php");
?>