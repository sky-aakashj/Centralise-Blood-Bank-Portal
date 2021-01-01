<?php


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

$read_sql1 = "Select * from `bloodbanks` where Email = '$value' ";
//var_dump($read_sql);
$read_data1 = $con->query($read_sql1);	
//var_dump($read_data);
$data_array1 = $read_data1->fetch_assoc();
//echo $data_array1["BBid"];
$add_bbid= $data_array1["BBid"];
//echo $add_bbid;




/** getting bloodtype for increasing or decreasing the blood record from bloodstock **/

if(isset($_GET["a++"])){

 $sql= "UPDATE `bloodstock` SET `A+` = `A+` + 1 WHERE BBid = $add_bbid ";
 $read_data1 = $con->query($sql);
 header ("Location: bloodstock.php");	
    
//echo " value of A+ increament";
}


if(isset($_GET["a+-"])){

    $sql= "UPDATE `bloodstock` SET `A+` = `A+` - 1 WHERE BBid = $add_bbid ";
 $read_data1 = $con->query($sql);
 header ("Location: bloodstock.php");	
    //echo " value of A+ decreament";
}



if(isset($_GET["a-+"])){

    $sql= "UPDATE `bloodstock` SET `A-` = `A-` + 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of A- increament";
   }
   
   
   if(isset($_GET["a--"])){
   
       $sql= "UPDATE `bloodstock` SET `A-` = `A-` - 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       //echo " value of A- decreament";
   }
   


if(isset($_GET["b++"])){

    $sql= "UPDATE `bloodstock` SET `B+` = `B+` + 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of B+ increament";
   }


   if(isset($_GET["b+-"])){

    $sql= "UPDATE `bloodstock` SET `B+` = `B+` - 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of B+ decreament";
   }   
   


   if(isset($_GET["b-+"])){

    $sql= "UPDATE `bloodstock` SET `B-` = `B-` + 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of B- increament";
   }


   if(isset($_GET["b--"])){

    $sql= "UPDATE `bloodstock` SET `B-` = `B-` - 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of B- decreament";
   }   
      


   if(isset($_GET["ab++"])){

    $sql= "UPDATE `bloodstock` SET `AB+` = `AB+` + 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of AB+ increament";
   }


   if(isset($_GET["ab+-"])){

    $sql= "UPDATE `bloodstock` SET `AB+` = `AB+` - 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of AB+ decreament";
   }   


   

   if(isset($_GET["ab-+"])){

    $sql= "UPDATE `bloodstock` SET `AB-` = `AB-` + 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of AB- increament";
   }


   if(isset($_GET["ab--"])){

    $sql= "UPDATE `bloodstock` SET `AB-` = `AB-` - 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of AB- decreament";
   }   
      


   if(isset($_GET["o++"])){

    $sql= "UPDATE `bloodstock` SET `O+` = `O+` + 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of O+ increament";
   }
   
   
   if(isset($_GET["o+-"])){
   
       $sql= "UPDATE `bloodstock` SET `O+` = `O+` - 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       //echo " value of O+ decreament";
   }



   
   if(isset($_GET["o-+"])){

    $sql= "UPDATE `bloodstock` SET `O-` = `O-` + 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       
   //echo " value of O- increament";
   }
   
   
   if(isset($_GET["o--"])){
   
       $sql= "UPDATE `bloodstock` SET `O-` = `O-` - 1 WHERE BBid = $add_bbid ";
    $read_data1 = $con->query($sql);
    header ("Location: bloodstock.php");	
       //echo " value of O- decreament";
   }
   


?>