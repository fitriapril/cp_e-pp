<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/SMK.png') }}">
    <title>E-SPP SMK</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Sweet Alert -->
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    <style>
        /* Profile Dropdown Styles */
        .profile-dropdown {
            position: relative;
            display: inline-block;
            margin-left: 15px;
        }
        
        .profile-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #6c757d;
            color: white;
            cursor: pointer;
            border: none;
            outline: none;
            transition: all 0.2s ease;
        }
        
        .profile-btn:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }
        
        .profile-btn i {
            font-size: 18px;
        }
        
        .dropdown-menu {
            position: absolute;
            top: 50px;
            left: -120px;
            width: 150px;
            background-color: white;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: none;
            z-index: 100;
        }
        
        .dropdown-menu.show {
            display: block;
            animation: fadeIn 0.15s ease-out;
        }
        
        .logout-btn {
            padding: 10px 15px;
            display: flex;
            align-items: center;
            color: #dc3545;
            text-decoration: none;
            transition: background-color 0.2s;
            font-size: 14px;
        }
        
        .logout-btn i {
            margin-right: 10px;
            width: 18px;
            text-align: center;
        }
        
        .logout-btn:hover {
            background-color: #f8d7da;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile Styles */
        @media (max-width: 767px) {
            .profile-dropdown {
                position: fixed;
                bottom: 20px;
                left: 20px;
                z-index: 1000;
            }
            
            .profile-btn {
                width: 50px;
                height: 50px;
                background-color: #4285f4;
            }
            
            .dropdown-menu {
                bottom: 60px;
                top: auto;
                left: 0;
            }
        }
        
    </style>

    @yield('plugin')

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{ url('/dashboard') }}">
                        <!-- Logo text -->
                        <span class="logo-text">
                            <i class=""> <img src="{{ asset('assets/images/SMK.png') }}" alt="" width="20%" height="">
                            </i>
                            E-SPP SMK
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Logo Text -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="{{ url('/dashboard') }}">
                        </a>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <div class="profile-dropdown">
                                <button class="profile-btn" id="profileBtn">
                                    <i class="fas fa-user"></i>
                                </button>
                                
                                <div class="dropdown-menu" id="dropdownMenu">
                                    <a href="{{ route('logout') }}" class="logout-btn" id="logoutBtn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin0" style="background-color: #888e97">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <div class="user-profile d-flex no-block dropdown m-t-20">
                            <div class="user-pic"><img src="{{ url('assets/images/users/user.png') }}" alt="users"
                                    class="rounded-circle" width="40" /></div>
                            <div class="user-content hide-menu m-l-10">
                                <a href="javascript:void(0)" class="" id="Userdd" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h5 class="m-b-0 user-name font-medium">{{ $user->name }}<i
                                            class="ml-2 fa fa-angle-down"></i></h5>
                                    <span class="op-5 user-email">{{ $user->email }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">


                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                            class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboard') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        @if(auth()->user()->level == 'admin')
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-dark sidebar-link"
                                href="{{ url('dashboard/data-siswa') }}" aria-expanded="false">
                                <i class="mdi mdi-account-outline"></i>
                                <span class="hide-menu">Data Siswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboard/data-petugas') }}" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="hide-menu">Data Petugas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboard/data-kelas') }}" aria-expanded="false">
                                <i class="mdi mdi-home-variant"></i>
                                <span class="hide-menu">Data Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboard/data-spp') }}" aria-expanded="false">
                                <i class="mdi mdi-cash-usd"></i>
                                <span class="hide-menu">Data SPP</span>
                            </a>
                        </li>
                        @endif
                        @if(auth()->user()->level == 'admin' || auth()->user()->level == 'petugas')
                        <li class="sidebar-item">
                            <a class="sidebar-liauth()->user()->level == 'admin'nk waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboard/pembayaran') }}" aria-expanded="false">
                                <i class="mdi mdi-cash"></i>
                                <span class="hide-menu">Entri Transaksi Pembayaran</span>
                            </a>
                        </li>
                        @endif
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboard/histori') }}" aria-expanded="false">
                                <i class="mdi mdi-note-multiple"></i>
                                <span class="hide-menu">History Pembayaran</span>
                            </a>
                        </li>
                        @if(auth()->user()->level == 'admin')
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('dashboard/laporan') }}" aria-expanded="false">
                                <i class="mdi mdi-file-document"></i>
                                <span class="hide-menu">Generate Laporan</span>
                            </a>
                        </li>
                        @endif
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @yield('breadcrumb')
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Content -->
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                <!-- End content -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Developer by Group A. Copyright 2025 <a href="">Universitas Terbuka</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script>
        @yield('sweet')

        @yield('js')

        // Profile Dropdown Script
        document.addEventListener('DOMContentLoaded', function() {
            const profileBtn = document.getElementById('profileBtn');
            const dropdownMenu = document.getElementById('dropdownMenu');
            
            // Toggle dropdown menu
            if (profileBtn) {
                profileBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    dropdownMenu.classList.toggle('show');
                });
            }
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                if (dropdownMenu) {
                    dropdownMenu.classList.remove('show');
                }
            });
            
            // Prevent dropdown from closing when clicking inside
            if (dropdownMenu) {
                dropdownMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        });
    </script>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>