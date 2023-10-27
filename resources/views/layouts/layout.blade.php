<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CargoMax | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Cargo shipping and Logistics"
        name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="_token" content="{{csrf_token()}}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.png">

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style"
        rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet"
        type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box" style="background: #072659">
                        <a href="{{route('dashboard')}}" class="logo logo-dark">
                            <span class="logo-sm" style="padding:20px">
                                <img src="/assets/images/logo3.png" alt=""
                                    height="35">
                            </span>
                            <span class="logo-lg" style="padding:20px">
                                <img src="/assets/images/logo3.png" alt=""
                                    height="27">
                            </span>
                        </a>

                        <a href="{{route('dashboard')}}"
                            class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/assets/images/logo2.png" alt=""
                                    height="22" style>
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo2.png" alt=""
                                    height="55">
                            </span>
                        </a>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn" style="margin-top:15px">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <form class="app-search d-none d-lg-block" style="margin-top:17px">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>




                </div>

                <div class="d-flex">


                    <div class="dropdown d-inline-block">
                        <button type="button"
                            class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications">
                                            Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"
                                            key="t-view-all"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="javascript: void(0);"
                                    class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span
                                                class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1" key="t-your-order">
                                                Your order is placed</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center"
                                    href="javascript:void(0)">
                                    <i
                                        class="mdi mdi-arrow-right-circle me-1"></i>
                                    <span key="t-view-more">View More..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button"
                            class="btn header-item waves-effect"
                            id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="/assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1"
                                key="t-henry">{{Auth::user()->name}}</span>

                        </button>
                    </div>

                    <div class="dropdown d-inline-block">


                        <button type="button"
                            onclick="window.location='/logout'"
                            class="btn header-item noti-icon waves-effect"
                            id="page-header-user-dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-power-off"></i>
                        </button>

                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu" style="background-image: linear-gradient(to bottom, #072659, #364b80, #5e74a9, #889fd3, #b3cdff);">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li style="padding:10px;">
                            <a href="{{route('dashboard')}}"
                                class="waves-effect {{ (request()->is('dashboard')) ? 'active' : '' }}">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-chat">{{ __('Dashboard') }}</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="javascript: void(0);"
                                class="has-arrow waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-invoices">Shipments</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('shipment.index') }}"
                                        key="t-invoice-list">All Shipments</a>
                                </li>
                                <li><a href="{{ route('shipment.create') }}"
                                        key="t-invoice-detail">Create
                                        Shipment</a></li>
                            </ul>
                        </li> -->
                        <li style="padding:10px;">
                            <a href="{{ route('shipment.create') }}"
                                class="waves-effect {{ (request()->is('shipment.create')) ? 'active' : '' }}">
                                <i class="bx bx-receipt"></i>
                                <span key="t-chat">Shipments</span>
                            </a>
                        </li>
                        <li style="padding:10px;">
                            <a href="{{ route('shipment.index') }}"
                                class="waves-effect {{ (request()->is('shipment.index')) ? 'active' : '' }}">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">History</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Copyright.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                CargoMax Services Limited
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>

    <script src="/assets/js/app.js"></script>

</body>

</html>