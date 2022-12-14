<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('loginpage/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('loginpage/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('loginpage/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('loginpage/css/style.css') }}">

    <title>Laporin. | Masuk sebagai Admin</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('loginpage/images/undraw_file_sync_ot38.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3><strong>Laporin.</strong></h3>
                                    <p class="mb-4">Masuk sebagai Admin</p>
                                </div>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="username">E-Mail</label>
                                        <input type="text" class="form-control" name="email" id="username" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <input type="submit" value="Masuk" class="btn btn-pill text-white btn-block btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('loginpage/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('loginpage/js/popper.min.js') }}"></script>
    <script src="{{ asset('loginpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('loginpage/js/main.js') }}"></script>
</body>

</html>