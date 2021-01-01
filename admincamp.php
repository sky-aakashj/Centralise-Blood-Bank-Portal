<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Dashboard-Blood Camp List </title>
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
$value=$_SESSION["user_name"];

$read_sql1 = "Select * from `bloodbanks` where Email = '$value' ";
//var_dump($read_sql);
$read_data1 = $con->query($read_sql1);	
//var_dump($read_data);
$data_array1 = $read_data1->fetch_assoc();
//echo $data_array1["BBid"];
$add_bbid= $data_array1["BBid"];
$read_sql = "Select * from `campschedule` where BBid ='$add_bbid' ";
//var_dump($read_sql);
$read_data = $con->query($read_sql);	
//var_dump($read_data);
//$data_array = $read_data->fetch_assoc();
//echo $data_array["BBid"];






?>
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
                        <!-- <a class="nav-link " href="#">
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
                    <h1 class="mt-4">Blood Camp List</h1>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blood Camp List</li>
                    </ol>
                    <div class="card mb-4">
                            <div class="card-body">
                                Admin can see all the camp registered by them.
                                
                            </div>
                    </div>
                    

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            DataTable 
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Camp Name</th>
                                            <th>Address</th>
                                            <th>Time</th>
                                            <th> Date</th>
                                            <th>Phone No.</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
				                        while($data_array = $read_data->fetch_assoc()){
			                        ?>
                                        <tr>
                                            <td><?php echo $data_array["Campid"];?></td>
                                            <td><?php echo $data_array["CampName"];?></td>
                                            <td><?php echo $data_array["Address"];?></td>
                                            <td><?php echo $data_array["Time"];?></td>
                                            <td><?php echo $data_array["Date"];?></td>
                                            <td><?php echo $data_array["phone"];?></td>
                                            <td><a href="deletecamp.php?id=<?php echo $data_array["Campid"]; ?>"onclick="javascript: return confirm('Are you sure you want to delete this Camp?')" class="btn btn-danger ">DELETE</a>
						 <a href="#?id=<?php echo $data_array["Campid"]; ?>" class="btn btn-danger ">EDIT</a> 
						
						</td>
                                            <?php
                                            }
                                            ?>
                                        </tr>

                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
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