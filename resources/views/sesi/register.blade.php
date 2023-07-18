@php use Illuminate\Support\Facades\Session; @endphp
{{--@extends("layout/aplikasi")--}}

{{--@section("content")--}}
{{--    <div class="w-50 center border rounded px-3 py-3 mx-auto">--}}
{{--        <h1>Login</h1>--}}
{{--        <form action="/create" method="post">--}}
{{--            @csrf--}}
{{--            <div class="mb-3">--}}
{{--                <label for="name"--}}
{{--                       class="form-label">Name</label>--}}
{{--                <input type="name"--}}
{{--                       name="name"--}}
{{--                       value="{{Session::get('name')}}"--}}
{{--                       class="form-control">--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="email" class="form-label">Email</label>--}}
{{--                <input type="email"--}}
{{--                       name="email"--}}
{{--                       value="{{Session::get('email')}}"--}}
{{--                       class="form-control">--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="password" class="form-label">Password</label>--}}
{{--                <input type="password" name="password" class="form-control">--}}
{{--            </div>--}}
{{--            <div class="mb-3 d-grid">--}}
{{--                <button name="submit"--}}
{{--                        type="submit"--}}
{{--                        class="btn btn-primary">Register--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}


    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7" style="margin-left: auto;  margin-right: auto;  width: 40%;">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="/create" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                       name="name"
                                       value="{{Session::get('name')}}"
                                       class="form-control form-control-user"
                                       id="exampleInputEmail"
                                       placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email"
                                       class="form-control form-control-user"
                                       id="exampleInputEmail"
                                       placeholder="Email Address"
                                       name="email"
                                       value="{{Session::get('email')}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-user"
                                       placeholder="Password"
                                       type="password"
                                       name="password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
