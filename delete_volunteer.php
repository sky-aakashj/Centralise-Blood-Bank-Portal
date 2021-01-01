<?php




/** getting id for deleting the record from user **/
$donorid = $_REQUEST["id"];
//echo $donorid;

/** database connection **/
require ("dbcon.php");
$con = dbConnect();


session_start();
if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	
	header ("Location: index2.html");	
}


$del_sql = "DELETE FROM `campregistration` WHERE Donorid = '$donorid'";
//var_dump($del_sql);

$del_data = $con->query($del_sql);
//var_dump($del_data);

if (($del_data) === TRUE) {
    echo "record has been deleted  successfully";
  } else {
    echo "Error: " . $del_sql . "<br>" . $con->error;
  }
header("Location:camp_registered_people.php");

?>
