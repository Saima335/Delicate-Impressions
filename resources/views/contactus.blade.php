<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS/Contact Us.css">



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



    <title>Contact US - Delicate Impressions</title>


</head>


<body>

    <style type="text/css">
        body {
            background-image: url('https://www.wallpapertip.com/wmimgs/197-1974197_pastel-yellow-ipad-wallpaper-light-yellow-aesthetic-pastel.jpg')
        }

    </style>
    <!---------------------------------------------------------------------------------------------------------------------->

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

    <!---------------------------------------------------------------------------------------------------------------------->

    <div>
        <img src="https://torchsauce.com/wp-content/uploads/2016/04/header-contact-us.jpg"
            alt="Image Unavailable" height="300px" width="100%">
    </div>
    <!---------------------------------------------------------------------------------------------------------------------->

    <div class="container" style="margin-top: 2%;">
        <section class="mb-4">
            <hr class="style1" style="margin-bottom: 20px;">

            <h2 class="h1-responsive font-weight-bold text-center my-5;">Contact Us</h2>
            <p class="text-center w-responsive mx-auto mb-5" style="font-size: 16px; font-weight: lighter;">Any
                questions? Don't worry our team is always present to help our customers.
                Feel free to ask any questions about our brand or our site and our staff will soon respond to you. </p>

            <hr class="style1" style="margin-bottom: 20px;">


            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contactform" action="/ContactUS" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="name"><b>Name</b></label>

                                        <input class="form-control" type="text" name="name">
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
                                        <input class="form-control" type="email" name="email" />
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
                                        <label for="contact"><b>Contact</b></label>

                                        <input class="form-control" type="text" name="contact">
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
                                <div class="md-form">
                                    <div class="form-group" style=" border: hidden; ">
                                        <label for="message"><b>Enter your Message/Suggestion</b></label>

                                        <input  class="form-control" type="text" name="message">
                                        <p2></p2>
                                        <!-- <i class="fas fa-check-circle"></i>
                                        <i class="fas fa-exclamation-circle"></i>

                                        <p2>Empty</p2> -->
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="text-center text-md-left">
                            <button class="btn btn-primary" type="submit" value="submit">Submit</button>

                        </div>

                    </form>

                </div>

                <div class="col-md-3 text-center text-primary">
                    <ul class="list-unstyled mb-0">


                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p class="text-dark"> theshoppk@gmail.com</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p class="text-dark">+ 01 234 567 88</p>
                        </li><br>

                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p class="text-dark">Delicate Impressions. G11, Islamabad</p>
                        </li>



                    </ul>

                </div>

            </div>
        </section>

    </div>

    <br>

    <hr class="style1" style="margin-bottom: 20px;">
    <!---------------------------------------------------------------------------------------------------------------------->


    <h2 class="text-center">Our Location</h2>

    <hr class="style1" style="margin-bottom: 20px;">


    <!-- <div id="googleMap" style="width:70%;height:400px; margin-left:15%;"></div>

    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(33.6694, 72.9972),
                zoom: 15,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker=new google.maps.Marker({
                position: new google.maps.LatLng(33.6694, 72.9972),
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUIOWi73txV1y9uQK87DbxkIPorHw343Y&callback=myMap"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ5ndiclH1GG3qUWuTZp0Uogig1WuoKZk&callback=myMap"> 
    </script>-->

    <br><br>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13282.12068767834!2d72.98992728276238!3d33.66933369963163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95ff25ed8b53%3A0x7e482ec7e99bebe0!2sG-11%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1641059184551!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26564.24717675964!2d72.98117244624493!3d33.66931491554093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95ff25ed8b53%3A0x7e482ec7e99bebe0!2sG-11%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory!5e0!3m2!1sen!2s!4v1625003072314!5m2!1sen!2s" width="70%" height="550px" style="border:0; margin-left:15%" allowfullscreen="" loading="lazy"></iframe> -->
   
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


    <script src="JavaScript/Contact Us.js"></script>



</body>

</html>
