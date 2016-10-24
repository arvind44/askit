<?php
if($_POST["Logout"])
{setcookie("name" , "" , time() -60) ;
header("Location: login.html");
}
else
header("Location: rough.php");

?>