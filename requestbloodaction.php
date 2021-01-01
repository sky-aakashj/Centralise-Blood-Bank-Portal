<?php

/** database connection **/
require ("dbcon.php");
$con = dbConnect();

/** getting form data from user **/
//print_r($_REQUEST);
$add_bbid = $_POST["id"];
$add_name = $_POST["yourname"];
$add_bloodtype = $_POST['bloodtype'];
$add_email = $_POST['email'];
$add_phoneno = $_POST['phoneno'];
$add_patientname = $_POST['patientname'];
$add_date = $_POST['date'];
$add_hospitalname= $_POST['hospitalname'];
$add_comment = $_POST['comment'];

//echo $add_name;


$add_sql = "INSERT INTO `requestblood` ( `BBid`, `name`,`patientname`,`bloodgroup`,`contactno`,`email`,`date`,`hospitalname`,`comment`) VALUES ( '$add_bbid', '$add_name','$add_patientname','$add_bloodtype','$add_phoneno','$add_email','$add_date','$add_hospitalname','$add_comment');";
//var_dump($add_sql);
//INSERT INTO `requestblood` (`reqid`, `BBid`, `name`, `patientname`, `bloodgroup`, `contactno`, `email`, `date`, `hospitalname`, `comment`) VALUES (NULL, '1', 'Aakash', 'amit', 'B+', '943743935', 'aakash123@gmail.com', '2020-10-23', 'hinduja hospital', 'need urgently');
$add_data = $con->query($add_sql);
if (($add_data) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $add_sql . "<br>" . $con->error;
  }

header("Location:search_donar.html ?action=success");


?>