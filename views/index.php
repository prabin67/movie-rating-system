<?php
require_once 'service/connection.php';

?>

<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Template | Bootstrap Simple Admin Template</title>
    <link href="../libraries/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../libraries/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="../libraries/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="../libraries/bootstrap1/css/bootstrap.min.css" rel="stylesheet">
    <link href="../libraries/css1/master.css" rel="stylesheet">
    <link href="../libraries/css1/notify.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="/images/h.jpeg" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="../Dashboard/Admin"><i class="fas fa-home"></i>Dashboard</a>
                </li>

                <li>
                    <a href="#class" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-cogs"></i>Classes</a>
                    <ul class="collapse list-unstyled" id="class">
                        <li>
                            <a href="../Classes/Insert"><i class="#"></i>Add Classes</a>
                        </li>
                        <li>
                            <a href="../Classes/Update"><i class="#"></i>Manage Classes</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#teachers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-users"></i>Teachers</a>
                    <ul class="collapse list-unstyled" id="teachers">
                        <li>
                            <a href="../Teams/Insert_team"><i class="#"></i>Add Teachers</a>
                        </li>
                        <li>
                            <a href="../Teams/updateTeams"><i class="#"></i>Manage Teachers</a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-book"></i>Pages</a>
                    <ul class="collapse list-unstyled" id="pages">
                        <li>
                            <a href="login.html"><i class="#"></i>About Us</a>
                        </li>
                        <li>
                            <a href="signup.html"><i class="#"></i>Contact Us</a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="#registration" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-check-square"></i>registration</a>
                    <ul class="collapse list-unstyled" id="registration">
                        <li>
                            <a href="login.html"><i class="#"></i>All registration</a>
                        </li>
                        <li>
                            <a href="signup.html"><i class="#"></i>New registration</a>
                        </li>
                        <li>
                            <a href="#"><i class="#"></i>Accepted registration</a>
                        </li>
                        <li>
                            <a href="#"><i class="#"></i>Rejected registration</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#reports" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-check-square"></i>Reports</a>
                    <ul class="collapse list-unstyled" id="reports">
                        <li>
                            <a href="login.html"><i class="#"></i>B/w dates</a>
                        </li>
                        <li>
                            <a href="signup.html"><i class="#"></i>Sales report</a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="#invoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-file-invoice"></i>invoice</a>

                </li>

                <li>
                    <a href="#searchreg" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-search"></i>Search Registration</a>

                </li>

                <li>
                    <a href="#searchinvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-search"></i>Search Invoice</a>

                </li>


            </ul>


        </nav>
        <!-- end of sidebar component -->




        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    
                    <div class="container-fluid mt-lg-3">
                        <div class="row justify-content-center my-md-3 mb-sm-3">
                            <div class="col-lg-4 d-flex justify-content-center mb-2">
                                <div class="card card-stats card-warning w-75 bg-info">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center h1 my-3">
                                                    <i class="fas fa-user text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category text-white h3">Admin</p>
                                                    <h5 class="card-title text-center text-white">
                                                        <?php echo $this->classobj->totalclassCount()['number']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                        </div>
                    </div>

                </div>
            </main>
           
        </div>




        <div id="body" class="active">

            <!-- navbar navigation component -->

            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>

                <?php
                $sql_get = mysqli_query($con, "SELECT * FROM student WHERE status=0");
                $count = mysqli_num_rows($sql_get);

                ?>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ml-md-0 w-100 d-flex justify-content-end">
                        <li class="nav-item dropdown">
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope"></i> <span class="badge badge-danger" id="count"><?php echo $count; ?></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right mt-2" aria-labelledby="userDropdown">
                                <div class="container-fluid">
                                    <div class="col w-100">
                                        <div class="row">
                                            <img class="img-fluid rounded mw-100" src="/project/images/gallery/1.jpg" />
                                        </div>

                                        <div class="text-center font-weight-bold mt-1">
                                            <span class="font-weight-lighter">aa</span><a href="/project/Admin/profile" class="text-decoration-none text-black-50">
                                                <span class="font-weight-lighter mt-1"><br>Edit <i class="fas fa-edit"></i></span>
                                            </a>
                                        </div>
                                        <div class="dropdown-divider w-100"></div>
                                        <div class="row">
                                            <a href="dashboard/logout" class="w-100 text-decoration-none">
                                                <button class="btn btn-sm btn-danger btn-block">
                                                    LogOut
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- end of navbar navigation -->
        </div>
    </div>
    <script src="../libraries/jquery1/jquery.min.js"></script>
    <script src="../libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="../libraries/js1/script.js"></script>
</body>

</html>