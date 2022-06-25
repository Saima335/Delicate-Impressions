<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS/Signup and Login.css">



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

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>



    <title>Sign Up - Delicate Impressions</title>


</head>


<body>



    <nav class="navbar navbar-expand-lg navbar-dark" ; style="background-color: rgba(80, 51, 48, 0.897); ">
        <div class="container-fluid" ; color="Black">
            <a class="navbar-brand" href="Home">
                <img src="logo.png" class="rounded" alt="Image Unavailable" width="40" height="30">
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
                    $user = DB::select('select * from users where id = ? ', [$userID]);

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

            </div>
        </div>
    </nav>


    <div class="container"
        style="margin-top: 2%; width: 70%; background-color:rgba(182, 116, 116, 0.3); border-radius: 20px; overflow: hidden;">
        <section class="mb-4">

            <div class="row">
                <div class="col-md-12 mb-md-0 mb-5">
                    <hr class="style1" style="margin-bottom: 20px;">

                    <h2 class="h1-responsive font-weight-bold text-center my-5" ;
                        style="color:rgba(255, 255, 255, 0.664)">Create Account</h2>
                    <hr class="style1" style="margin-bottom: 20px;">


                    <form action="/Signup" method="POST" id="contactform">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="username"><b>Username</b></label>

                                        <input class="form-control" type="text" name="username" id="username">
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p2>Empty</p2> -->
                                    </div>

                                </div>



                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="email"><b>Email</b></label>
                                        <input class="form-control" type="email" name="email" id="email" />
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p2>Empty</p2> -->
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="password"><b>Password</b></label>
                                        <input class="form-control" type="password" name="password" id="password" />
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p2>Empty</p2> -->
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="contact"><b>Contact</b></label>

                                        <input class="form-control" type="text" name="contact" id="contact">
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p2>Empty</p2> -->
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="city"><b>City</b></label>

                                        <input class="form-control" type="text" name="city" id="city" onkeyup="showHint(this.value)">
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i> -->

                                        <!-- <p>Suggestions: <span id="txtHint"></span></p> -->
                                        
                                        <!-- <p2>Empty</p2> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="postal"><b>Postal Code</b></label>

                                        <input class="form-control" type="text" name="postal" id="postal">
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p2>Empty</p2> -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="address"><b>Complete Address</b></label>

                                        <input class="form-control" type="text" name="address" id="address">
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>

                                        <p2>Empty</p2> -->
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="text-center text-md-left">
                            <button class="button" type="submit" value="submit">Submit</button>

                        </div>


                    </form>



                </div>

            </div>
        </section>

    </div>


    <hr class="style1" style="margin-bottom: 20px;">
    <br>


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

    <script src="JavaScript/Signup.js"></script>




</body>

</html>
