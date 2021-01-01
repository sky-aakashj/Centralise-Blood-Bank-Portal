<?php
/** database connection **/
require ("dbcon.php");
$con = dbConnect();


/** getting form data from user **/
//print_r($_REQUEST);
$add_name = $_POST["BloodBankName"];
$add_password = $_POST['confirmpassword'];
$add_email = $_POST['email'];
$add_phoneno = $_POST['phoneno'];
$add_city = $_POST['city'];
$add_state = $_POST['state'];
$add_license = $_POST['license'];

//echo $add_name;

//var_dump($add_phn);


$add_sql = "INSERT INTO `bloodbanks` ( `BBName`, `PhoneNumber`,`Email`,`Password`,`City`,`State`,`BloodBankLicense`) VALUES ( '$add_name', '$add_phoneno','$add_email','$add_password','$add_city','$add_state','$add_license');";
//var_dump($add_sql);

$add_data = $con->query($add_sql);
/*
if ($add_data){
	echo $add_data;
	
	
}
else{
echo "not found";}
*///echo "<pre>";
//var_dump($add_data);
header("Location:index2.html");

?>
