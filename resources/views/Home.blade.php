<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS/Home.css">
    <!-- <link rel="stylesheet" type="text/css" href="CSS/Universal CSS.css"> -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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



    <title>Home - Delicate Impressions</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark" ; style="background-color: rgba(80, 51, 48, 0.897); ">
        <div class="container-fluid" ; color="Black">
            <a class="navbar-brand" href="Home">
                <img src="{{ asset('logo.png') }}" class="rounded" alt="Image Unavailable" width="40" height="30">
            </a>
            <a class="navbar-brand" style="padding: 2px; color: rgba(26, 5, 8, 0.829);" href="Home"> <b>Delicate
                    Impressions</b>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home"><i
                                class="fa fa-fw fa-home"></i>Home</a>

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
                    <?php 
                        if (session()->has('user')) {
                            $userID = session('user');
                            $user = DB::select('select * from users where id = ? ', [$userID]);
                           
                            foreach ($user as $use) {
                                    if ($use->username == 'Saima') { ?>
                                    <li class="nav-item">
                                        <a class="nav-link 2" href="/Admin" view="hidden"><i class="fas fa-user-cog"></i>Admin</a>
                                    </li>
                                    <?php }  
                                }
                            }  
                        
                    ?>
                               
                
                    <li class="nav-item">
                        <a class="nav-link" href="Login2">@php
                            if (session()->has('user')) {
                                $userID = session('user');
                                $user = DB::select('select * from users where id = ? ', [$userID]);
                            
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
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" style="padding: 3px;" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-bs-ride="carousel">
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

        <!-- Indicators -->

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- The slideshow -->

        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="https://roycollections.com/wp-content/uploads/2020/07/Maria.B-Ready-To-Wear-Eid-Collection.jpg"
                    alt="Sale" width="100%" height="450">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://roycollections.com/wp-content/uploads/2020/04/Limelight-pret-Eid-collection.jpg"
                    alt="Black Screen" width="100%" height="450">
                <div class="carousel-caption d-none d-md-block">


                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.shopify.com/s/files/1/0264/6795/8858/files/Desktop_banner_option_1512x.jpg?v=1616178468"
                    alt="Sale" width="100%" height="450">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>


        </div>

        <!-- Left and right controls -->

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    </nav>



    <div class="container" style="margin-top: 20px;">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="shadoweffects">
                    <img src="https://cdn.shopify.com/s/files/1/0488/9201/8848/files/email_wala.jpg?v=1621514654"
                        width="100%" alt="images">
                    <div class="overlay">
                        <h2>Absolute Winter Collection</h2>
                        <a class="info" href="WinterCollection">Browse</a>
                    </div>
                </div>

            </div>
        </div>


        <div class="container" style="margin-top: 20px;">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="shadoweffects">
                        <img src="https://cdn.shopify.com/s/files/1/0035/1086/1935/files/Zahara-Night-Shoot-Web-banner_1000x.jpg?v=1609919925"
                            width="100%" alt="images">
                        <div class="overlay">
                            <h2>Bridal Collection</h2>
                            <a class="info" href="BridalCollection">Browse</a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="container" style="margin-top: 20px;">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="shadoweffects">
                            <img src="https://cdn.shopify.com/s/files/1/0488/9201/8848/files/web_banner_pret_adf271bc-bea7-4b19-ae23-0410a43554dd.jpg?v=1621514504"
                                width="100%" alt="images">
                            <div class="overlay">
                                <h2>Summer Collection</h2>
                                <a class="info" href="SummerCollection">Browse</a>
                            </div>
                        </div>

                    </div>
                </div>



                <hr class="style1">


                <h2 class="text-center"
                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; margin-top: 40px; margin-bottom:40px ;">
                    New Arrivals</h2>


                <hr class="style1" style="margin-bottom: 20px;">


                <div class="container">
                    <div class="row">

                        @foreach ($Products as $Product)



                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <form action="/Home1/{id}" method="GET">
                                    @csrf

                                    <div class="shadoweffects">
                                        <img name="Picture" src="{{ $Product->Picture }}" width="100%" height="700px"
                                            alt="images">
                                        <div class="overlay">
                                            <h2>{{ $Product->Title }}</h2>
                                            <a href="Home1/{{ $Product->id }}" class="info" style="margin-top:90%"
                                                type="submit" name="Add" style="color: white;">Add to Cart</a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" id="Title" name="Title">
                                                <b>{{ $Product->Title }}</b>
                                            </h5>
                                            <?php for ($x = 0; $x < 5; $x++) { if ($Product->Rating > $x)
                                                {
                                                echo "<span class='fas fa-star' style='color: gold;'></span>";
                                                } else {
                                                echo "<span class='fas fa-star' style='color: black;'></span>";
                                                }
                                                } ?>



                                                <h6 class="card-text" name="Discription">
                                                    {{ $Product->Description }}
                                                </h6>

                                                <h5>
                                                    <small class="Price" name="Price"><s> Rs.
                                                            {{ $Product->Price }}</s></small>
                                                    <span class="Discount" name="Discount"> Rs.
                                                        {{ $Product->Discount }}</span>
                                                </h5>


                                        </div>
                                    </div>

                            </div>

                            </form>

                        @endforeach





                    </div>
                </div>
            </div>





            <br>

            <hr class="style1" style="margin-bottom: 20px;">
            </hr>
            <br>


        </div>

    </div>


    <!------------------------------------------------------------------------------------------------->




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

</html>
