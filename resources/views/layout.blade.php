<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
        <!-- Custom fonts for this template-->
    <link href="{{asset('front_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front_assets/css/app.css')}}">
    <link href="{{asset('front_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <title>@yield('page_title')</title>
  </head>
  <body id="page-top">
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            @include('inc/header')
            @section('container')
            @show
            @include('inc/footer')
        </div>  
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('front_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('front_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('front_assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('front_assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('front_assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('front_assets/js/demo/chart-pie-demo.js')}}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('front_assets/js/sb-admin-2.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>


