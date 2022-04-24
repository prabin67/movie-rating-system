<html lang="en">
<head>

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
                <img src="./../images/j.jpg" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="../Dashboard/Admin"><i class="fas fa-home"></i>Dashboard</a>
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



                
              <!-- <li>
                    <a href="#searchreg" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-search"></i>Search </a>


                </li>-->
                
            </ul>


        </nav>
    </div>
    <script src="../libraries/jquery1/jquery.min.js"></script>
    <script src="../libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="../libraries/js1/script.js"></script>
</body>
</html>