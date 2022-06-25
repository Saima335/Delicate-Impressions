<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



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



    <title>Admin - Delicate Impressions</title>


</head>


<body>

    <style type="text/css">
        body {
            background-image: url('https://www.xmple.com/wallpaper/linear-gradient-yellow-1920x1080-c2-fafad2-ffffe0-a-195-f-14.svg')
        }

        select {
            color: rgba(194, 78, 78, 0.903);
            padding: 3px;
            display: inline-block;




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
    <div>


        <img src="https://www.mipropertyportal.com/wp-content/uploads/2018/12/mipp-admin-banner.jpg "
            alt="image not found" height="300px" width="100%">
    </div>
    <div>

        @if (session('error'))
            <div class="alert alert-warning"
                style="color: rgb(233, 233, 233); background-color:rgba(230, 28, 28, 0.856); width:23%; ">
                {{ session('error') }}

            </div>

        @endif
        @if (session('success'))
            <div class="alert alert-success"
                style="color: rgb(233, 233, 233); background-color:rgba(26, 138, 45, 0.89); width:23%; text:text-center; ">
                {{ session('success') }}

            </div>
        @endif






        <div class="container" style="margin-top: 2%;  ">
            <section class="mb-4">






                <div class="row" style="padding: 1px">

                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-5">
                        <hr class="style1" style="margin-bottom: 20px;">

                        <h2 class="h5-responsive font-weight-bold text-center my-5;">Products Dashboard</h2>
                        <hr class="style1" style="margin-bottom: 20px;">

                        <div class="row justify-content-center ">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Image</th>
                                        <th class="text-center"> Title</th>
                                        <th class="text-center"> Price</th>
                                        <th class="text-center"> Discount</th>
                                        <th class="text-center"> AdminRating</th>
                                        <th class="text-center"> Category</th>

                                        <th class="text-center"> Description</th>
                                        <th class="text-center"> Action(s)</th>

                                    </tr>

                                </thead>

                                @foreach ($Products as $Product)
                                    <tr>
                                        <td class="text-center"> <img src="{{ $Product->Picture }}" height="70px"
                                                width="70px" alt="Image Unavailable"></td>
                                        <td class="text-center">{{ $Product->Title }}</td>
                                        <td class="text-center">{{ $Product->Price }}</td>
                                        <td class="text-center">{{ $Product->Discount }}</td>
                                        <td class="text-center"> <?php for ($x = 0; $x < 5; $x++) { if
                                                ($Product->Rating > $x) {
                                                echo "<span class='fas fa-star fa-xs' style='color: gold;'></span>";
                                                } else {
                                                echo "<span class='fas fa-star fa-xs' style='color: black;'></span>";
                                                }
                                                } ?></td>
                                        <td class="text-center">{{ $Product->Collection }}</td>

                                        <td class="text-center">{{ $Product->Description }}</td>
                                        <td><a href="update/{{ $Product->id }}"
                                                onclick="return confirm('Are you sure you want to Edit the product?')"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <br>
                                            <br>


                                            <a href="deleteproduct/{{ $Product->id }}" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete the product?')">DEL</a>

                                        </td>



                                    </tr>

                                @endforeach





                            </table>


                        </div>






                    </div>


                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">


                        <hr class="style1" style="margin-bottom: 20px;">

                        <h2 class="h5-responsive font-weight-bold text-center my-5;">Add Products</h2>
                        <hr class="style1" style="margin-bottom: 20px;">

                        <form action="/Admin" method="POST" id="contactform">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" name="Title" class="form-control">
                                        <label for="Title">Product Title</label>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" name="Picture" class="form-control">
                                        <label for="Picture">Image Link</label>
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" name="Price" class="form-control">
                                        <label for="Price">Price</label>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" name="Discount" class="form-control">
                                        <label for="Discount">Discounted Price</label>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <br>

                                    <label for="Rating">Rating:</label>


                                    <select id="Rating" name="Rating">
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>

                                    </select>

                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="Collection"></label>




                                        <select id="Collection" name="Collection">
                                            <option value="NewArrivals">New Arrivals</option>
                                            <option value="SummerCollection">Summer Collection</option>
                                            <option value="WinterCollection">Winter Collection</option>
                                            <option value="BridalCollection">Bridal Collection</option>
                                        </select>
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" name="Description" class="form-control">
                                        <label for="Description">Description</label>
                                    </div>

                                    <div class="text-center center-align">
                                        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
                                    </div>

                                </div>

                            </div>

                    </div>





                    </form>

                </div>








        </div>

        </section>


    </div>
    <br>

    <hr class="style1" style="margin-bottom: 20px;">


    <div class="container" style="margin-top: 2%;">
        <section class="mb-4">



            <div class="row">
                <div class="col-md-1 col-lg-1 col-sm-12 col-12  mb-5">


                </div>

                <div class="col-md-10 col-lg-10 col-sm-12 col-12 mb-5">
                    <hr class="style1" style="margin-bottom: 20px;">

                    <h2 class="h5-responsive font-weight-bold text-center my-5;">Registered Customers</h2>
                    <hr class="style1" style="margin-bottom: 20px;">

                    <div class="container ">
                        <div class="row justify-content-center ">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Full Name</th>
                                        <th class="text-center"> Email</th>
                                        <th class="text-center"> Password</th>
                                        <th class="text-center"> Contact Number</th>
                                        <th class="text-center"> City</th>
                                        <th class="text-center"> Postal Code</th>
                                        <th class="text-center"> Address</th>

                                        <th> Action</th>


                                    </tr>

                                </thead>

                                @foreach ($users as $user)

                                    <tr>
                                        <td class="text-center">{{ $user->username }}</td>
                                        <td class="text-center">{{ $user->email }}</td>
                                        <td class="text-center">{{ $user->password }}</td>
                                        <td class="text-center">{{ $user->contact }}</td>
                                        <td class="text-center">{{ $user->city }}</td>
                                        <td class="text-center">{{ $user->postal }}</td>
                                        <td class="text-center">{{ $user->address }}</td>


                                        <td>
                                            <a href="delete/{{ $user->id }}" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete the user?')">DEL</a>
                                        </td>

                                    </tr>


                                @endforeach



                            </table>
                            <a class="seemore" style="font-size: 20px; color: rgb(219, 81, 46); text-align:right;"
                                href="/SearchCustomers">
                                <h4>Click here to Search Customers </h4>
                            </a>
                            <br>
                            <br>

                            <hr class="style1" style="margin-bottom: 2px;">


                            <a href="/ViewContactUs" class="btn btn-info">View and Search Customer Queries</a>



                            <hr class="style1" style="margin-bottom: 20px;">


                        </div>

                    </div>





                </div>


                <div class="col-md-1 col-lg-1 col-sm-12 col-12 mb-5">




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


</body>

</html>
