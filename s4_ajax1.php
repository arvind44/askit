<?php 
require 'include.inc.php';
 //retriving data from database


 if(isset($_POST['username'])){
    $username=$_POST['username'];
    $firstname=$_POST['First_Name'];
    $lastname=$_POST['Last_Name'];
    $pass=$_POST['pass'];
    $sid =$_POST['SID'];
    $date=$_POST['date'];
    $email=$_POST['Email_Id'];
    $mobile=$_POST['Mobile_Number'];
    $gender=$_POST['Gender'];
    $grad=$_POST['GRAD'];
    $pro=$_POST['PRO'];
    $password_hash=md5($pass);
      
      
      
      if(!empty($username)&&!empty($firstname)&&!empty($pass)&&!empty($sid))
      {
      
      //inserting data into database

 
       $sql="INSERT INTO user value('".mysql_real_escape_string($username)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($sid)."',STR_TO_DATE('$date', '%Y/%m/%d'),'".mysql_real_escape_string($email)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($gender)."','".mysql_real_escape_string($grad)."','".mysql_real_escape_string($pro)."')";

      //sending query to sql
      $query_run =mysql_query($sql);

      if($query_run) {
     ?>
    <META http-equiv="refresh" content="0;URL=aftersignup.php?user=<?php echo $user?>">
    <?php 
      }
      echo 'Query unsuccessfull';
    }
      
      else 
      {
     
      echo '<span style="color:white;text-align:center;">Please fill required fields :username,firstname,password and sid</span>';
      
      }
      }


      ?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ask it Sign UP</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script type="text/javascript" src="js/jquery-latest.js"></script>
  <script type="text/javascript">
   $( document ).ready(function() {
    $('#content').load('check.php').show();
  

   $('#user_name').keyup(function(){
    //$.post(url,data,callback)
   
     $.post("check.php",{name:form.username.value}, //data sending with request to server
      function(result){         //required callback function response receives - whatever written in echo of above php script 
       $('#content').html(result).show();
      }).blur(function(){
        $('#content').text('');
      });
   });
   });
  </script>

    <script type="text/javascript">
    function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

     for(var i=0; i<password.length; i++)
      {
        var char1 = password.charAt(i);
        var cc = char1.charCodeAt(0);

        if((cc>47 && cc<58) || (cc>64 && cc<91) || (cc>96 && cc<123))
        {
          if(password.length>=8){
         $("#pass").html("Password valid");
         $("#pass").css("color","green");
         }
        else{
        $("#pass").html("Password too short");
         $("#pass").css("color","red");
         }
         }
         else {
         $("#pass").html("Password not alphanumeric");
          $("#pass").css("color","red");
        
          return false;
        }
    }
 }


  </script>

<script type="text/javascript">
    function checkPasswordMatch1() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

        if (password === confirmPassword){
         $("#divCheckPasswordMatch").html("Password  match!");
          $("#divCheckPasswordMatch").css("color","green");
        }
        
        else{
        $("#divCheckPasswordMatch").html("Password do not match!");
         $("#divCheckPasswordMatch").css("color","red");
      }
  }
      
</script>
  
    
</head>

<body>
  <div class="container">
    <section class="register">
      <h1>ASK IT</h1>
      <form  name="form" action="s4_ajax1.php" method="POST">
      <div class="reg_section personal_info">
      <h3>Your Personal Information</h3>
     
      <input type="text"   id="user_name" placeholder="Your Desired Username " name="username">
      <div id="content"></div>
      <h3>First Name</h3>
      <input type="text" name="First_Name" value="<?php echo $firstname; ?>" placeholder="Your firstname ">
      <h3>Last Name</h3>
      <input type="text" name="Last_Name" value="<?php echo $lastname; ?>" placeholder="Your Lastname ">
      <h3>SID</h3>
      <input type="text" name="SID" value="<?php echo $sid; ?>" placeholder="Sid">
      <h3>Date Of Birth</h3>
      <input type="date" name="date" value="<?php echo $date; ?>" placeholder="Date:format yyyy/mm/dd">
      <h3>Email Address</h3>
       <input type="text" name="Email_Id" id="emailid" value="<?php echo $email; ?>" placeholder="Your E-mail Address">
       <div id="sp"></div>
      <!--script for javascript-->
       <script type="text/javascript" src="js/jquery-latest.js"></script>
      <script type="text/javascript" src="js/aj_email.js"></script>
      

      <h3>programme</h3>
      BE <input type="radio" name="PRO" value="BE" />
      ME <input type="radio" name="PRO" value="ME" />

       <h3>Year of Graduation</h3>
      <select name="GRAD" id="GRAD">
        <option value="-1">Year:</option>
        <option value="2012">2010</option>
        <option value="2011">2011</option>
        <option value="2010">2012</option>
        <option value="2009">2013</option>
        <option value="2008">2014</option>
        <option value="2007">2015</option>
        <option value="2006">2016</option>
        <option value="2005">2017</option>
        <option value="2004">2018</option>
        <option value="2003">2019</option>
        <option value="2002">2020</option>
        <option value="2001">2021</option>
        <option value="2000">2022</option>
        <option value="1999">2023</option>
        <option value="1998">2024</option>
        </select>
      
      <h3>Mobile Number</h3>
      <input type="text" name="Mobile_Number" value="<?php echo $mobile; ?>" placeholder="Your mobile number">
      <h3>Gender</h3>
      Male <input type="radio" name="Gender" value="MALE" />
      Female <input type="radio" name="Gender" value="FEMALE" />


      </div>
      <div class="reg_section password">
      <h3>Your Password</h3>
      <input type="password" name="pass" value="" placeholder="Your Password" id="txtNewPassword" onkeyup="checkPasswordMatch()">
      <div id="pass"></div>
      <h3>Confirm Password</h3>
      <input type="password" name="confirm" value="" placeholder="Confirm Password" id="txtConfirmPassword" onkeyup="checkPasswordMatch1()">
      <div id="divCheckPasswordMatch"></div>
      <p class="submit"><input type="submit" name="commit" value="Sign Up"></p>
      </form>
      </section>
      </div>
</body>
</html>