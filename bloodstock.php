<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Dashboard- Blood Stock </title>
    <link href="CSS/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>

<!-- Font Awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

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
$read_sql = "Select * from `bloodstock` where BBid ='$add_bbid' ";
//var_dump($read_sql);
$read_data = $con->query($read_sql);	
//var_dump($read_data);
$data_array = $read_data->fetch_assoc();
//echo $data_array["BBid"];


?>
<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
-->
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
                    <h1 class="mt-4">Blood Stock</h1>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blood sock</li>
                    </ol>
                    <div class="card mb-4">
                            <div class="card-body">
                                Admin can update available blood unit.
                                
                            </div>
                    </div>
                    
                    <!-- blood stock table -->
                    <div class="container">
           
  <table class="table table-hover" style="border: 1px solid black;">
    <thead>
      <tr>
        <th>Blood Type</th>
        <th>Available</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <form action="increasebloodstock.php" method="get">
        <td>A+</td>
        <td name="A+"><?php echo $data_array["A+"]." "."Unit";?></td>
        <td>
             <button name="a++" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="a+-" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>
      <tr>

        <form action="increasebloodstock.php" method="get">
        <td>A-</td>
        <td name="A-"><?php echo $data_array["A-"]." "."Unit";?></td>
        <td>
             <button name="a-+" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="a--" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>
      <tr>
      <form action="increasebloodstock.php" method="get">
        <td>B+</td>
        <td name="B+"><?php echo $data_array["B+"]." "."Unit";?></td>
        <td>
             <button name="b++" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="b+-" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>
      <tr>
      <form action="increasebloodstock.php" method="get">
        <td>B-</td>
        <td name="B-"><?php echo $data_array["B-"]." "."Unit";?></td>
        <td>
             <button name="b-+" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="b--" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>
      <tr>
      <form action="increasebloodstock.php" method="get">
        <td>AB+</td>
        <td name="AB+"><?php echo $data_array["AB+"]." "."Unit";?></td>
        <td>
             <button name="ab++" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="ab+-" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>
      <tr>
      <form action="increasebloodstock.php" method="get">
        <td>AB-</td>
        <td name="AB-"><?php echo $data_array["AB-"]." "."Unit";?></td>
        <td>
             <button name="ab-+" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="ab--" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>
      <tr>
      <form action="increasebloodstock.php" method="get">
        <td>O+</td>
        <td name="O+"><?php echo $data_array["O+"]." "."Unit";?></td>
        <td>
             <button name="o++" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="o+-" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>
      <tr>
      <form action="increasebloodstock.php" method="get">
        <td>O-</td>
        <td name="O-"><?php echo $data_array["O-"]." "."Unit";?></td>
        <td>
             <button name="o-+" type= "submit" class= "btn btn-danger"> <i class="fas fa-plus-square"></i> </button>
            <button name="o--" type= "submit" class= "btn btn-danger"><i class="fas fa-minus-square"></i></button>
            
		</td>
     </form>
      </tr>

    </tbody>
  </table>
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