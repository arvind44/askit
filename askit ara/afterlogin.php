
<!DOCTYPE html>
<html>

<head> 
<style type="text/css">
    div{
    	position: absolute;
    	top:40px;
    	left: 1000px;
    	color: grey;
    	border: 1px black solid;
    	border-radius: 3px;
    	
    }
</style>
</head>
<body>
<center><h1>This is Home Page</h1></center>
<br>
<form action="delete_cookie.php" method="post" >
	
	<div id="logout"><input type = "submit" name = "button" value = "LogOut"></div>
<br><br><br>
</form>
 
<?php
   $dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = 'password'; 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if($conn){
   $query = "Select * from Questions;";
   mysql_select_db('askit'); 
   $result = mysql_query( $query, $conn );
   $row = mysql_fetch_assoc($result);
    echo $row["Question"]."?";

   /**/}
?>


</body>
</html>