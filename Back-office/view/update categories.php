<?php
    include_once '../model/categorieM.php';
    include_once '../controller/categorieC.php';

    $categorieM = null;

    $categorieC = new categorieC();
    if (
      
        isset($_POST["Category_Pr"])
    ) {
        
            $categorieM = new categorieM(
			
                $_POST['Category_Pr']
            );
            $categorieC->modifiercategorie($categorieM, $_POST["id_ct"]);
            
            header('Location:categories.php');
    }


    

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>categories</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="codedthemes" />
        <!-- Favicon icon -->

        <link rel="icon" href="assets/images/icon.png" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
        <!-- waves.css -->
        <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="assets/css/purchase.css">

        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

    </head>

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="preloader-wrapper">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" height="15" width="147" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Rania</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Rania</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="">
                                    <div class="main-menu-header">
                                        <img class="img-80 img-radius" src="assets/images/4.jpg" alt="User-Profile-Image">
                                        <div class="user-details">
                                            <span id="more-details">Rania<i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </div>

                                    <div class="main-menu-content">
                                        <ul>
                                            <li class="more-details">
                                                <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                                <a href="#!"><i class="ti-settings"></i>Settings</a>
                                                <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-15 p-b-0">
                                    <form class="form-material">
                                        <div class="form-group form-primary">
                                            <input type="text" name="footer-email" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="index.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu active">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Modules</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="gestion_client.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="" data-i18n="">Users</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <!--<ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="" class="waves-effect waves-dark">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage Shipping</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="" class="waves-effect waves-dark">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage Bills</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>-->
                                            </li>
                                            <li class="pcoded-hasmenu active">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Purchases</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="active">
                                                        <a href="categories.html" class=" waves-effect waves-dark">
                                                            <span class="pcoded-micon "><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">categories</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href=" " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Orders</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Rooms</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                    <li class=" ">
                                                        <a href="Gestion_Enclos.html " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Rooms</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="type_enclos.html " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Room Types</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Events</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                    <li class=" ">
                                                        <a href="gestion_event.html " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Events</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="gestion_sponsors.html " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Sponsors</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0) " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Animals</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                    <li class=" ">
                                                        <a href="Gestion_animaux.html " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Animals</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="Gestion_régimes.html " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Animal Diet</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="pcoded-hasmenu ">
                                                <a href="Gestion_Livraison.html " class="waves-effect waves-dark ">
                                                    <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                    <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Shipping</span>
                                                    <span class="pcoded-mcaret "></span>
                                                </a>
                                                <ul class="pcoded-submenu ">
                                                    <li class=" ">
                                                        <a href=" " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Shipping</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href=" " class="waves-effect waves-dark ">
                                                            <span class="pcoded-micon "><i class="ti-angle-right "></i></span>
                                                            <span class="pcoded-mtext " data-i18n="nav.basic-components.alert ">Manage Bills</span>
                                                            <span class="pcoded-mcaret "></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Forms &amp; Tables</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                        <a href="form-elements-component.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Basic Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Chart &amp; Maps</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                        <a href="chart.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="map-google.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Pages</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="auth-sign-up.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Register</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="sample-page.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sample Page</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>

                                <div class="pcoded-navigation-label" data-i18n="nav.category.other">Other</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="pcoded-content">
                            <!-- Page-header start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Purchases - categories</h5>
                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Purchases</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Purchases - categories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page-header end -->
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <!-- Page body start -->
                                        <div class="page-body">
                                            <div class="row">
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>categorie Table</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="data-table-main icon-list-demo">
                                                            <div class="row">
                                                                <?php
                                                                    if (isset($_POST['id_ct'])){
                                                                        $categorieM = $categorieC->retrievecategorie($_POST["id_ct"]);  
                                                                    }                                                                      
                                                                ?>
                                                                
                                                                        <form action="" method="POST">
                                                                            <h1>Edit categorie</h1>
                                                                            <input type="hidden"  id="id_ct" value="<?php echo $categorieM['id_ct']; ?>" name="id_ct"><br>

                                                                            <input class="champs" type="text" value="<?php echo $categorieM['Category_Pr']; ?>" id="Category_Pr" name="Category_Pr">
                                                                            <p id="errorCategory" class="error"></p>

                                                                            
                                                                           

                                                                            <input type="submit" value="Submit" class="add_btn">
                                                                            <button type="submit" class="add_btn"><a href="categories.php" style="color:white">Cancel</a></button>
                                                                        </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Warning Section Ends -->
                        <!-- Required Jquery -->
                        <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
                        <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
                        <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
                        <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
                        <!-- waves js -->
                        <script src="assets/pages/waves/js/waves.min.js"></script>
                        <!-- jquery slimscroll js -->
                        <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
                        <!-- modernizr js -->
                        <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
                        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
                        <!-- Custom js -->
                        <script type="text/javascript" src="assets/pages/icon-modal.js"></script>
                        <script src="assets/js/pcoded.min.js"></script>
                        <script src="assets/js/vertical-layout.min.js "></script>
                        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                        <script type="text/javascript" src="assets/js/script.js"></script>
                        <script type="text/javascript" src="assets/js/purchases.js"></script>


                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>