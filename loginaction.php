<?php

$email = $_POST['email'];
$password = $_POST['password'];


require ("dbcon.php");
$con = dbConnect();



$result = mysqli_query($con,"Select * from bloodbanks where Email = '$email' and Password='$password'")
			or die("Failed to query database".mysqli_error());


//$query = mysqli_query($con,"Select * from admin where username = '$username' and password='$password'")
//			or die("Failed to query database".mysqli_error());

//$row1 = mysqli_fetch_array($query);
$row = mysqli_fetch_array($result);
if ($row['Email'] == $email && $row['Password'] == $password){
		echo "welcome".$row['Email'];
		
		session_start();
		//print_r($_SESSION);
		$_SESSION['user_name'] = $row['Email'];
		
		//print_r($_SESSION['user_name']);
	//echo "Hello ". $_SESSION['user_name'];
		header ("Location: admindashboard.php");

}
/*
elseif ($row1['email'] == $email && $row1['password'] == $password){
	
	
		//echo "welcome".$row['username'];
		
		session_start();
		//print_r($_SESSION);
		$_SESSION['user_name'] = $row1['username'];
		
		//print_r($_SESSION['user_name']);
		//echo "Hello ". $_SESSION['user_name'];
		header ("Location: admin.php");
}
*/





else{
	header ("Location: index2.html?msg=Username or password is incorrect");
	echo "failed to login";
	
}

?>
