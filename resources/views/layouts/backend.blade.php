<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/backend/assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="/backend/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="/backend/assets/js/modernizr.min.js"></script>
        @yield('css')
    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                                <span>
                                    <img src="/backend/assets/images/logo_.png" alt="" height="25" style="width: 220px; height: 56px;">
                                </span>
                        <i>
                            <img src="/backend/assets/images/logo_sm_.png" alt="" style="width: 50px; height: 56px;" height="28">
                        </i>
                    </a>
                </div>

               {{-- Nav --}}
                @include('partials.backend.nav')
               {{-- End Nav --}}

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
           @include('partials.backend.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard 1</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        {{-- content --}}
                        @yield('content')
                        {{-- endcontent --}}
                    </div> <!-- container -->
                    
                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 © Assalaamstudio. - SMK Assalaam Bandung
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="/backend/assets/js/jquery.min.js"></script>
        <script src="/backend/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="/backend/assets/js/bootstrap.min.js"></script>
        <script src="/backend/assets/js/metisMenu.min.js"></script>
        <script src="/backend/assets/js/waves.js"></script>
        <script src="/backend/assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="/backend/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="/backend/plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="/backend/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="/backend/plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="/backend/plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="/backend/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="/backend/assets/js/jquery.core.js"></script>
        <script src="/backend/assets/js/jquery.app.js"></script>
        @yield('js')
        @stack('scripts')

    </body>
</html>