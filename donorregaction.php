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
$add_bbname= $data_array["BBName"];
$add_fname = $_POST["fname"];
$add_lname = $_POST['lname'];

$add_phoneno = $_POST['phoneno'];
$add_age = $_POST['age'];
$add_gender = $_POST['gender'];
$add_date = $_POST['date'];
$add_bloodgroup = $_POST['bloodgroup'];

//echo $add_fname;
//echo $add_phoneno;
//echo $add_gender;
//echo $add_date;


//var_dump($add_phn);


$add_sql = "INSERT INTO `donorregistration` ( `BBid`, `Fname`, `Lname`, `Age`, `Gender`, `Date`, `phone`,`BBName`,`bloodgroup`) VALUES ( '$add_bbid', '$add_fname', '$add_lname', '$add_age', '$add_gender', '$add_date', '$add_phoneno','$add_bbname','$add_bloodgroup');";
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
