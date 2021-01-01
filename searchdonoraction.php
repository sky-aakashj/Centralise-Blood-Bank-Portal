<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> See Available Blood Bank </title>
    <link href="CSS/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>

        <style>
        /* Header/logo Title */
        header {
            padding: 40px;
            text-align: center;
            background: #ED1B2F;
            color: black;
        }


        /* Increase the font size of the heading */
        .header h1 {
            font-size: 40px;
        }
    </style>

<?php



require ("dbcon.php");
$con = dbConnect();

    $search_city = $_POST["city"];
    $search_state = $_POST['state'];
    $search_bloodtype = $_POST['bloodtype'];
//echo  $search_city ;
    $read_sql = "select * from bloodbanks where BBid in (select BBid from bloodstock where  BBid in(select BBid from bloodbanks where city='$search_city' and state='$search_state') and `$search_bloodtype`>0) ";
//var_dump($read_sql);
$read_data = $con->query($read_sql);	
//var_dump($read_data);
//$data_array = $read_data->fetch_assoc();
//echo $data_array["BBid"];
////$value =  $data_array["BBid"];

//$read_sql2 = "Select '$search_bloodtype' from `bloodstock` where  BBid='$value'";
//var_dump($read_sql);
//$read_data2 = $con->query($read_sql2);
//$data_array2 = $read_data2->fetch_assoc();




    //echo $add_city;
    //echo $add_state;


    ?>   


</head>
<body >
     <!--Header/logo Title */-->
     <header>
        <h1>BLOOD BANK MANAGEMENT SYSTEM</h1>

    </header>

    <!-----------------------------NAVBAR START HERE -------------------------------- */-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index2.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search_donar.html">Find Blood</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="upcomingcamp.php">Upcoming Camps</a>
                </li>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">For Blood Bank</a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" data-toggle="modal" data-target="#loginModal">Blood Bank Login</a>
                        <a class="dropdown-item" href="bank_registration.html">Blood Bank
                            Registration</a>

                    </div>
                </li>
            </ul>

            
        </div>
    </nav>

    
    <!-- -------------------login form Modal --------->
 <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ---------------login form============  -->
                <form  action="loginaction.php" method="POST" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">
                            </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  
            </div>
        </div>
    </div>
  </div>


  <div >
        <div>
            
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">List Of Blood Banks</h1>
                    
                    
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
                                        <th>BBid</th>
                                        <th>Blood Bank Name</th>
                                        <th>Phone No.</th>
                                        <th>Email</th>
                                        <th> City</th>
                                        <th>State</th>
                                        <th>Requested Blood</th>
                                        <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
				                        while($data_array = $read_data->fetch_assoc()){
			                        ?>
                                        <tr>
                                        <td><?php echo $data_array["BBid"];?></td>
                            <td><?php echo $data_array["BBName"];?></td>
                            <td><?php echo $data_array["PhoneNumber"];?></td>
                            <td><?php echo $data_array["Email"];?></td>
                            <td><?php echo $data_array["City"];?></td>
                            <td><?php echo $data_array["State"];?></td>
                            <td>Available</td>
                            <td><a href="request_blood_form.php?id=<?php echo $data_array["BBid"]; ?>" class="btn btn-danger ">Request</a></td>
						
						
						                    
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