<?php

//echo "this is answer backend";

$ques_id = $_GET["questionid"] ;
$answer_id = $_GET["answerid"] ; 

$comment = $_POST["comment"] ;

 include("dbcon.php");



if(!$conn)
	die("could not connect" .mysql_errno());

else{
		
		mysql_select_db("askit");
		
		

		$t = getdate() ;

		// echo $date ;

		$day = $t['mday'] ;
		$month = $t['mon'];
		$year = $t['year'];

		if($month < 10)
		{
			$month = '0'.$month ;
		}
		if($day < 10)
		{
			$day = '0'.$day;
		}

		$date = $year.'-'.$month.'-'.$day ;

		// $date = "15/15/2016";
		$userID = $_COOKIE["name"];
		// $ques = $_POST["ques"];
		// $categ = $_POST["cat"];

		$query = 'INSERT INTO comments VALUES ( "'.$answer_id.'","'.$comment.'","'.$userID.'","'.$date.'");'; 
     // echo $query;
      $inc_ans = "UPDATE answers set number_of_comments = number_of_comments + 1 where answer_ID = '$answer_id' ;" ;
      echo $inc_ans ;
      mysql_select_db("askit") ;
      $sqlstatus = mysql_query($query,$conn);
      $sqlstatus2 = mysql_query($inc_ans , $conn) ;

      if(!$sqlstatus){
							die('Could not ' .mysql_error());
						}

		if(!$sqlstatus2)
		{
			die('could nnot increment the answers' .mysql_errno());
		}					

						header('location:comments.php?questionid='.$ques_id.'&answerid='.$answer_id) ;
}

mysql_close($conn);

?>