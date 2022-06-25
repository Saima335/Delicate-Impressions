<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS/Home.css">
    <link rel="stylesheet" type="text/css" href="CSS/Universal CSS.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Icons for Navbar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Browse - Delicate Impressions</title>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" ; style="background-color: rgba(80, 51, 48, 0.897); ">
        <div class="container-fluid" ; color="Black">
            <a class="navbar-brand" href="Home">
                <img src="logo.png" class="rounded" alt="Image Unavailable" width="40" height="30">
            </a>
            <a class="navbar-brand" style=" color: rgba(26, 5, 8, 0.829);" href="Home"> <b>Delicate Impressions</b>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="Home"><i class="fa fa-fw fa-home"></i>Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Browse"><i class="fa fa-fw fa-search"></i>Browse</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="ContactUs"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Cart"><i class="fas fa-shopping-cart"></i>Cart</a>
                    </li>

                    <?php if (session()->has('user')) {
                    $userID = session('user');
                    $user = DB::select('select * from users where username = ? ', [$userID]);

                    foreach ($user as $use) {
                    if ($use->username == 'Saima') { ?>
                    <li class="nav-item">
                        <a class="nav-link 2" href="/Admin" view="hidden"><i class="fas fa-user-cog"></i>Admin</a>
                    </li>
                    <?php }
                    }
                    } ?>


                    <li class="nav-item">
                        <a class="nav-link" href="Login2">@php
                            if (session()->has('user')) {
                                $userID = session('user');
                                $user = DB::select('select * from users where username = ? ', [$userID]);
                            
                                foreach ($user as $use) {
                                    if ($use->username == 'Saima') {
                                        echo 'Welcome Admin! ' . $use->username . '--Logout';
                                    } else {
                                        echo 'Welcome User! ' . $use->username . '--Logout';
                                    }
                                }
                            } else {
                                echo 'Login';
                            }
                            
                        @endphp <i id="signin" class="fa fa-fw fa-user"
                                area-hidden="true"></i> </a>

                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" style="padding: 20px; width:40%; margin-left:35%" type="search"
                        placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" style="padding: 1px;" type="submit">Search</button>
                </form>
            </div>
        </div>
        </div>

    </nav>
    </div>

    @if (session('error'))
        <div class="alert alert-warning"
            style="color: rgb(233, 233, 233); background-color:rgba(230, 28, 28, 0.856); width:23%; ">
            {{ session('error') }}

        </div>

    @endif
    @if (session('success'))
        <div class="alert alert-success"
            style="color: rgb(233, 233, 233); background-color:rgba(26, 138, 45, 0.89); width:23%; ">
            {{ session('success') }}

        </div>

    @endif



    </div>

    <img src="https://www.junaidjamshed.com/media/wysiwyg/Banner_3.jpg" alt="Sale" width="100%" height="450px"
        style="margin-top:-20px">

    <!---------------------------------------------------------------------------------------------------------------------->


    <nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Home">Delicate <br> Impressions</a> <br><br><br>
                <br>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/Home">Home<span style="font-size:16px;"
                                class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                    <li class="active"><a href="/Browse">Browse<span style="font-size:16px;"
                                class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a></li>
                    <li ><a href="/SummerCollection">Summer Collection<span style="font-size:16px;"
                                class="pull-right hidden-xs showopacity glyphicon glyphicon-circle-arrow-right"></span></a>
                    </li>
                    <li><a href="/WinterCollection">Winter Collection<span style="font-size:16px;"
                                class="pull-right hidden-xs showopacity glyphicon glyphicon-circle-arrow-right"></span></a>
                    </li>
                    <li><a href="/BridalCollection">Bridal Collection<span style="font-size:16px;"
                                class="pull-right hidden-xs showopacity glyphicon glyphicon-circle-arrow-right"></span></a>
                    </li>
                    <li><a href="/Cart">Cart<span style="font-size:16px;"
                                class="pull-right hidden-xs showopacity glyphicon glyphicon-shopping-cart"></span></a>
                    </li>

                    <?php if (session()->has('user')) {
                    $userID = session('user');
                    $user = DB::select('select * from users where username = ? ', [$userID]);

                    foreach ($user as $use) {
                    if ($use->username == 'Saima') { ?>
                    <li><a href="/Admin">Admin<span style="font-size:16px;"
                                class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                    </li>
                    <?php }
                    }
                    } ?>
                </ul>
            </div>
        </div>
    </nav>

    <!---------------------------------------------------------------------------------------------------------------------->
    <div class="row" style="margin-top: 10px;">


        <hr class="style1" style="width:95%">


        <h2 class="text-center"
            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; margin-top: 30px; margin-bottom:30px ; color: black;">
            <b>Summer Collection</b>
        </h2>
        <hr class="style1" style="margin-bottom: 20px;width:95%;">


        <div class="container">
            <div class="row">

                @foreach ($SummerProducts as $Product)

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <form action="/BrowseCart/{id}" method="POST">
                            @csrf


                            <div class="shadoweffects">
                                <img src="{{ $Product->Picture }}" width="100%" height="100%" alt="images">
                                <div class="overlay">
                                    <h2>{{ $Product->Title }}</h2>
                                    <a href="BrowseCart/{{ $Product->id }}" class="info" style="margin-top:10%"
                                        type="submit" name="Add" style="color: white;">Add to Cart</a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><b>{{ $Product->Title }}</b></h5>
                                    <?php for ($x = 0; $x < 5; $x++) { if ($Product->Rating > $x) {
                                        echo "<span class='fas fa-star' style='color: gold;'></span>";
                                        } else {
                                        echo "<span class='fas fa-star' style='color: black;'></span>";
                                        }
                                        } ?>



                                        <h6 class="card-text">
                                            {{ $Product->Description }}
                                        </h6>

                                        <h5>
                                            <small><s> Rs. {{ $Product->Price }}</s></small>
                                            <span class="price"> Rs. {{ $Product->Discount }}</span>
                                        </h5>


                                </div>
                            </div>

                    </div>
                    </form>

                @endforeach

                <a class="seemore" style=" color: rgb(76, 74, 71); text-align:right;" href="/SummerCollection">
                    <h4>View Entire Collection</h4>
                </a>










            </div>
        </div>
    </div>


    <!---------------------------------------------------------------------------------------------------------------------->


    <div class="row" style="margin-top: 10px; margin-left:10%">


        <hr class="style1" style="width:95%">


        <h2 class="text-center"
            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; margin-top: 30px; margin-bottom:30px ; color: black;">
            <b>Winter Collection</b>
        </h2>
        <hr class="style1" style="margin-bottom: 20px; width:95%">


        <div class="container">
            <div class="row">

                @foreach ($WinterProducts as $Product)



                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <form action="/BrowseCart/{id}" method="POST">
                            @csrf


                            <div class="shadoweffects">
                                <img src="{{ $Product->Picture }}" width="100%" height="100%" alt="images">
                                <div class="overlay">
                                    <h2>{{ $Product->Title }}</h2>
                                    <a href="BrowseCart/{{ $Product->id }}" class="info" style="margin-top:10%"
                                        type="submit" name="Add" style="color: white;">Add to Cart</a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><b>{{ $Product->Title }}</b></h5>
                                    <?php for ($x = 0; $x < 5; $x++) { if ($Product->Rating > $x) {
                                        echo "<span class='fas fa-star' style='color: gold;'></span>";
                                        } else {
                                        echo "<span class='fas fa-star' style='color: black;'></span>";
                                        }
                                        } ?>



                                        <h6 class="card-text">
                                            {{ $Product->Description }}
                                        </h6>

                                        <h5>
                                            <small><s> Rs. {{ $Product->Price }}</s></small>
                                            <span class="price"> Rs. {{ $Product->Discount }}</span>
                                        </h5>


                                </div>
                            </div>

                    </div>
                    </form>

                @endforeach

                <a class="seemore" style=" color: rgb(76, 74, 71); text-align:right;" href="/WinterCollection">
                    <h4>View Entire Collection</h4>
                </a>












            </div>
        </div>
    </div>



    <!---------------------------------------------------------------------------------------------------------------------->


    <div class="row" style="margin-top: 10px; margin-left:10%">


        <hr class="style1" style="width:95%">


        <h2 class="text-center"
            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; margin-top: 30px; margin-bottom:30px ; color: black;">
            <b>Bridal Collection</b>
        </h2>
        <hr class="style1" style="margin-bottom: 20px; width:95%">


        <div class="container">
            <div class="row">

                @foreach ($BridalProducts as $Product)



                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <form action="/BrowseCart/{id}" method="POST">
                            @csrf


                            <div class="shadoweffects">
                                <img src="{{ $Product->Picture }}" width="100%" height="100%" alt="images">
                                <div class="overlay">
                                    <h2>{{ $Product->Title }}</h2>
                                    <a href="BrowseCart/{{ $Product->id }}" class="info" style="margin-top:10%"
                                        type="submit" name="Add" style="color: white;">Add to Cart</a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><b>{{ $Product->Title }}</b></h5>
                                    <?php for ($x = 0; $x < 5; $x++) { if ($Product->Rating > $x) {
                                        echo "<span class='fas fa-star' style='color: gold;'></span>";
                                        } else {
                                        echo "<span class='fas fa-star' style='color: black;'></span>";
                                        }
                                        } ?>



                                        <h6 class="card-text">
                                            {{ $Product->Description }}
                                        </h6>

                                        <h5>
                                            <small><s> Rs. {{ $Product->Price }}</s></small>
                                            <span class="price"> Rs. {{ $Product->Discount }}</span>
                                        </h5>


                                </div>
                            </div>

                    </div>
                    </form>

                @endforeach

                <a class="seemore" style=" color: rgb(76, 74, 71); text-align:right;" href="/BridalCollection">
                    <h4>View Entire Collection</h4>
                </a>












            </div>
        </div>
    </div>




    <hr class="style1" style="margin-bottom: 20px;">
    <br>



    <!---------------------------------------------------------------------------------------------------------------------->



    <footer class="page-footer bg-dark ">
        <div class="bg-grey">
            <div class="container">
                <div class="row py-4 d-flex align-items-center" , style="background-color: rgb(53, 50, 50)">

                    <div class="col-md-12 text-center" , style="background-color: rgb(53, 50, 50)">
                        <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-youtube mr-4"></i></a>
                        <a href="#"><i class="fab fa-linkedin mr-4"></i></a>

                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center text-md-left mt-5">
            <div class="row">

                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Delicate Impressions</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 180px; height: 2px">
                    <p class="mt-2">
                        <center-align>We offer outfits that are chic yet practical, topped with trendsetting designs. We
                            strive to inspire young girls to maintain positive self-expression and fear none while
                            following the latest trend.</center-align>
                    </p>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 105px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><a href="Home">Home</a></li>
                        <li class="my-2"><a href="AboutUs">About</a></li>
                        <li class="my-2"><a href="Browse">Browse</a></li>
                        <li class="my-2"> <a href="ContactUs">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Outlets</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 70px; height: 2px">

                    <ul class="list-unstyled">
                        <li class="my-2"><a href="#">Lahore</a></li>
                        <li class="my-2"><a href="#">Islamabad</a></li>
                        <li class="my-2"><a href="#">Karachi</a></li>
                        <li class="my-2"> <a href="#">Abbottabad</a></li>
                    </ul>
                </div>



                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 95px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><i class="fas fa-home mr-3"></i> Islamabad, G11, Sector E</li>
                        <li class="my-2"><i class="fas fa-envelope mr-3"></i> theshoppk@gmail.com</li>
                        <li class="my-2"><i class="fas fa-phone mr-3"></i> + 01 234 567 88</li>
                        <li class="my-2"><i class="fas fa-print mr-3"></i> + 01 234 567 89</li>
                    </ul>
                </div>
            </div>
        </div>


    </footer>

</body>
<!---------------------------------------------------------------------------------------------------------------------->
<style>
    /*Remove rounded coners*/

    nav.sidebar.navbar {
        border-radius: 0px;
    }

    nav.sidebar,
    .main {
        -webkit-transition: margin 200ms ease-out;
        -moz-transition: margin 200ms ease-out;
        -o-transition: margin 200ms ease-out;
        transition: margin 200ms ease-out;
    }




    /*small/medium side display*/
    @media (min-width: 768px) {

        /*Allow main to be next to Nav*/
        .main {
            position: absolute;
            width: calc(100% - 40px);
            /*keeps 100% minus nav size*/
            margin-left: 40px;
            float: right;
        }

        /*lets nav bar to be showed on mouseover*/
        nav.sidebar:hover+.main {
            margin-left: 200px;

        }

        /*Center Brand*/
        nav.sidebar.navbar.sidebar>.container .navbar-brand,
        .navbar>.container-fluid .navbar-brand {
            margin-left: 0px;
        }

        /*Center Brand*/
        nav.sidebar .navbar-brand,
        nav.sidebar .navbar-header {
            text-align: center;
            width: 100%;
            margin-left: 0px;
        }

        /*Center Icons*/
        nav.sidebar a {
            padding-right: 13px;
        }

        /*adds border top to first nav box */
        nav.sidebar .navbar-nav>li:first-child {
            border-top: 1px #e5e5e5 solid;
        }

        /*adds border to bottom nav boxes*/
        nav.sidebar .navbar-nav>li {
            border-bottom: 1px #e5e5e5 solid;
        }

        /* Colors/style dropdown box*/
        nav.sidebar .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /*allows nav box to use 100% width*/
        nav.sidebar .navbar-collapse,
        nav.sidebar .container-fluid {
            padding: 0 0px 0 0px;
        }

        /*colors dropdown box text */
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        /*gives sidebar width/height*/
        nav.sidebar {
            width: 200px;
            height: 100%;
            margin-left: -160px;
            float: left;
            z-index: 8000;
            margin-bottom: 0px;
        }

        /*give sidebar 100% width;*/
        nav.sidebar li {
            width: 100%;
        }

        /* Move nav to full on mouse over*/
        nav.sidebar:hover {
            margin-left: 0px;
        }

        /*for hiden things when navbar hidden*/
        .forAnimate {
            opacity: 0;
        }
    }

    /* .....NavBar: Fully showing nav bar..... */

    @media (min-width: 1330px) {

        /*Allow main to be next to Nav*/
        .main {
            width: calc(100% - 200px);
            /*keeps 100% minus nav size*/
            margin-left: 200px;
        }

        /*Show all nav*/
        nav.sidebar {
            margin-left: 0px;
            float: left;
            width: 150px;
        }

        /*Show hidden items on nav*/
        nav.sidebar .forAnimate {
            opacity: 1;
        }
    }

    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover,
    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
        color: #CCC;
        background-color: transparent;
    }

    nav:hover .forAnimate {
        opacity: 1;
    }

</style>

<script>
    function htmlbodyHeightUpdate() {
        var height3 = $(window).height()
        var height1 = $('.nav').height() + 50
        height2 = $('.main').height()
        if (height2 > height3) {
            $('html').height(Math.max(height1, height3, height2) + 10);
            $('body').height(Math.max(height1, height3, height2) + 10);
        } else {
            $('html').height(Math.max(height1, height3, height2));
            $('body').height(Math.max(height1, height3, height2));
        }

    }
    $(document).ready(function() {
        htmlbodyHeightUpdate()
        $(window).resize(function() {
            htmlbodyHeightUpdate()
        });
        $(window).scroll(function() {
            height2 = $('.main').height()
            htmlbodyHeightUpdate()
        });
    });
</script>

</html>
