<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grab Panda</title>
    <link rel="icon" type="image/x-icon" href="image/panda.png">
     <!-- Fonts -->
     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Latest compiled JQuery -->
     <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
         crossorigin="anonymous"></script>
     <!-- Latest compiled Axios -->
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <!-- Latest compiled font awesome -->
     <script src="https://kit.fontawesome.com/941ad23302.js" crossorigin="anonymous"></script>

     <script src="{{ asset('js/grabpanda.js') }}"></script>
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header class="fixed">
        <div class="row bg-warning">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-3 text-center">
                <i class="fa-solid fa-phone"> +63 9123456789</i>
            </div>
            <div class="col-lg-7 text-center space-between">
                <i class="fa-brands fa-facebook" type="button"> @GrabPanda</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa-brands fa-twitter" type="button"> @GrabPanda</i>&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa-brands fa-instagram" type="button"> @GrabPanda</i>
            </div>
        </div>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="position: fixed; width: 100%; opacity: .9;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-center" style="width: 10%"><img src="image/panda.png" id="panda" alt="" style="width: 50%; border-radius: 50%;"> Grab Panda</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Restaurants</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Report</a>
                      </li>
                    </ul>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="">Profile</a></li>
                        <li><a class="dropdown-item" href="">Settigns</a></li>
                        <li><a class="dropdown-item" href="{{ url ('/login') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <body>
        <div class="container-fluid p-5" style="background-image: url('image/food.png'); background-repeat: no-repeat; background-size: 100%;">
            <div class="row p-5">
                <div class="col-12 p-5 text-center text-light">
                    <H1 class="p-3" style="font-size: 80px; font-family: Brush Script MT, Brush Script Std, cursive;">Premium food at affordable price</H1>
                    <div class="w-100 p-3">
                        <center>
                        <div class="input-group w-75">
                            <input aria-label="Search" class="form-control" placeholder="Search for..." type="text">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">Search</button>
                            </div>
                        </div>
                        </center>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>

    </footer>
</body>
</html>
