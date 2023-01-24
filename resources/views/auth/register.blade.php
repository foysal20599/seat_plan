<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register form</title>
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
            height: 100px !important;
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
                <div class="col-xxl-7 col-lg-8">
                    <div class="card">
                        <!-- Logo-->
                        <div class="card-header text-center bg-primary">
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
                            @if (Session::has('status'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('teacher.info') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Full Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        id="fullname" placeholder="Name" name="name" value="{{ old('name') }}"
                                        autofocus autocomplete="name">
                                    @error('name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                    @error('email')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Phone </label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="number"
                                        id="email" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                    @error('phone')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Username </label>
                                    <input class="form-control @error('user_name') is-invalid @enderror" type="text"
                                        id="" name="user_name" value="{{ old('user_name') }}"
                                        placeholder="Username">
                                    @error('user_name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="facultyID" class="form-label">Faculty ID</label>
                                    <input class="form-control @error('f_id') is-invalid @enderror" type="text"
                                        id="facultyID" maxlength="11" name="f_id" value="{{ old('f_id') }}"
                                        placeholder="Faculty id">
                                    <small class="showErrorMessage1 text-danger">

                                    </small>
                                    <small class="showErrorMessage text-danger">

                                    </small>
                                    <small class="showMessage1 text-success">

                                    </small>
                                    <small class="showMessage text-success">

                                    </small>
                                </div>
                                <div class="mb-3">
                                    <label for="d" class="form-label">Designation</label>
                                    <input class="form-control @error('desination') is-invalid @enderror"
                                        type="text" id="d" name="desination"
                                        value="{{ old('desination') }}" placeholder="Desination">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" autocomplete="new-password" placeholder="Password">

                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                    @error('password')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" autocomplete="new-password"
                                            placeholder="Confirm Password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                    @error('password_confirmation')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary" type="submit"> Sign Up </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="{{ route('login') }}"
                                    class="text-muted ms-1"><b>Log In</b></a></p>
                        </div> <!-- end col-->
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
    <script>
        $("body").on('keyup', '#facultyID', function() {

            var getData = $("#facultyID").val();

            if (getData) {
                var reg = /[0-9]/g;
                var num = getData.match(reg);


                var regx = /[a-z]/g;
                var bb = getData.match(regx);

                if (num) {
                    if (num.length < 10) {
                        $('.showErrorMessage').empty();
                        $('.showMessage').html('Current Number is. "' + num.length + '" ');
                    } else {
                        $('.showMessage').empty();
                        $('.showErrorMessage').html('You can\'t right grether then num 9 .');
                    }
                }
                if (bb) {
                    if (bb.length < 3) {
                        $('.showErrorMessage1').empty();
                        $('.showMessage1').html('Current Char is. "' + bb.length + '" ');
                    } else {
                        $('.showMessage1').empty();
                        $('.showErrorMessage1').html('You can\'t right grether then Char 2 .');
                    }
                }

            } else {
                $('.showErrorMessage').empty();
                $('.showErrorMessage1').empty();
                $('.showMessage').empty();
                $('.showMessage1').empty();
            }

        });
    </script>

</body>

</html>
