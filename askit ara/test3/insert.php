<?php


$new_sql = "INSERT INTO student (name) VALUES ("qwerty");"

mysql_select_db('abcd')
$new_qry = mysql_query($new_sql,$dbc);

if(! $new_qry )
{
	echo "not inserted" ;
}

echo "enter success" ;

mysql_close() ;

?>