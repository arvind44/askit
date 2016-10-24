<?php


$ans_id = $_GET["answerid"] ;
$ques_id=$_GET['qid'];

 include("dbcon.php");


if(!$conn)
	die("could not connect" .mysql_errno());

else{

		
			$del_ques = "delete from answers where answer_ID = '$ans_id' ;" ;
			mysql_select_db("askit");
		
			$sql_status2 = mysql_query($del_ques,$conn);

			if(!$sql_status2)
			{
				die('     could not run the delete question query       '.mysql_error()) ;
			}
		

		
		
											

						header('location:question.php?questionid='.$ques_id) ;
}

mysql_close($conn);

?>`