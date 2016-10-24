



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
	$userid = 

    include("dbcon.php");
   $q = "select First_Name from user where user_ID = \"".$_COOKIE["name"]."\";";
  
   mysql_select_db('askit');
   $result = mysql_query($q,$conn);
  
   $r = mysql_fetch_assoc($result);
    if(!$r){
   	header("location:login.php");
   }
   $username = $r["First_Name"];

   // $userpage = implode($_COOKIE["name"],'.php');

   // implode
   $arr = array($_COOKIE["name"],'.php') ;
   // echo implode("",$arr) ;
   // echo $userpage ;
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

		<?php
		
		$userpage = $_COOKIE["name"] ;
   ?>
	
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
					<a href="category.php">Categories</a>
				</li>
				<li>
					<a href="askques.php">ASK</a>
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
				
				

				<div class="box" id = "box-left">

			<h3>
					CATEGORIES
					<br>
					<br>
				</h3>

				<ul class="list">
					<li class="first">
						<a href="category.php?category=General">General</a>
					</li>
					<li>
						<a href="category.php?category=Placement">Placement</a>
					</li>
					<li>
						<a href="category.php?category=Internship">Intership</a>
					</li>
					<li>
						<a href="category.php?category=Clubs">Clubs</a>
					</li>
					
					<li>
						<a href="category.php?category=Aeronautical">Aeronautical</a>
					</li>
					<li>
						<a href="category.php?category=Civil">Civil</a>
					</li>
					<li>
						<a href="category.php?category=Computer">Computer Science</a>
					</li>
					<li>
						<a href="category.php?category=Electrical">Electrical</a>
					</li>
					<li>
						<a href="category.php?category=Electronics">Electronics</a>
					</li>
					<li>
						<a href="category.php?category=Mechanical">Mechanical</a>
					</li>
					<li>
						<a href="category.php?category=Metallurgy">Metallurgy</a>
					</li>
					<li>
						<a href="category.php?category=Production">Production</a>
					</li>
					
					
				</ul>
			</div>

			<div class="box" id="box-right">
			<br>
			<br>
			<br>
				<h3>
					USER  PROFILE
				</h3>

				<p>

					<?php
						 include("dbcon.php");

						if(!$conn){
							die('Could  not connect'.mysql_error());
						}

						$userid_get = $_GET["usernameviaget"] ;

						// echo "$userid_get" ;

						// echo "working working " ;


						$sqlquery = 'select * from user  where user_ID = "'.$userid_get.'";' ; 

						mysql_select_db('askit');
						$sqlstatus = mysql_query($sqlquery,$conn);
						$data = mysql_fetch_array($sqlstatus , MYSQL_NUM) ;


						if(!$sqlstatus){
							die('Could not run the query '.mysql_error());
						}

						
						


											  

							
							echo "User name : " ;
							echo "{$data[0]}<br>" ;
							
							echo "First Name : " ;
							echo " {$data[2]} <br> ";
							
							echo "Last Name : " ;
							echo " {$data[3]} <br> ";

							echo "Student ID : " ;
							echo " {$data[7]} <br> ";

							echo "Branch : " ;
							echo " {$data[9]} <br> ";

							echo "Date of Birth : " ;
							echo " {$data[4]} <br> "; 
							
							echo "Gender : " ;
							echo " {$data[5]} <br> ";

							echo "Year of Graduation : " ;
							echo " {$data[6]} <br> ";

							echo "Programme :" ;
							echo " {$data[8]} <br> ";

							echo "Contact : " ;
							echo " {$data[10]} <br> ";

							echo "Email_id : " ;
							echo " {$data[11]} <br> ";

							echo "____________________________________________<br>";
							
							
						


					mysql_close($conn) ;

					?>

					<?php
					if($userid_get == $_COOKIE['name'])
					{
						?>
						<div id = "edit2">
						<table>
						<tr>
						<td><a href = "edituserprofile.php?usernameviaget=<?php echo '$_COOKIE["name"]' ;?> ">edit profile</a></td></tr>
					<tr>	<td><a href = "changepassword.php" >change password</a></td>
						</tr>
						</table>
						
						</a>
						</div>

						<?php
					}
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

