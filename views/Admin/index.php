

<html lang="en">

<head>
    <base href="/movie/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="libraries/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="libraries/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="libraries/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="libraries/bootstrap1/css/bootstrap.min.css" rel="stylesheet">
    <link href="libraries/css1/master.css" rel="stylesheet">
    <link href="libraries/css1/notify.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">
        <!-- sidebar navigation component -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <h3>Admin</h3>
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="Dashboard/Admin"><i class="fas fa-home"></i>Dashboard</a>
                </li>

                <li>
                    <a href="#class" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-film"></i>Movies</a>
                    <ul class="collapse list-unstyled" id="class">
                        <li>
                            <a href="Movie/addmovie"><i class="#"></i>Add Movies</a>
                        </li>
                        <li>
                            <a href="Movie/Updatemovie"><i class="#"></i>Manage Movies</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#teachers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-users"></i>Critic</a>
                    <ul class="collapse list-unstyled" id="teachers">
                        <li>
                            <a href="Critic/criticAddition"><i class="#"></i>Add Critic</a>
                        </li>
                        <li>
                            <a href="Critic/updateCritics"><i class="#"></i>Manage Critic</a>
                        </li>
                    </ul>
                </li>



                
             <!--  <li>
                    <a href="#searchreg" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-search"></i>Search </a>


                </li>-->
                
            </ul>


        </nav>
        <div id="body" class="active">

            <!-- navbar navigation component -->

            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
               <div>
                   <h3> Welcome Prabin</h3>
               </div>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ml-md-0 w-100 d-flex justify-content-end">
                       

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right mt-2" aria-labelledby="userDropdown">
                                <div class="container-fluid">
                                    <div class="col w-100">
                                        <div class="row">
                                            <img class="img-fluid rounded mw-100" src="/movie/images/edit.jpg" />
                                        </div>

                                        <div class="text-center font-weight-bold mt-1">
                                            <span class="font-weight-lighter"></span><a href="/movie/Admin/getUserData" class="text-decoration-none text-black-50">
                                                <span class="font-weight-lighter mt-1"><br>Edit <i class="fas fa-edit"></i></span>
                                            </a>
                                        </div>
                                        <div class="dropdown-divider w-100"></div>
                                        <div class="row">
                                            <a href="Admin/logout" class="w-100 text-decoration-none">
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
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <img src="images/home.jpg" alt="New York" width="1200" height="700">
                  <div class="carousel-caption">
                
                  </div>
              </div>

              <div class="carousel-item">
                  <img src="images/home.jpg" alt="Chicago" width="1200" height="700">
                  <div class="carousel-caption">
                     
                  </div>
              </div>

              <div class="carousel-item">
                  <img src="images/home.jpg" alt="Los Angeles" width="1200" height="700">
                  <div class="carousel-caption">
                  </div>
              </div>
              
          </div>

        </div>
    </div>
    <script src="libraries/jquery1/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="libraries/js1/script.js"></script>
</body>


</html>
