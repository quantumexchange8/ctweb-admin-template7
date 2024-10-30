<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Boxed Layout | Current Tech | Admin Templete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed" data-layout-size="boxed">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/CurrentTech_Logo.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/currenttech_logo.svg" alt="" height="17">
                            </span>
                        </a>

                        <a href="/" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/CurrentTech_Logo.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/currenttech_logo.svg" alt="" height="18">
                            </span>
                        </a>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="d-none d-sm-block">
                        <div class="dropdown dropdown-topbar pt-3 mt-1 d-inline-block">
                            <a class="btn btn-light dropdown-toggle" href="/#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Create <i class="mdi mdi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/#">Action</a>
                                <a class="dropdown-item" href="/#">Another action</a>
                                <a class="dropdown-item" href="/#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex">

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="fa fa-search"></span>
                        </div>
                    </form>

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-none d-md-block ms-2">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img class="me-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="16">
                            English <span class="mdi mdi-chevron-down"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="/javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany_flag.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle"> German </span>
                            </a>

                            <!-- item-->
                            <a href="/javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy_flag.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle"> Italian </span>
                            </a>

                            <!-- item-->
                            <a href="/javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/french_flag.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle"> French </span>
                            </a>

                            <!-- item-->
                            <a href="/javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain_flag.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle"> Spanish </span>
                            </a>

                            <!-- item-->
                            <a href="/javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia_flag.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle"> Russian </span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-bell"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0"> Notifications (258) </h5>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="/javascript:void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                            <span class="avatar-title border-success rounded-circle ">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
                                <a href="/javascript:void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                            <span class="avatar-title border-warning rounded-circle ">
                                                <i class="mdi mdi-message"></i>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New Message received</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
                                <a href="/javascript:void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                            <span class="avatar-title border-info rounded-circle ">
                                                <i class="mdi mdi-glass-cocktail"></i>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">It is a long established fact that a reader will</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
                                <a href="/javascript:void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                            <span class="avatar-title border-primary rounded-circle ">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
                                <a href="/javascript:void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                            <span class="avatar-title border-warning rounded-circle ">
                                                <i class="mdi mdi-message"></i>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New Message received</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="/javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ti-bell"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0"> Notifications (258) </h5>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="/" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title border-success rounded-circle ">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="/" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title border-warning rounded-circle ">
                                                <i class="mdi mdi-message"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">New Message received</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="/" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title border-info rounded-circle ">
                                                <i class="mdi mdi-glass-cocktail"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">It is a long established fact that a reader will</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="/" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title border-primary rounded-circle ">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="/" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title border-warning rounded-circle ">
                                                <i class="mdi mdi-message"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">New Message received</h6>
                                            <div class="text-muted">
                                                <p class="mb-1">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="/javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/user-4.jpg"
                                alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="/#"><i
                                    class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i>
                                Profile</a>
                            <a class="dropdown-item" href="/#"><i
                                    class="mdi mdi-wallet font-size-17 text-muted align-middle me-1"></i> My Wallet</a>
                                    <a class="dropdown-item d-flex align-items-center" href="/#"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                            <a class="dropdown-item" href="/#"><i
                                    class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i>
                                Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="/#"><i
                                    class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i>
                                Logout</a>
                        </div>
                    </div>





                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-spin mdi-cog"></i>
                        </button>
                    </div>


                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="/" class="waves-effect">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="badge rounded-pill bg-primary float-end">2</span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="/calendar" class=" waves-effect">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-email-outline"></i>
                                <span>Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/email-inbox">Inbox</a></li>
                                <li><a href="/email-read">Email Read</a></li>
                                <li><a href="/email-compose">Email Compose</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="/chat" class=" waves-effect">
                                <i class="mdi mdi-chat-processing-outline"></i>
                                <span class="badge rounded-pill bg-danger float-end">Hot</span>
                                <span>Chat</span>
                            </a>
                        </li>
        
                        <li>
                            <a href="/kanbanboard" class=" waves-effect">
                                <i class="mdi mdi-billboard"></i>
                                <span class="badge rounded-pill bg-success float-end">New</span>
                                <span>Kanban Board</span>
                            </a>
                        </li>
        
                        <li class="menu-title">Components</li>
        
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-buffer"></i>
                                <span>UI Elements</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="/ui-alerts">Alerts</a></li>
                                    <li><a href="/ui-buttons">Buttons</a></li>
                                    <li><a href="/ui-badge">Badge</a></li>
                                    <li><a href="/ui-cards">Cards</a></li>
                                    <li><a href="/ui-carousel">Carousel</a></li>
                                    <li><a href="/ui-dropdowns">Dropdowns</a></li>
                                    <li><a href="/ui-utilities">Utilities<span class="badge rounded-pill bg-success float-end">New</span></a></li>
                                    <li><a href="/ui-grid">Grid</a></li>
                                    <li><a href="/ui-images">Images</a></li>
                                    <li><a href="/ui-lightbox">Lightbox</a></li>
                                    <li><a href="/ui-modals">Modals</a></li>
                                    <li><a href="/ui-colors">Colors<span class="badge rounded-pill bg-warning float-end">New</span></a></li>
                                    <li><a href="/ui-offcanvas">Offcanvas</a></li>
                                    <li><a href="/ui-pagination">Pagination</a></li>
                                    <li><a href="/ui-popover-tooltips">Popover &amp; Tooltips</a></li>
                                    <li><a href="/ui-rangeslider">Range Slider</a></li>
                                    <li><a href="/ui-session-timeout">Session Timeout</a></li>
                                    <li><a href="/ui-progressbars">Progress Bars</a></li>
                                    <li><a href="/ui-sweet-alert">Sweet-Alert</a></li>
                                    <li><a href="/ui-tabs-accordions">Tabs &amp; Accordions</a></li>
                                    <li><a href="/ui-typography">Typography</a></li>
                                    <li><a href="/ui-video">Video</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="mdi mdi-clipboard-outline"></i>
                                <span class="badge rounded-pill bg-success float-end">6</span>
                                <span>Forms</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/form-elements">Form Elements</a></li>
                                <li><a href="/form-validation">Form Validation</a></li>
                                <li><a href="/form-advanced">Form Advanced</a></li>
                                <li><a href="/form-editors">Form Editors</a></li>
                                <li><a href="/form-uploads">Form File Upload</a></li>
                                <li><a href="/form-xeditable">Form Xeditable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-chart-line"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/charts-morris">Morris Chart</a></li>
                                <li><a href="/charts-chartist">Chartist Chart</a></li>
                                <li><a href="/charts-chartjs">Chartjs Chart</a></li>
                                <li><a href="/charts-flot">Flot Chart</a></li>
                                <li><a href="/charts-c3">C3 Chart</a></li>
                                <li><a href="/charts-other">Jquery Knob Chart</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                <span>Tables</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/tables-basic">Basic Tables</a></li>
                                <li><a href="/tables-datatable">Data Table</a></li>
                                <li><a href="/tables-responsive">Responsive Table</a></li>
                                <li><a href="/tables-editable">Editable Table</a></li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-album"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/icons-material">Material Design</a></li>
                                <li><a href="/icons-ion">Ion Icons</a></li>
                                <li><a href="/icons-fontawesome">Font Awesome</a></li>
                                <li><a href="/icons-themify">Themify Icons</a></li>
                                <li><a href="/icons-dripicons">Dripicons</a></li>
                                <li><a href="/icons-typicons">Typicons Icons</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <span class="badge rounded-pill bg-danger float-end">2</span>
                                <i class="mdi mdi-google-maps"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/maps-google"> Google Map</a></li>
                                <li><a href="/maps-vector"> Vector Map</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Extras</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-responsive"></i>
                                <span> Layouts </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a target="_self" href="/layouts-light-sidebar">Light Sidebar</a></li>
                                        <li><a target="_self" href="/layouts-compact-sidebar">Compact Sidebar</a>
                                        </li>
                                        <li><a target="_self" href="/layouts-icon-sidebar">Icon Sidebar</a></li>
                                        <li><a target="_self" href="/layouts-boxed">Boxed Layout</a></li>
                                        <li><a target="_self" href="/layouts-preloader">Preloader</a></li>
                                        <li><a target="_self" href="/layouts-colored-sidebar">Colored Sidebar</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a target="_self" href="/layouts-horizontal">Horizontal</a></li>
                                        <li><a target="_self" href="/layouts-hori-topbar-dark">Topbar Dark</a></li>
                                        <li><a target="_self" href="/layouts-hori-preloader">Preloader</a></li>
                                        <li><a target="_self" href="/layouts-hori-boxed-width">Boxed Layout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-account-box"></i>
                                <span> Authentication </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a target="_self" href="/pages-login">Login</a></li>
                                <li><a target="_self" href="/pages-register">Register</a></li>
                                <li><a target="_self" href="/pages-recoverpw">Recover Password</a></li>
                                <li><a target="_self" href="/pages-lock-screen">Lock Screen</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-text-box-multiple-outline"></i>
                                <span> Extra Pages </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/pages-timeline">Timeline</a></li>
                                <li><a href="/pages-invoice">Invoice</a></li>
                                <li><a href="/pages-directory">Directory</a></li>
                                <li><a href="/pages-blank">Blank Page</a></li>
                                <li><a target="_self" href="/pages-404">Error 404</a></li>
                                <li><a target="_self" href="/pages-500">Error 500</a></li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-share-variant"></i>
                                <span>Multi Level</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <div class="main-content" id="result"></div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        ©
                        <script>document.write(new Date().getFullYear())</script> Current Tech
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="/javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/ajax.js"></script>
</body>

</html>