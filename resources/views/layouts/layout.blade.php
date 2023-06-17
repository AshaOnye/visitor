<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CargoMax | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template"
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
                            <span class="logo-sm">
                                <img src="/assets/images/logo2.png" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo2.png" alt=""
                                    height="17">
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
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>




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
                                            <div
                                                class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">
                                                    If several languages
                                                    coalesce the grammar</p>
                                                <p class="mb-0"><i
                                                        class="mdi mdi-clock-outline"></i>
                                                    <span key="t-min-ago">3 min
                                                        ago</span>
                                                </p>
                                            </div>
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
        <div class="vertical-menu" style="background: #072659">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
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
                        <li>
                            <a href="{{ route('shipment.index') }}"
                                class="waves-effect {{ (request()->is('shipment.index')) ? 'active' : '' }}">
                                <i class="bx bx-receipt"></i>
                                <span key="t-chat">Shipments</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="{{ route('history') }}"
                                class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">History</span>
                            </a>
                        </li> -->

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
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-1.jpg"
                        class="img-thumbnail" alt="layout images">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox"
                        id="light-mode-switch" checked>
                    <label class="form-check-label"
                        for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-2.jpg"
                        class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox"
                        id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Dark
                        Mode</label>
                </div>

                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-3.jpg"
                        class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox"
                        id="rtl-mode-switch">
                    <label class="form-check-label" for="rtl-mode-switch">RTL
                        Mode</label>
                </div>

                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-4.jpg"
                        class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox"
                        id="dark-rtl-mode-switch">
                    <label class="form-check-label"
                        for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>


            </div>

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

<!-- Mirrored from themesbrand.com/skote/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jun 2022 19:33:16 GMT -->

</html>