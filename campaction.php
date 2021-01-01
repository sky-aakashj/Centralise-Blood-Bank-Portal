<?php
/** database connection **/
require ("dbcon.php");
$con = dbConnect();

session_start();
if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	
	header ("Location: index2.html");	
}

//echo $_SESSION["user_name"];
$value=$_SESSION["user_name"];

$read_sql = "Select * from `bloodbanks` where Email = '$value' ";
//var_dump($read_sql);
$read_data = $con->query($read_sql);	
//var_dump($read_data);
$data_array = $read_data->fetch_assoc();
//echo $data_array["BBid"];


/** getting form data from user **/
//print_r($_REQUEST);
$add_bbid= $data_array["BBid"];
$add_conductedby= $data_array["BBName"];
$add_campname = $_POST["campname"];
$add_time = $_POST['time'];

$add_phoneno = $_POST['phoneno'];

$add_address = $_POST['address'];
$add_date = $_POST['date'];

//echo $add_fname;
//echo $add_phoneno;
//echo $add_gender;
//echo $add_date;


//var_dump($add_phn);


$add_sql = "INSERT INTO `campschedule` ( `BBid`, `CampName`, `Time`, `Address`, `ConductedBy`, `Date`, `phone`) VALUES ( '$add_bbid', '$add_campname', '$add_time', '$add_address', '$add_conductedby', '$add_date', '$add_phoneno');";
//var_dump($add_sql);
//INSERT INTO `donorregistration` (  `Fname`, `Lname`, `Age`, `Gender`, `Date`, `phone`) VALUES (  '$add_fname', '$add_lname', '$add_age', '$add_gender', '$add_date', '$add_phoneno');
$add_data = $con->query($add_sql);

if (($add_data) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $add_sql . "<br>" . $con->error;
  }





header("Location:admindashboard.php");

?>
