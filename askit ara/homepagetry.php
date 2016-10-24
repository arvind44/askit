
<!DOCTYPE html>
<html>

<head> 
<link rel = "stylesheet" href = "homestyle.css">
</head>
<body>
   <?php
   $dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = 'password'; 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $q = "select First_Name from user where user_ID = \"".$_COOKIE["name"]."\";";
   //echo $q;
   mysql_select_db('askit');
   $result = mysql_query($q,$conn);
   $r = mysql_fetch_assoc($result);
   $username = $r["First_Name"];
?>
<center><form action="delete_cookie.php" method="post" >AskIT! 
	<input type = "text" placeholder = "Type the question you want to search....." size = "60">
	<input type = "submit" value = "go">
	<?php
   echo "<input type = \"button\" value = \"Hello ".$username."\">";
   ?>
   <input type = "submit" name = "button" value = "Logout">
   
</form>
 </center>
<hr>
<center><h3>Here will be navigation bar which have links like contact us home category etc</h3></center>
<hr>
<?php
   if($conn){
   $query = "Select * from Questions;";
   //mysql_select_db('askit'); 
   $result = mysql_query( $query, $conn );
   $row = mysql_fetch_assoc($result);
    echo $row["Question"]."?";

   /**/}
?>


</body>
</html>