<?php
$dbhost = 'localhost';
$dbroot = 'root';
$dbpass = 'password';
$conn = mysql_connect($dbhost,$dbroot,$dbpass);
$gotID = $_POST["user"];
$gotpass = $_POST["pass"];
$time = time()+36000;

if(!$conn)
	die("could not connect" .mysql_errno());

else{
			$sql = 'Select * from user where user_ID = "'.$gotID.'" and password = "'.$gotpass.'";';
		mysql_select_db("askit");
$result = mysql_query($sql,$conn);
		$row = mysql_fetch_assoc($result);
		if($row){
			setcookie("name",$row["user_ID"],$time);		
			header('Location: homepagetry.php') ;  //used for redirecting the page
		}
		else
			{
				echo "";
				include("login.html");
			
}
}

mysql_close($conn);
?>
