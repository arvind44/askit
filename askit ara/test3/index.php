



<?php
$dbc = mysqli_connect('localhost' , 'root' , 'Incorrect' , 'abcd') ;
if(mysqli_connect_errno())
{
	echo "Connection failed".mysqli_connect_error() ;
	exit ;
}



$new_sql = "INSERT INTO student (name) VALUES ('qwerty');" ;

// mysql_select_db('abcd');
$new_qry = mysql_query($new_sql,$dbc);

if(! $new_qry )
{
	echo "not inserted" ;
}
else
{
echo "enter success" ;
}
// mysql_close() ;


?>