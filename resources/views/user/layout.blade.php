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
    <link rel="stylesheet" href="{{asset('css/animate-css/animate.min.css')}}" media="screen" >
    <link rel="stylesheet" href="{{asset('css/toastr/toastr.min.css')}}" media="screen" >
    <link href="{{asset('css/select2/select2.min.css')}}" rel="stylesheet" />
    <title>@yield('page_title')</title>
    <!-- Custom styles for this page -->
    <link href="{{asset('front_assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="{{asset('front_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/select2/select2.min.js')}}"></script>

  </head>
  <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            @include('user/inc/sidebar')
            <!-- Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content" style="height:90vh;overflow-y:hidden !important;">
                    <!-- Topbar -->
                    @include('user/inc/header')
                    <!-- End of Topbar -->
                    <div style="overflow-y:scroll !important;height:90vh !important;">
                        <!-- Begin Page Content -->
                        @section('container')
                        @show
                        <!-- /.container-fluid -->
                    </div>
                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{'/logout'}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('front_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('front_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('front_assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('front_assets/vendor/chart.js/Chart.min.js')}}"></script>

        <!-- Page level plugins -->
    <script src="{{asset('front_assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('front_assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>


    <!-- Page level custom scripts -->
    <script src="{{asset('front_assets/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('js/toastr/toastr.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


    <!-- Page level custom scripts -->
    <!-- <script src="{{asset('front_assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('front_assets/js/demo/chart-pie-demo.js')}}"></script> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="{{asset('front_assets/js/sb-admin-2.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <script>
        $(document).ready(function() {
            toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "2000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
            @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>


  </body>
</html>


