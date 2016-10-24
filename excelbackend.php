<?php

include("dbcon.php");
$
$que = "select * from patientinfo ";
mysql_select_db('dengueproject');
   $result = mysql_query($que,$conn);
   if(!result)
   	die("could not connect");
   
   while($r = mysql_fetch_assoc($result)){
   $fname = $r["FirstName"];
   $mname = $r["MiddleName"];
   $lname = $r["LastName"];
   $dob = $r["DOB"];
   $age = $r["Age"];
   $sex= $r["Sex"];
   $cntct = $r["Contact_No"];
   $district = $r["District"];
   $teh = $r["Tehsil"];
   $type = $r["Type"];
   $name = $r["Name"];
$adm = $r["AdmNumber"];
$admdate = $r['AdmissionDate'];
$discharge = $r["DateOfDischarge"];
$deat = $r["DateOfDeath"];
$lama = $r["LAMA"];
$remarks = $r["Remarks"];
$dot = $r["DateOfTesting"];
$dor = $r["DateOfReporting"];
$result = $r["Result"];
$by = $r["PositiveBy"];
$tcentre = $r["Testing Center"];
$hospital = $r["TreatingHospital"];
$hname = $r["HospitalName"];
$hpresent = $r["Haemorrhage"];
$shock = $r["Shock"];
$th = $r["TravelHistory"];;
$thhospis = $r["PlacesVisited"];
$aoc = $r["Complications"];
$aocfield = $r["ComplicationsValue"];
$str = $fname$mname.",".$lname.",".$dob.",".$age.",".$sex.",".$cntct.",".$district.",".$teh.",".$type.",".$name.",".$adm.",".$admdate.",".$discharge.",".$deat.",".$lama.",".$remarks.",".$dot.",".$dor.",".$result.",".$by.",".$tcentre.",".$hospital.",".$hname.",".$hpresent.",".$shock.",".$th.",".$thhospis.",".$aoc.",".$aocfield."\n";
echo $str;
}
   ?>