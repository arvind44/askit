



<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
	ASK it for PEC
</title>

<link rel="stylesheet" type="text/css" href="css/home_style.css" />
<style type="text/css">
	#sitetitle{
		text-align: center;
		font-family: arial;
	}
</style>
</head>
<body>
	<?php
   $dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = 'Incorrect'; 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $q = "select First_Name from user where user_ID = \"".$_COOKIE["name"]."\";";
  
   mysql_select_db('askit');
   $result = mysql_query($q,$conn);
  
   $r = mysql_fetch_assoc($result);
    if(!$r){
   	header("location:login.php");
   }
   $username = $r["First_Name"];
?>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>
				<a href="#">ASK it</a>
			</h1>
		</div>
		<div id="search">
			<form action="search.php" method="post">
				<div>
					<input class="text" name="search" size="50" maxlength="64" placeholder = "Search question"/>
					<input type ="submit" value="search" name="searchbutton" id="searchbutton">
				</div>
			</form>
		</div>
		<div id="logout">
			<form action="delete_cookie.php" method="post">
					<input type="submit" value = " logout " id="logbutton">
							</form>
		</div>
		<div id="account">
			
					
  <a href = "user_profile.php?usernameviaget=<?php echo $_COOKIE['name'] ?>" > <table id="usertable"><tr><td><img src ="images/rounduser.png" id="userpic"></td><td>  <?php echo '  Hello, ' ;
                               echo $username; 
                          ?> </td></tr></table>
                          </a>
   					
		</div>
		<div id="menu">
			<ul>
				<li class="first active">
					<a href="index1.php">Home</a>
				</li>
				<li>
					<a >Categories</a>
				</li>
				<li>
					<a href="askques.php">ASK</a>
				</li>
				<li>
					<a >Search</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="help.php">Help</a>
				</li>
				<li class="last">
					<a href="contact.php">Contact</a>
				</li>
			</ul><br class="clearfix" />
		</div>
	</div>

	<div id="page">
		<!-- <div id="content"> -->
			<div class="box">
				


				<div class="box" id="box-left">
				<h3>
					CATEGORIES
					<br>
					<br>
				</h3>
				<ul class="list">
					<li class="first">
						<a href="#">Category1</a>
					</li>
					<li>
						<a href="#">Category1</a>
					</li>
					<li>
						<a href="#">Category1</a>
					</li>
					<li>
						<a href="#">Category1</a>
					</li>
					<li>
						<a href="#">Category1</a>
					</li>
					<li>
						<a href="#">Category1</a>
					</li>
					<li class="last">
						<a href="#">Category1</a>
					</li>
				</ul>
			</div>

			<div class="box" id="box-right">
			<h2 >
				CHANGE  PASSWORD
				</h2>
				<br>
				<br>
				<h3>
					Change your password
					
				</h3>

				<form action = "change_password_backend.php" method = "post">
				OLD PASSWORD : <strong><input type = "password" name = "old_pass"></strong>
				<br>
				<br>
				NEW PASSWORD : <strong><input type = "password" name = "new_pass"></strong>
				<br>
				<br>
				Confirm Password : <strong><input type = "password" name = "confirm_pass"> </strong>
				<input type = "label" value = "punnu">
				<input type = "submit" value = "Next" name = "next_button">
				<br>
				<br>
				</form>
                
					

					
				
			</div><br class="clearfix" />
		</div>
				
			</div>
			<br class="clearfix" />
		</div>
	<br class="clearfix" />
	</div>


			
	</div>
</div>
</div>
<div id="footer">
	&copy; Askit 
</div>
</body>
</html>

