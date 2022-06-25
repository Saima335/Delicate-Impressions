<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS/Home.css">
    <link rel="stylesheet" type="text/css" href="CSS/Universal CSS.css">
    <link rel="stylesheet" type="text/css" href="CSS/Cart.css">



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



    <title>Cart - Delicate Impressions</title>
</head>

<body>
    <style type="text/css">
        body {
            background-image: url('https://www.wallpapertip.com/wmimgs/197-1974197_pastel-yellow-ipad-wallpaper-light-yellow-aesthetic-pastel.jpg')
        }

    </style>


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
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" style="padding: 3px;" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <hr class="style1">


    <h2 class="text-center"
        style="color: rgb(153, 108, 108); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; margin-top: 40px; margin-bottom:40px ;">
        <b> Shopping Cart </b>
    </h2>



    <hr class="style1" style="margin-bottom: 20px;">

    <div class="container-fluid" style="margin-top: 2%;">
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

        <div class="row px-6">
            <div class=" col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="Cart">
                    @php
                        $count = 0;
                        $original = 0;
                        $Discount = 0;
                        $Subtotal = 0;
                        
                    @endphp
                    @foreach ($Products as $Product)

                        <form action="UpdateQuantity/{{ $Product->id }}" method="POST" class="items">
                            @csrf


                            @php
                                $count = $count + 1;
                                $original = $original + $Product->Price * $Product->Quantity;
                                $Subtotal = $Subtotal + $Product->Discount * $Product->Quantity;
                                $Discount = $original - $Subtotal;
                                
                            @endphp



                            <div class="border rounded">
                                <div class="row " style="background-color: rgba(253, 253, 253, 0.438); ">
                                    <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 py-4">
                                        <img src="{{ $Product->Picture }}" height="150px" style="border-style: solid;"
                                            width="150px" alt="Image Unavailable">



                                    </div>

                                    <div class=" col-lg-5 col-md-5 col-sm-6 col-xs-6 py-4">
                                        <h5 class="card-title"><b>{{ $Product->Title }}</b></h5>

                                        <h6 class="card-text">
                                            {{ $Product->Description }}
                                        </h6>

                                        <h6>
                                            <small class="Price"><s> Rs. {{ $Product->Price }}</s></small>
                                        </h6>

                                        <h5>
                                            <span class="price">{{ $Product->Discount }}</span>
                                        </h5>

                                        <a href="deleteproductcart/{{ $Product->id }}" class="btn btn-danger btn-md"
                                            onclick="return confirm('Are you sure you want to delete the product?')">DELETE</a>


                                    </div>

                                    <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-6 py-5">
                                        <div style="margin-top: 30%;">
                                            <form action=""
                                                id="frm <?php echo $Product->id; ?>"
                                                method="get">

                                                <input type="number" name="qty"
                                                    value="<?php echo $Product->Quantity; ?>"
                                                    style="width:50px">


                                                <!--
                                       <button id="Minus" type="button"><i class="fas fa-minus"></i> </button>
                                           <input style="text-align: center;" id="Quantity" type= "number" value="{{ $Product->Quantity }}" readonly="" class="form control w-25 d-inline-block">
                                           <button id="Plus" type="button" > <i class="fas fa-plus"></i></button>
                                       -->
                                            </form>

                                        </div>



                                    </div>



                                </div>

                            </div>

                    @endforeach


                    </form>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 offset-md-1 border rounded mt-1 h-25"
                style="border-style: solid;  background: rgba(199, 194, 194, 0.541);">
                <div class="pt-2">
                    <h5>Billing Details</h5>
                    <hr>



                    <div class="row bill">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <h6 style="padding: 3%;">@php echo 'Number of Items '@endphp </h6>
                            <h6 style="padding: 3%;">@php echo 'Original Price '@endphp </h6>

                            <h6 style="padding: 3%;">@php echo 'Discount '@endphp </h6>
                            <h6 style="padding: 3%;">@php echo 'Subtotal '@endphp </h6>



                            <hr>
                            <h6 style="padding: 3%;">Total Amount</h6>


                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                            <h6 style="padding: 3%;">@php echo $count @endphp</h6>
                            <h6 style="padding: 3%;">@php echo $original @endphp</h6>
                            <h6 style="padding: 3%;">@php echo $Discount @endphp</h6>

                            <h6 style="padding: 3%;">@php echo $Subtotal @endphp</h6>
                            <hr>
                            <h6 style="padding: 3%;">@php echo $Subtotal @endphp</h6>


                        </div>

                        <a href="Checkout" type="button" class="btn btn-success" style="padding: 4%; margin: 0%;"
                            onclick="return alert('Thank You for Shopping! \n You will recieve your order in 4-5 Days.')">Checkout
                            Now!</a>

                    </div>



                </div>



            </div>




        </div>


    </div>
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


</body>

</html>
