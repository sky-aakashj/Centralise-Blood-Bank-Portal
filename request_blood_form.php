<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <title>Request Blood Form</title>
    <style>
        /* Header/logo Title */
        header {
            padding: 40px;
            text-align: center;
            background:#ED1B2F;
            color: black;
        }


        /* Increase the font size of the heading */
        .header h1 {
            font-size: 40px;
        }
    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------
-->


<?php
$bbid = $_REQUEST['id'];
//echo $bbid;
?>

</head>

<body>
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

            <!--<div>
                <button class="btn btn-light active" onclick="location.href = 'bank_registration.html';">Blood Bank
                    Registration</button>
                <button class="btn btn-light" data-toggle="modal" data-target="#loginModal">Admin Login</button>
            </div>-->
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


    <!-- ---------------Blood Bank Registration form============  -->
    <section class="testimonial py-5" id="testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-danger text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="images/requestblood.jfif" style="width:80%">
                            <h2 class="py-3">Request Blood Form</h2>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4">Please fill with correct details</h4>
                    <form action="requestbloodaction.php" method="POST" autocomplete="off">
                    <input type="hidden" name="id" value="<?php echo ($bbid); ?>" required/>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Name" name=" yourname" placeholder="Enter Your Name"
                                    class="form-control" type="text" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email id"
                                    name="email" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="patientname" name="patientname" placeholder="Enter Patient Name" class="form-control"
                                    required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">

                                <select id="bloodtype" name="bloodtype" class="form-control">
                                    <option selected>Choose Blood Group</option>
                                    <option> A+</option>
                                    <option> A-</option>
                                    <option> B+</option>
                                    <option> B-</option>
                                    <option>AB+</option>
                                    <option> AB-</option>
                                    <option> O+</option>
                                    <option> O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="phone No." name="phoneno" placeholder="Phone No." class="form-control"
                                    required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="date" name="date" placeholder="" class="form-control"
                                    required="required" type="Date">
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="hospitalname" name="hospitalname" placeholder="Enter Hospital Name"
                                    class="form-control" required="required" type="text">
                            </div>
                            
                                <div class="form-group col-md-6">
                                    <input id="comment" name="comment" placeholder="Comment"
                                        class="form-control" required="required" type="text">
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



</body>

</html>