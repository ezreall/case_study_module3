<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('login/assets/css/login.css')}}">
</head>
<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{asset('login/assets/images/C254BF2E-59D4-4A23-94FB-CBAD2EDA0A7A.jpeg')}}" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="{{asset('login/assets/images/logo.svg')}}" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description">Sign into your account</p>
{{--                        <form action="{{route('admin.checklogin')}}" role="form" method="POST">--}}
{{--                    @csrf--}}
                        <form action="" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                            </div>
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                        </form>
{{--                        </form>--}}
                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                        <p class="login-card-footer-text">Don't have an account?
                            <a data-toggle="modal" type="button" data-target="#form"  class="text-reset">Register here</a></p>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Terms of use.</a>
                            <a href="#!">Privacy policy</a>
                            <div class="container">

                            <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="email1">Email address</label>
                                                    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password1">Password</label>
                                                    <input type="password" class="form-control" id="password1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password1">Confirm Password</label>
                                                    <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
