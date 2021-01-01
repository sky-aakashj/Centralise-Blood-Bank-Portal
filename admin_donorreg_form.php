<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard-donor Registration </title>
    <link href="CSS/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>


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

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag --------->
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
        <a class="navbar-brand" href="#">Blood Bank</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>


        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
            <a href="logout.php" role="button" class="btn btn-outline-light">Logout</a>
            </li>

        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admindashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Pages</div>
                        <a class="nav-link" href="admin_donorreg_form.php">
                            <div class="sb-nav-link-icon"></div>
                            New Donar Registration Form
                        </a>
                        <a class="nav-link" href="createcamp.php">
                            <div class="sb-nav-link-icon"></div>
                            New Camp Form
                        </a>
                        <!-- <a class="nav-link" href="sellingform.php">
                            <div class="sb-nav-link-icon"></div>
                            New Sell form
                        </a> -->
                        <a class="nav-link" href="createbloodstock.php">
                            <div class="sb-nav-link-icon"></div>
                            Create Blood Stock
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    

                
                        
                        <!-- ---------------Blood Donor Registration form============  -->
                        
    <section class="testimonial py-5 mx-8" id="testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-danger text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="images/donor.jfif" style="width:80%">
                            <h2 class="py-3">Blood Donar Registration</h2>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4">Please fill donor details</h4>
                    <form action="donorregaction.php" method="POST" autocomplete="off">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Fname" name=" fname" placeholder="First Name"
                                    class="form-control" type="text" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Lname" placeholder="Last Name"
                                    name="lname" required="required">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="phone No." name="phoneno" placeholder="Phone No." class="form-control"
                                    required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="Age" name="age" placeholder="Enter Age" class="form-control"
                                    required="required" type="number">
                            </div>
                            <div class="form-group col-md-6">

                                <select id="gender" class="form-control" name="gender">
                                    <option selected>Gender</option>
                                    <option> Male</option>
                                    <option> Female</option>
                                    <option> Transgender</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="date" name="date" placeholder="" type="date" class="form-control"
                                    required="required" type="number">
                            </div>
                            <div class="form-group col-md-6">

                                <select id="inputState" name="bloodgroup" class="form-control">
                                    <option selected>Blood Group</option>
                                    <option> A+</option>
                                    <option> A-</option>
                                    <option> B+</option>
                                    <option> B-</option>
                                    <option> O+</option>
                                    <option> O-</option>
                                    <option> AB+</option>
                                    <option> AB-</option>
                                </select>
                            </div>
                        </div>
                        
                        

                        <div class="form-row">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
        
                             
                    
                </div>
            </main>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="JS/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="JS/datatables-demo.js"></script>
</body>

</html>