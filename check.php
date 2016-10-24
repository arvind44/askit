<?php
require 'include.inc.php';

      
       $username=mysql_real_escape_string($_POST['name']);
       $us="SELECT username FROM user where username='$username'";
       $query= mysql_query($us);

       if($username==NULL) {
       	echo '<span style="color:blue;text-align:center;font-size:13px">Choose Username</span>';
       }
       else if(strlen($username)<4){
       	echo '<span style="color:red;text-align:center;font-size:13px">UserName Too Short</span>';
       }
       else
       if(mysql_num_rows($query)>=1){
       echo '<span style="color:red;text-align:center;font-size:13px;">Username Already Exist .Please provide another User Name</span>';
       }
       else {
       	echo '<span style="color:green;text-align:center;font-size:13px">UserName Available!</span>';
       }

?>