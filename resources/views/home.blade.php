<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        @foreach ($product as $data)
                        <div class="row align-items-center">
                            <div class="col-md-4"> 
                                <img style="width: 70px;" src="https://aadibio.com/wp-content/uploads/2016/07/default_image_01.png" class="mx-auto d-block" alt="...">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <a href="{{ route('detail', $data->id) }}"><h5 class="card-title">{{ $data->product_name }}</h5></a>
                                    <p class="card-text">Rp {{ number_format($data->price) }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn text-white" style="background-color: #2581f9">BUY</button>
                            </div>
                        </div>
                        @endforeach
                        <div class="row align-items-center pb-2">
                            <div class="col-md-4"> 
                            </div>
                            <div class="col-md-4">
                                <button class="btn text-white" style="background-color: #2581f9">CheckOut</button>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>

</body>

</html>