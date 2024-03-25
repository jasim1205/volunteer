<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Volunteer</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/volunteer/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('public/volunteer/assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/volunteer/assets/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('public/volunteer/assets/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/volunteer/assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset('public/volunteer/assets/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{asset('public/volunteer/assets/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset('public/volunteer/assets/images/logo-text.png')}}" alt="">
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
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('myProfile')}}" class="dropdown-item">
                                        <i class="fa fa-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="{{ route('logOut') }}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="{{ route('userdashboard') }}" aria-expanded="false">
                        <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a class="has-arrow" href="{{route('myProfile')}}" aria-expanded="false">
                        <i class="icon icon-app-store"></i><span class="nav-text">Profile</span></a>
                    </li>
                    <li><a class="has-arrow" href="{{route('blog.index')}}" aria-expanded="false">
                        <i class="icon icon-app-store"></i><span class="nav-text">Blog</span></a>
                    </li>
                    <li><a class="has-arrow" href="{{route('skill.index')}}" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Skill</span></a>
                        
                    </li>
                    <li><a class="has-arrow" href="{{route('volactivity.index')}}" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Join Activity</span></a>
                        
                    </li>
                    <li><a class="has-arrow" href="{{route('userlogOut')}}" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Logout</span></a>
                        
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>@yield('title')</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('userdashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">@yield('page')</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                @yield('content')
                
            </div>
        </div>
        {{-- <div class="content-body">
           
            @yield('content')
        </div> --}}
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank"><i>md.jasim uddin</i></a> {{ date('Y') }}</p>
                
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
    <script src="{{asset('public/volunteer/assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/js/quixnav-init.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{asset('public/volunteer/assets/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('public/volunteer/assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('public/volunteer/assets/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('public/volunteer/assets/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('public/volunteer/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('public/volunteer/assets/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/volunteer/assets/js/dashboard/dashboard-1.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>