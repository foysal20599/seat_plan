<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Exam Seat plan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <style>
        img {
            background: white;
            height: 90px !important;
        }

        li {
            list-style: none;
        }
    </style>

</head>

<body class="" data-layout-config='{"darkMode":false}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header  text-center bg-primary">
                            <div class="row justify-between">
                                <div class="col-3">
                                    <img src="{{ asset('assets/images/stamford.png') }}" height=""
                                        class="img-fluid " alt="Stamford logo">
                                </div>
                                <div class="col-9 m-0">
                                    <ul class="text-light text-start m-0 p-0">
                                        <li class="">
                                            Stamford University Bangladesh
                                        </li>
                                        <li>
                                            Dept. of Computer Science of Engineering
                                        </li>
                                        <li>
                                            Exam Seat Plan Distributor
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            {{-- error message --}}
                            @if (session('status'))
                                <div class="mb-4 text-sm ">
                                    <p class="text-danger"> {{ session('status') }}</p>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email/Username</label>
                                    <input class="form-control" type="text" id="email" type="email"
                                        name="email" :value="old('email')" required autofocus
                                        placeholder="Enter your email/username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Enter your password" type="password" name="password" required
                                            autocomplete="current-password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3 mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3 mb-0 text-end">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>
                                    <div class="col-6">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-md text-gray-900 hover:text-gray-900"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->



                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}"
                                    class="text-muted ms-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
    </footer>

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>


</body>

</html>
