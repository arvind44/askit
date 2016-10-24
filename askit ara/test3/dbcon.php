<?php

$dbc = mysqli_connect('localhost' , 'root' , 'Incorrect' , 'abcd') ;
if(mysqli_connect_errno())
{
	echo "Connection failed".mysqli_connect_error() ;
	exit ;
}

?>