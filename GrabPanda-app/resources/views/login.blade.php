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
<body style="background-image: url('image/Delivery.png');">
    <div class="container p-5 text-center ">
        <div class="row p-5 g-3">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6 ">
                <div class="card bg-warning rounded" >
                <center><img src="image/panda.png" alt="" style="width: 50%;"></center>
                <form class="row g-3 p-3 justify-content-center text-light" id="loginForm" >
                    <input class="form-control w-75 " type="text" name="logusername" id="logusername" placeholder="Username">.
                    <input class="form-control w-75" type="password" name="logpassword" id="logpassword" placeholder="Password">.
                    <button class="btn btn-primary w-75" type="button" id="login">Login</button></a>
                    <hr class="w-50 text-dark ">
                    <br>
                    <p class="text-dark">Don't have account? <a class="text-primary" type="button" data-bs-toggle="modal" data-bs-target="#createModal">Create account</a></p>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Modal -->
<div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="staticBackdropLabel">Create Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <div class="card">
            <form class="p-3" action="" id="createAccount">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <div class="form-floating mb-1 ">
                            <input class="form-control w-100" id="firstName" name="firstName" type="text" placeholder="Enter First Name" />
                            <label for="missionDate">First Name <label class="text-danger">*</label></label>
                            <span class="text-danger small error-text surname_error"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-1 ">
                            <input class="form-control w-100" id="lastName" name="lastName" type="text" placeholder="Enter Last Name" />
                            <label for="missionDate">Last Name <label class="text-danger">*</label></label>
                            <span class="text-danger small error-text surname_error"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-1 ">
                            <input class="form-control w-100" id="email" name="email" type="text" placeholder="Enter Email" />
                            <label for="missionDate">Email<label class="text-danger">*</label></label>
                            <span class="text-danger small error-text surname_error"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-1 ">
                            <input class="form-control w-100" id="contact" name="contact" type="text" placeholder="Enter Phone Number" />
                            <label for="missionDate">Phone Number <label class="text-danger">*</label></label>
                            <span class="text-danger small error-text surname_error"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-1 ">
                            <input class="form-control w-100" id="uname" name="uname" type="text" placeholder="Enter Username" />
                            <label for="missionDate">Username <label class="text-danger">*</label></label>
                            <span class="text-danger small error-text surname_error"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-1 ">
                            <input class="form-control w-100" id="upass" name="upass" type="text" placeholder="Enter Password" />
                            <label for="missionDate">Password <label class="text-danger">*</label></label>
                            <span class="text-danger small error-text surname_error"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-1 ">
                            <input class="form-control w-100" id="cpass" name="cpass" type="text" placeholder="Enter Password" />
                            <label for="missionDate">Confirm Password <label class="text-danger">*</label></label>
                            <span class="text-danger small error-text surname_error"></span>
                        </div>
                    </div>
                </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" id="btnSignUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</html>
