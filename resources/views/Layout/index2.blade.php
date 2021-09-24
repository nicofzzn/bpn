<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('b/images/favicon.png')}}">
    <link rel="stylesheet" href="{{url('b/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('b/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{url('b/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{url('b/css/style.css')}}" rel="stylesheet">
     <link href="{{url('b/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">


    <!-- Daterange picker -->
    <link href="{{url('b/vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{url('b/vendor/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{url('b/vendor/jquery-asColorPicker/css/asColorPicker.min.css')}}" rel="stylesheet">

     <link href="{{url('b/vendor/summernote/summernote.css')}}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{url('b/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{url('b/vendor/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{url('b/vendor/pickadate/themes/default.date.css')}}">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{url('b/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{url('b/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{url('b/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                
                                
                            </div>
                        </div>

                       
                    </div>
                </nav>
            </div>
        </div>


        @yield('container')

        
      
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('b/vendor/global/global.min.js')}}"></script>
    <script src="{{url('b/js/quixnav-init.js')}}"></script>
    <script src="{{url('b/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{url('b/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{url('b/vendor/morris/morris.min.js')}}"></script>


    <script src="{{url('b/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('b/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{url('b/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{url('b/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{url('b/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{url('b/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{url('b/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{url('b/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{url('b/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{url('b/js/dashboard/dashboard-1.js')}}"></script>


     <script src="{{url('b/vendor/global/global.min.js')}}"></script>
    <script src="{{url('b/js/quixnav-init.js')}}"></script>
    <script src="{{url('b/js/custom.min.js')}}"></script>
    


    <!-- Datatable -->
    <script src="{{url('b/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('b/js/plugins-init/datatables.init.js')}}"></script>


     <script src="{{url('b/vendor/moment/moment.min.js')}}"></script>
    <script src="{{url('b/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- clockpicker -->
    <script src="{{url('b/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
    <!-- asColorPicker -->
    <script src="{{url('b/vendor/jquery-asColor/jquery-asColor.min.js')}}"></script>
    <script src="{{url('b/vendor/jquery-asGradient/jquery-asGradient.min.js')}}"></script>
    <script src="{{url('b/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js')}}"></script>
    <!-- Material color picker -->
    <script src="{{url('b/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- pickdate -->
    <script src="{{url('b/vendor/pickadate/picker.js')}}"></script>
    <script src="{{url('b/vendor/pickadate/picker.time.js')}}"></script>
    <script src="{{url('b/vendor/pickadate/picker.date.js')}}"></script>



    <!-- Daterangepicker -->
    <script src="{{url('b/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
    <!-- Clockpicker init -->
    <script src="{{url('b/js/plugins-init/clock-picker-init.js')}}"></script>
    <!-- asColorPicker init -->
    <script src="{{url('b/js/plugins-init/jquery-asColorPicker.init.js')}}"></script>
    <!-- Material color picker init -->
    <script src="{{url('b/js/plugins-init/material-date-picker-init.js')}}"></script>
    <!-- Pickdate -->
    <script src="{{url('b/js/plugins-init/pickadate-init.js')}}"></script>

     <script src="{{url('b/vendor/summernote/js/summernote.min.js')}}"></script>
    <!-- Summernote init -->
    <script src="{{url('b/js/plugins-init/summernote-init.js')}}"></script>

</body>

</html>