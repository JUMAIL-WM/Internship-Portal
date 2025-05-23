
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Job Hunt - @yield('title') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin_asset/images/favicon.png">
    <link rel="stylesheet" href="/admin_asset/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/admin_asset/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="/admin_asset/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="/admin_asset/css/style.css" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="/admin_asset/vendor/toastr/css/toastr.min.css">

    <!-- Datatable -->
    <link href="/admin_asset/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

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
            <a href="{{route('admin.dashboard')}}" class="brand-logo">
                <img class="logo-abbr" src="/admin_asset/images/logo.png" alt="">
                <img class="logo-compact" src="/admin_asset/images/logo 6.png" alt="">
                <img class="brand-title" src="/admin_asset/images/logo 6.png" alt="">
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
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('admin.adminProfile')}}" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="/admin_asset/email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <form action="" method="post">
                                        <a href="{{route('admin.logout')}}" class="dropdown-item">
                                            <i class="icon-key"></i>
                                            <span type="submit" class="ml-2">Logout </span>
                                        </a>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                @include('include.admsidebar')
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @section('row')

                @show
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p> Used only for Learning Purpose by <a href="https://www.linkedin.com/in/jumail/" target="_blank">Mohammed Jumail</a></p>
                <p>Copyright © Distributed by <a href="https://digizen.lk/" target="_blank">Digizen</a></p>
            </div>
        </div>
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
    <script src="/admin_asset/vendor/global/global.min.js"></script>
    <script src="/admin_asset/js/quixnav-init.js"></script>
    <script src="/admin_asset/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="/admin_asset/vendor/raphael/raphael.min.js"></script>
    <script src="/admin_asset/vendor/morris/morris.min.js"></script>


    <script src="/admin_asset/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/admin_asset/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="/admin_asset/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="/admin_asset/vendor/flot/jquery.flot.js"></script>
    <script src="/admin_asset/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="/admin_asset/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="/admin_asset/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="/admin_asset/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="/admin_asset/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="/admin_asset/js/dashboard/dashboard-1.js"></script>

    <!-- Toastr -->
    <script src="/admin_asset/vendor/toastr/js/toastr.min.js"></script>

    <!-- All init script -->
    <script src="/admin_asset/js/plugins-init/toastr-init.js"></script>

    <!-- Datatable -->
    <script src="/admin_asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/admin_asset/js/plugins-init/datatables.init.js"></script>

</body>

</html>
