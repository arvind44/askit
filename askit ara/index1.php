



<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
	ASK it for PEC
</title>

<link rel="stylesheet" type="text/css" href="style.css" />
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
   $dbpass = ''; 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $q = "select First_Name from user where user_ID = \"".$_COOKIE["name"]."\";";
   //echo $q;
   mysql_select_db('askit');
   $result = mysql_query($q,$conn);
   $r = mysql_fetch_assoc($result);
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
			<form action="" method="post">
				<div>
					<input class="text" name="search" size="50" maxlength="64" placeholder = "Search question"/>
				</div>
			</form>
		</div>
		<div id="logout">
			<form action="delete_cookie" method="post">
					<input type="submit" value = " logout " id="logbutton">
							</form>
		</div>
		<div id="account">
			
					
  <a href = "login.html" > <?php echo 'Hello .$username.' ; 
                          ?> 
                          </a>
   					
		</div>
		<div id="menu">
			<ul>
				<li class="first active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="category.php">Categories</a>
				</li>
				<li>
					<a href="#">ASK</a>
				</li>
				<li>
					<a href="#">Search</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="#">Links</a>
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
				<h2 id= "sitetitle">
				Welcome to ASK it
				</h2>
				<br>
				<br>


				<div class="box" id="box-left">
				<h3>
					CATEGORIES
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
				<h3>
					QUESTIONS
				</h3>

				<p>

					<?php
						$connection = mysql_connect('localhost' , 'root' , '' ) ;

						if(!$connection){
							die('Could  not connect'.mysql_error());
						}



						$sqlquery = 'select * from questions where qid !="" ;' ;

						mysql_select_db('askit');
						$sqlstatus = mysql_query($sqlquery,$connection);


						if(!$sqlstatus){
							die('Could not '.mysql_error());
						}


						  while ($row = mysql_fetch_array($sqlstatus, MYSQL_NUM)) {

							
							?>
							<a href="this question">
							<?php
							echo "{$row[1]}<br>" ;?></a>
							<?php
							echo " {$row[0]} <br> ";
							echo " {$row[2]} <br> ";
							echo " {$row[3]} <br> ";
							echo "____________________________________________<br>";
							
						}


					mysql_close($connection) ;
					?>
				</p>
				
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
	&copy; SiteName | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>
</div>
</body>
</html>

