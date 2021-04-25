<div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo-dark.png" class="logo-lg" alt="" height="22">
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">

                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="navbar-right ml-auto list-inline float-right mb-0">

                            <!-- full screen -->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <i class="fas fa-expand noti-icon"></i>
                                </a>
                            </li>

                            <!-- notification -->
                            <li class="dropdown notification-list list-inline-item">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fas fa-bell noti-icon"></i>
                                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">
                                            Notifications
                                        </h6>
                                    <div class="slimscroll notification-item-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>

                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                            View all <i class="fi-arrow-right"></i>
                                        </a>
                                </div>
                            </li>

                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <!-- item-->
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            

            <!-- MENU Start -->
            <div class="navbar-custom" style="border-top: 1px solid #e7eaec">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{route('admin.dashboard')}}"><i class="dripicons-meter"></i> Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('admin.products.index')}}"><i class="fa fa-tags"></i> Products</a>
                                <ul class="submenu">
                                    <li><a href="{{route('admin.products.index')}}">All</a></li>
                                    <li><a href="{{route('admin.products.create')}}">Create</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('admin.categories.index')}}"><i class="fa fa-bars"></i> Categories</a>
                                <ul class="submenu">
                                    <li><a href="{{route('admin.categories.index')}}">All</a></li>
                                    <li><a href="{{route('admin.categories.create')}}">Create</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="index.html"><i class="fa fa-users"></i> Customers</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('admin.types.index')}}"><i class="fa fa-bars"></i> Types</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Orders</a>
                                <ul class="submenu">
                                    <li><a href="advanced-alertify.html">All</a></li>
                                    <li><a href="advanced-rating.html">Completed</a></li>
                                    <li><a href="advanced-nestable.html">New</a></li>
                                    <li><a href="advanced-rangeslider.html">In Progress</a></li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-image"></i>Sliders </a>
                                <ul class="submenu">
                                    <li><a href="charts-morris.html">All</a></li>
                                    <li><a href="charts-chartist.html">Add</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-file"></i>Pages </a>
                                <ul class="submenu">
                                    <li><a href="charts-morris.html">About</a></li>
                                    <li><a href="charts-chartist.html">FAQ</a></li>
                                    <li><a href="charts-chartist.html">Services</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-graph-bar"></i>Settings </a>
                                <ul class="submenu">
                                    <li><a href="charts-morris.html">Logo</a></li>
                                    <li><a href="charts-chartist.html">Contact Information</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->


            <!-- start content -->
            <!-- <div class="bg-dark">
                <div class="container-fluid">
                    <div class="row align-items-center ">
                        <div class="col-md-8">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Welcome to Zegva Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block app-datepicker">
                                <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                <i class="mdi mdi-chevron-down mdi-drop"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row top-content">
                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Expenses</h5>
                                    <h4 class="text-info pt-1 mb-0">$67,670</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart1"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Invoice</h5>
                                    <h4 class="text-warning pt-1 mb-0">$7,360</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Amount Due</h5>
                                    <h4 class="text-primary pt-1 mb-0">$5000</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">

                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Unpaid Invoices</h5>
                                    <h4 class="text-danger pt-1 mb-0">$2,480</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end content -->



        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->





