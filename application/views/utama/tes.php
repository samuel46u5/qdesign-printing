<!DOCTYPE html>
<!-- saved from url=(0151)file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&%20Trusted%20Bootstrap%204%20Admin%20Template.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://wrappixel.com/demos/admin-templates/monster-admin/assets/images/favicon.png">
    <title>Monster Admin Template - The Most Complete &amp; Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?= base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url(); ?>assets/css/colors/green.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script async="" src="./tes_files/analytics.js.download"></script>
    <script async="" src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/analytics.js.download"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-85622565-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar is_stuck" style="position: fixed; top: 0px; width: 1903px;">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/logo-icon.png" alt="homepage" class="dark-logo">
                            <!-- Light Logo icon -->
                            <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/logo-light-icon.png" alt="homepage" class="light-logo">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/logo-text.png" alt="homepage" class="dark-logo">
                            <!-- Light Logo text -->
                            <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/logo-light-text.png" class="light-logo" alt="homepage"></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                            <div class="message-center" style="overflow: hidden; width: auto; height: 250px;">
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                            <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                            <div class="message-center" style="overflow: hidden; width: auto; height: 250px;">
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="user-img"> <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/1.jpg" alt="user" class="img-circle"> <span class="profile-status online float-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="user-img"> <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy float-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="user-img"> <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/3.jpg" alt="user" class="img-circle"> <span class="profile-status away float-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">
                                                    <div class="user-img"> <img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline float-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                            <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/1.jpg" alt="user" class="profile-pic"></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted">varun@gmail.com</p><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a class="dropdown-item" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="flag-icon flag-icon-in"></i> India</a>
                                <a class="dropdown-item" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="flag-icon flag-icon-cn"></i> China</a>
                                <a class="dropdown-item" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#"><i class="flag-icon flag-icon-de"></i> Dutch</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div style="position: relative; width: 1903px; height: 70px; display: block; vertical-align: baseline; float: none;"></div>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav active">
                    <ul id="sidebarnav" class="in">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li class="active">
                            <a class="has-arrow" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="true" class="collapse in">
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index.html">Modern Dashboard</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index2.html">Awesome Dashboard</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index3.html">Classy Dashboard</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index4.html">Analytical Dashboard</a></li>
                                <li class="active"><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html" class="active">Minimal Dashboard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-calendar.html">Calendar</a></li>
                                <li>
                                    <a class="has-arrow" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false">Inbox</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-email.html">Mailbox</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-email-detail.html">Mailbox Detail</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-compose.html">Compose Mail</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-chat.html">Chat app</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-ticket.html">Support Ticket</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-contact.html">Contact / Employee</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-contact2.html">Contact Grid</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li class="three-column">
                            <a class="has-arrow" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-sweetalert.html">Sweet Alert</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-cards.html">Cards</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-user-card.html">User Cards</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-buttons.html">Buttons</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-modals.html">Modals</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-tab.html">Tab</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-notification.html">Notification</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-progressbar.html">Progressbar</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-typography.html">Typography</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-bootstrap.html">Bootstrap Ui</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-list-media.html">List Media</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-ribbons.html">Ribbons</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-grid.html">Grid</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-carousel.html">Carousel</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-nestable.html">Nestable</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-range-slider.html">Range slider</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-timeline.html">Timeline</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-date-paginator.html">Date-paginator</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-dragable-portlet.html">Dragable Portlet</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-spinner.html">Spinner</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/ui-toasts.html">Toasts</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                        <li class="two-column">
                            <a class="has-arrow" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-basic.html">Basic Forms</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-layout.html">Form Layouts</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-addons.html">Form Addons</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-material.html">Form Material</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-float-input.html">Floating Lable</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-pickers.html">Form Pickers</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-upload.html">File Upload</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-mask.html">Form Mask</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-validation.html">Form Validation</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-dropzone.html">File Dropzone</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-icheck.html">Icheck control</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-img-cropper.html">Image Cropper</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-typehead.html">Form Typehead</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-wizard.html">Form Wizard</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-xeditable.html">Xeditable Editor</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-summernote.html">Summernote Editor</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/form-tinymce.html">Tinymce Editor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-basic.html">Basic Tables</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-layout.html">Table Layouts</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-data-table.html">Data Tables</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-footable.html">Footable</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-jsgrid.html">Js Grid Table</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-responsive.html">Responsive Table</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-bootstrap.html">Bootstrap Tables</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/table-editable-table.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">EXTRA COMPONENTS</li>
                        <li class="two-column">
                            <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/starter-kit.html">Starter Kit</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-profile.html">Profile page</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-animation.html">Animation</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-invoice.html">Invoice</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-treeview.html">Treeview</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-utility-classes.html">Helper Classes</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-search-result.html">Search result</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-scroll.html">Scrollbar</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-pricing.html">Pricing</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-lightbox-popup.html">Lighbox popup</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-gallery.html">Gallery</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-faq.html">Faqs</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-error-400.html">400</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-error-403.html">403</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-error-404.html">404</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-error-500.html">500</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-error-503.html">503</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-login.html">Login 1</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-login-2.html">Login 2</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-register.html">Register</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-register2.html">Register 2</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-lockscreen.html">Lockscreen</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/pages-recover-password.html">Recover password</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Extra</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false">Widgets</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/widget-apps.html">Widget Apps</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/widget-data.html">Widget Data</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/widget-charts.html">Widget Charts</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false">Maps</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/map-google.html">Google Maps</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/map-vector.html">Vector Maps</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false">Icons</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/icon-material.html">Material Icons</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/icon-fontawesome.html">Fontawesome Icons</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/icon-themify.html">Themify Icons</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/icon-linea.html">Linea Icons</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/icon-weather.html">Weather Icons</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/icon-simple-lineicon.html">Simple Lineicons</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/icon-flag.html">Flag Icons</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false">Charts</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-morris.html">Morris Chart</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-chartist.html">Chartis Chart</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-echart.html">Echarts</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-flot.html">Flot Chart</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-knob.html">Knob Chart</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-chart-js.html">Chartjs</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-sparkline.html">Sparkline Chart</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-extra-chart.html">Extra chart</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/chart-peity.html">Peity Charts</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">item 1.1</a></li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">item 1.2</a></li>
                                <li>
                                    <a class="has-arrow" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">item 1.3.1</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">item 1.3.2</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">item 1.3.3</a></li>
                                        <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">item 1.4</a></li>
                            </ul>
                        </li>
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
        <div class="page-wrapper" style="min-height: 859px;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i class="ti-settings text-white"></i></button>
                        <button class="btn float-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                        <div class="dropdown float-right mr-2 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2019 </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">February 2019</a> <a class="dropdown-item" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">March 2019</a> <a class="dropdown-item" href="https://wrappixel.com/demos/admin-templates/monster-admin/horizontal/index5.html#">April 2019</a> </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-inline float-right">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle mr-1 text-success"></i>2016</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle mr-1 text-info"></i>2019</h6>
                                    </li>
                                </ul>
                                <h4 class="card-title">Total Revenue</h4>
                                <div class="clear"></div>
                                <div class="total-revenue" style="height: 240px;">
                                    <div class="chartist-tooltip" style="top: 256px; left: 311.5px;"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                        <g class="ct-grids">
                                            <line x1="30" x2="30" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="138" x2="138" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="246" x2="246" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="354" x2="354" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="462" x2="462" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="570" x2="570" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line y1="205" y2="205" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="157.5" y2="157.5" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="110" y2="110" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="62.5" y2="62.5" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="15" y2="15" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                        </g>
                                        <g>
                                            <g class="ct-series ct-series-a">
                                                <path d="M30,62.5C66,94.167,102,157.5,138,157.5C174,157.5,210,86.25,246,86.25C282,86.25,318,181.25,354,181.25C390,181.25,426,62.5,462,62.5C498,62.5,534,94.167,570,110" class="ct-line"></path>
                                                <line x1="30" y1="62.5" x2="30.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="138" y1="157.5" x2="138.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="246" y1="86.25" x2="246.01" y2="86.25" class="ct-point" ct:value="3.5"></line>
                                                <line x1="354" y1="181.25" x2="354.01" y2="181.25" class="ct-point" ct:value="1.5"></line>
                                                <line x1="462" y1="62.5" x2="462.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="570" y1="110" x2="570.01" y2="110" class="ct-point" ct:value="3"></line>
                                            </g>
                                            <g class="ct-series ct-series-b">
                                                <path d="M30,157.5C66,125.833,102,62.5,138,62.5C174,62.5,210,157.5,246,157.5C282,157.5,318,62.5,354,62.5C390,62.5,426,157.5,462,157.5C498,157.5,534,94.167,570,62.5" class="ct-line"></path>
                                                <line x1="30" y1="157.5" x2="30.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="138" y1="62.5" x2="138.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="246" y1="157.5" x2="246.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="354" y1="62.5" x2="354.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="462" y1="157.5" x2="462.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="570" y1="62.5" x2="570.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                            </g>
                                        </g>
                                        <g class="ct-labels">
                                            <foreignobject style="overflow: visible;" x="30" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">0</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="138" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">4</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="246" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">8</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="354" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">12</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="462" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">16</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="570" y="210" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">20</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="157.5" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">1k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="110" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">2k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="62.5" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">3k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="15" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">4k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="-15" x="10" height="30" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 10px;">5k</span></foreignobject>
                                        </g>
                                    </svg><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                        <g class="ct-grids">
                                            <line x1="30" x2="30" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="138" x2="138" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="246" x2="246" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="354" x2="354" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="462" x2="462" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line x1="570" x2="570" y1="15" y2="205" class="ct-grid ct-horizontal"></line>
                                            <line y1="205" y2="205" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="157.5" y2="157.5" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="110" y2="110" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="62.5" y2="62.5" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="15" y2="15" x1="30" x2="570" class="ct-grid ct-vertical"></line>
                                        </g>
                                        <g>
                                            <g class="ct-series ct-series-a">
                                                <path d="M30,62.5C66,94.167,102,157.5,138,157.5C174,157.5,210,86.25,246,86.25C282,86.25,318,181.25,354,181.25C390,181.25,426,62.5,462,62.5C498,62.5,534,94.167,570,110" class="ct-line"></path>
                                                <line x1="30" y1="62.5" x2="30.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="138" y1="157.5" x2="138.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="246" y1="86.25" x2="246.01" y2="86.25" class="ct-point" ct:value="3.5"></line>
                                                <line x1="354" y1="181.25" x2="354.01" y2="181.25" class="ct-point" ct:value="1.5"></line>
                                                <line x1="462" y1="62.5" x2="462.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="570" y1="110" x2="570.01" y2="110" class="ct-point" ct:value="3"></line>
                                            </g>
                                            <g class="ct-series ct-series-b">
                                                <path d="M30,157.5C66,125.833,102,62.5,138,62.5C174,62.5,210,157.5,246,157.5C282,157.5,318,62.5,354,62.5C390,62.5,426,157.5,462,157.5C498,157.5,534,94.167,570,62.5" class="ct-line"></path>
                                                <line x1="30" y1="157.5" x2="30.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="138" y1="62.5" x2="138.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="246" y1="157.5" x2="246.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="354" y1="62.5" x2="354.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                                <line x1="462" y1="157.5" x2="462.01" y2="157.5" class="ct-point" ct:value="2"></line>
                                                <line x1="570" y1="62.5" x2="570.01" y2="62.5" class="ct-point" ct:value="4"></line>
                                            </g>
                                        </g>
                                        <g class="ct-labels">
                                            <foreignobject style="overflow: visible;" x="30" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">0</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="138" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">4</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="246" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">8</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="354" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">12</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="462" y="210" width="108" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 108px; height: 20px;">16</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="570" y="210" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">20</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="157.5" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">1k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="110" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">2k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="62.5" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">3k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="15" x="10" height="47.5" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 48px; width: 10px;">4k</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="-15" x="10" height="30" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 10px;">5k</span></foreignobject>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-6">
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-6">
                                <div class="card card-body">
                                    <!-- Row -->
                                    <div class="row pt-2 pb-2">
                                        <!-- Column -->
                                        <div class="col pr-0">
                                            <h1 class="font-light">86</h1>
                                            <h6 class="text-muted">New Clients</h6>
                                        </div>
                                        <!-- Column -->
                                        <div class="col text-right align-self-center">
                                            <div data-label="20%" class="css-bar mb-0 css-bar-primary css-bar-20"><i class="mdi mdi-account-circle"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-sm-6">
                                <div class="card card-body">
                                    <!-- Row -->
                                    <div class="row pt-2 pb-2">
                                        <!-- Column -->
                                        <div class="col pr-0">
                                            <h1 class="font-light">248</h1>
                                            <h6 class="text-muted">All Projects</h6>
                                        </div>
                                        <!-- Column -->
                                        <div class="col text-right align-self-center">
                                            <div data-label="30%" class="css-bar mb-0 css-bar-danger css-bar-20"><i class="mdi mdi-briefcase-check"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-sm-6">
                                <div class="card card-body">
                                    <!-- Row -->
                                    <div class="row pt-2 pb-2">
                                        <!-- Column -->
                                        <div class="col pr-0">
                                            <h1 class="font-light">352</h1>
                                            <h6 class="text-muted">New Items</h6>
                                        </div>
                                        <!-- Column -->
                                        <div class="col text-right align-self-center">
                                            <div data-label="40%" class="css-bar mb-0 css-bar-warning css-bar-40"><i class="mdi mdi-star-circle"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-sm-6">
                                <div class="card card-body">
                                    <!-- Row -->
                                    <div class="row pt-2 pb-2">
                                        <!-- Column -->
                                        <div class="col pr-0">
                                            <h1 class="font-light">159</h1>
                                            <h6 class="text-muted">Invoices</h6>
                                        </div>
                                        <!-- Column -->
                                        <div class="col text-right align-self-center">
                                            <div data-label="60%" class="css-bar mb-0 css-bar-info css-bar-60"><i class="mdi mdi-receipt"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Sales of the Month</h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Row -->
                                <div class="row mt-4">
                                    <div class="col-md-7">
                                        <div id="sales-donute" style="width: 100%; height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0); cursor: default;" _echarts_instance_="1557965829366">
                                            <div style="position: relative; overflow: hidden; width: 329px; height: 300px;">
                                                <div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 329px; height: 300px; user-select: none;"></div><canvas width="329" height="300" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 329px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="329" height="300" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 329px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                                            </div>
                                        </div>
                                        <div class="round-overlap"><i class="mdi mdi-cart"></i></div>
                                    </div>
                                    <div class="col-md-5 align-self-center">
                                        <h1 class="mb-0">65<small>%</small></h1>
                                        <h6 class="text-muted">160 Sales January</h6>
                                        <ul class="list-icons mt-4">
                                            <li><i class="fa fa-circle text-purple"></i> Organic Sales</li>
                                            <li><i class="fa fa-circle text-success"></i> Search Engine</li>
                                            <li><i class="fa fa-circle text-info"></i> Marketing</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-inline float-right">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle mr-1 text-success"></i>Net</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle mr-1 text-info"></i>Growth</h6>
                                    </li>
                                </ul>
                                <h4 class="card-title">Income of the Year</h4>
                                <div class="income-year" style="height: 327px;">
                                    <div class="chartist-tooltip" style="top: 94px; left: 47.5px;"><span class="chartist-tooltip-value">5</span></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                                        <g class="ct-grids">
                                            <line x1="50" x2="50" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="124.28571428571429" x2="124.28571428571429" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="198.57142857142858" x2="198.57142857142858" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="272.8571428571429" x2="272.8571428571429" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="347.14285714285717" x2="347.14285714285717" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="421.42857142857144" x2="421.42857142857144" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="495.7142857142858" x2="495.7142857142858" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line y1="292" y2="292" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="236.6" y2="236.6" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="181.2" y2="181.2" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="125.80000000000001" y2="125.80000000000001" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="70.4" y2="70.4" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="15" y2="15" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                        </g>
                                        <g>
                                            <g class="ct-series ct-series-a">
                                                <line x1="79.64285714285714" x2="79.64285714285714" y1="292" y2="181.2" class="ct-bar" ct:value="5"></line>
                                                <line x1="153.92857142857144" x2="153.92857142857144" y1="292" y2="203.36" class="ct-bar" ct:value="4"></line>
                                                <line x1="228.21428571428572" x2="228.21428571428572" y1="292" y2="225.51999999999998" class="ct-bar" ct:value="3"></line>
                                                <line x1="302.50000000000006" x2="302.50000000000006" y1="292" y2="136.88" class="ct-bar" ct:value="7"></line>
                                                <line x1="376.78571428571433" x2="376.78571428571433" y1="292" y2="181.2" class="ct-bar" ct:value="5"></line>
                                                <line x1="451.0714285714286" x2="451.0714285714286" y1="292" y2="70.4" class="ct-bar" ct:value="10"></line>
                                                <line x1="525.3571428571429" x2="525.3571428571429" y1="292" y2="225.51999999999998" class="ct-bar" ct:value="3"></line>
                                            </g>
                                            <g class="ct-series ct-series-b">
                                                <line x1="94.64285714285714" x2="94.64285714285714" y1="292" y2="225.51999999999998" class="ct-bar" ct:value="3"></line>
                                                <line x1="168.92857142857144" x2="168.92857142857144" y1="292" y2="247.68" class="ct-bar" ct:value="2"></line>
                                                <line x1="243.21428571428572" x2="243.21428571428572" y1="292" y2="92.56" class="ct-bar" ct:value="9"></line>
                                                <line x1="317.50000000000006" x2="317.50000000000006" y1="292" y2="181.2" class="ct-bar" ct:value="5"></line>
                                                <line x1="391.78571428571433" x2="391.78571428571433" y1="292" y2="203.36" class="ct-bar" ct:value="4"></line>
                                                <line x1="466.0714285714286" x2="466.0714285714286" y1="292" y2="159.04" class="ct-bar" ct:value="6"></line>
                                                <line x1="540.3571428571429" x2="540.3571428571429" y1="292" y2="203.36" class="ct-bar" ct:value="4"></line>
                                            </g>
                                        </g>
                                        <g class="ct-labels">
                                            <foreignobject style="overflow: visible;" x="50" y="297" width="74.28571428571429" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Jan</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="124.28571428571429" y="297" width="74.28571428571429" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Feb</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="198.57142857142858" y="297" width="74.2857142857143" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Mar</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="272.8571428571429" y="297" width="74.28571428571428" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Apr</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="347.14285714285717" y="297" width="74.28571428571428" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">May</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="421.42857142857144" y="297" width="74.28571428571433" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Jun</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="495.7142857142858" y="297" width="74.28571428571422" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Jul</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="236.6" x="10" height="55.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">0</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="181.2" x="10" height="55.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">2.5</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="125.8" x="10" height="55.39999999999999" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">5</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="70.4" x="10" height="55.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">7.5</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="15" x="10" height="55.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">10</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">12.5</span></foreignobject>
                                        </g>
                                    </svg><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                                        <g class="ct-grids">
                                            <line x1="50" x2="50" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="124.28571428571429" x2="124.28571428571429" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="198.57142857142858" x2="198.57142857142858" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="272.8571428571429" x2="272.8571428571429" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="347.14285714285717" x2="347.14285714285717" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="421.42857142857144" x2="421.42857142857144" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line x1="495.7142857142858" x2="495.7142857142858" y1="15" y2="292" class="ct-grid ct-horizontal"></line>
                                            <line y1="292" y2="292" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="236.6" y2="236.6" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="181.2" y2="181.2" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="125.80000000000001" y2="125.80000000000001" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="70.4" y2="70.4" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                            <line y1="15" y2="15" x1="50" x2="570" class="ct-grid ct-vertical"></line>
                                        </g>
                                        <g>
                                            <g class="ct-series ct-series-a">
                                                <line x1="79.64285714285714" x2="79.64285714285714" y1="292" y2="181.2" class="ct-bar" ct:value="5"></line>
                                                <line x1="153.92857142857144" x2="153.92857142857144" y1="292" y2="203.36" class="ct-bar" ct:value="4"></line>
                                                <line x1="228.21428571428572" x2="228.21428571428572" y1="292" y2="225.51999999999998" class="ct-bar" ct:value="3"></line>
                                                <line x1="302.50000000000006" x2="302.50000000000006" y1="292" y2="136.88" class="ct-bar" ct:value="7"></line>
                                                <line x1="376.78571428571433" x2="376.78571428571433" y1="292" y2="181.2" class="ct-bar" ct:value="5"></line>
                                                <line x1="451.0714285714286" x2="451.0714285714286" y1="292" y2="70.4" class="ct-bar" ct:value="10"></line>
                                                <line x1="525.3571428571429" x2="525.3571428571429" y1="292" y2="225.51999999999998" class="ct-bar" ct:value="3"></line>
                                            </g>
                                            <g class="ct-series ct-series-b">
                                                <line x1="94.64285714285714" x2="94.64285714285714" y1="292" y2="225.51999999999998" class="ct-bar" ct:value="3"></line>
                                                <line x1="168.92857142857144" x2="168.92857142857144" y1="292" y2="247.68" class="ct-bar" ct:value="2"></line>
                                                <line x1="243.21428571428572" x2="243.21428571428572" y1="292" y2="92.56" class="ct-bar" ct:value="9"></line>
                                                <line x1="317.50000000000006" x2="317.50000000000006" y1="292" y2="181.2" class="ct-bar" ct:value="5"></line>
                                                <line x1="391.78571428571433" x2="391.78571428571433" y1="292" y2="203.36" class="ct-bar" ct:value="4"></line>
                                                <line x1="466.0714285714286" x2="466.0714285714286" y1="292" y2="159.04" class="ct-bar" ct:value="6"></line>
                                                <line x1="540.3571428571429" x2="540.3571428571429" y1="292" y2="203.36" class="ct-bar" ct:value="4"></line>
                                            </g>
                                        </g>
                                        <g class="ct-labels">
                                            <foreignobject style="overflow: visible;" x="50" y="297" width="74.28571428571429" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Jan</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="124.28571428571429" y="297" width="74.28571428571429" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Feb</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="198.57142857142858" y="297" width="74.2857142857143" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Mar</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="272.8571428571429" y="297" width="74.28571428571428" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Apr</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="347.14285714285717" y="297" width="74.28571428571428" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">May</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="421.42857142857144" y="297" width="74.28571428571433" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Jun</span></foreignobject>
                                            <foreignobject style="overflow: visible;" x="495.7142857142858" y="297" width="74.28571428571422" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 74px; height: 20px;">Jul</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="236.6" x="10" height="55.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">0</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="181.2" x="10" height="55.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">2.5</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="125.8" x="10" height="55.39999999999999" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">5</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="70.4" x="10" height="55.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">7.5</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="15" x="10" height="55.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 55px; width: 30px;">10</span></foreignobject>
                                            <foreignobject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">12.5</span></foreignobject>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Projects of the Month</h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-4">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Assigned</th>
                                                <th>Name</th>
                                                <th>Priority</th>
                                                <th>Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td><span class="label label-light-success">Low</span></td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/2.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small>
                                                </td>
                                                <td>Real Homes</td>
                                                <td><span class="label label-light-info">Medium</span></td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">B</span></td>
                                                <td>
                                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small>
                                                </td>
                                                <td>MedicalPro Theme</td>
                                                <td><span class="label label-light-danger">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">N</span></td>
                                                <td>
                                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td><span class="label label-light-success">Low</span></td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">M</span></td>
                                                <td>
                                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small>
                                                </td>
                                                <td>Helping Hands</td>
                                                <td><span class="label label-light-danger">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-danger">N</span></td>
                                                <td>
                                                    <h6>Johnathan</h6><small class="text-muted">Graphic</small>
                                                </td>
                                                <td>Digital Agency</td>
                                                <td><span class="label label-light-danger">High</span></td>
                                                <td>$2.6K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Weather Report</h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">Today</option>
                                            <option value="1">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-row mt-4">
                                    <div class="p-2 display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                                    <div class="p-2">
                                        <h3 class="mb-0">Saturday</h3><small>Ahmedabad, India</small>
                                    </div>
                                </div>
                                <table class="table no-border">
                                    <tbody>
                                        <tr>
                                            <td>Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td>Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td>Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        <tr>
                                            <td>Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                        <tr>
                                            <td>Ceiling</td>
                                            <td class="font-medium">25760 ft</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <ul class="list-unstyled row text-center city-weather-days">
                                    <li class="col"><i class="wi wi-day-sunny"></i><span>09:30</span>
                                        <h3>70<sup>°</sup></h3>
                                    </li>
                                    <li class="col"><i class="wi wi-day-cloudy"></i><span>11:30</span>
                                        <h3>72<sup>°</sup></h3>
                                    </li>
                                    <li class="col"><i class="wi wi-day-hail"></i><span>13:30</span>
                                        <h3>75<sup>°</sup></h3>
                                    </li>
                                    <li class="col"><i class="wi wi-day-sprinkle"></i><span>15:30</span>
                                        <h3>76<sup>°</sup></h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/1.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-info">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row active">
                                    <div class="p-2"><span class="round"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/2.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text active w-100">
                                        <h5>Michael Jorden</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-success">Approved</span>
                                            <span class="action-icons active">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/3.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>Johnathan Doeting</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-danger">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/4.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-info">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <button class="float-right btn btn-sm btn-rounded btn-success" data-toggle="modal" data-target="#myModal">Add Task</button>
                                <h4 class="card-title">To Do list</h4>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget mt-3">
                                    <!-- .modal for add task -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Task</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Task name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Task Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Assign to</label>
                                                            <select class="custom-select form-control float-right">
                                                                <option selected="">Sachin</option>
                                                                <option value="1">Sehwag</option>
                                                                <option value="2">Pritam</option>
                                                                <option value="3">Alia</option>
                                                                <option value="4">Varun</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                                <label for="inputSchedule" class=""> <span>Schedule meeting with</span> </label>
                                            </div>
                                            <ul class="assignedto">
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                                <label for="inputCall" class=""> <span>Give Purchase report to</span> <span class="label label-light-danger">Today</span> </label>
                                            </div>
                                            <ul class="assignedto">
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                                <label for="inputBook" class=""> <span>Book flight for holiday</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                                <label for="inputForward" class=""> <span>Forward all tasks</span> <span class="label label-light-warning">2 weeks</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                                <label for="inputRecieve" class=""> <span>Recieve shipment</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputpayment" name="inputCheckboxespayment">
                                                <label for="inputpayment" class=""> <span>Send payment today</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                                <label for="inputForward2" class=""> <span>Important tasks</span> <span class="label label-light-success">2 weeks</span> </label>
                                            </div>
                                            <ul class="assignedto">
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Steave"></li>
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Jessica"></li>
                                                <li><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Selina"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
                        <div class="slimscrollright" style="overflow: hidden; width: auto; height: 100%;">
                            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                            <div class="r-panel-body">
                                <ul id="themecolors" class="mt-3">
                                    <li><b>With Light sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                    <li class="d-block mt-4"><b>With Dark sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                                </ul>
                                <ul class="mt-3 chatonline">
                                    <li><b>Chat option</b></li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="file:///C:/xampp/htdocs/vertical%20monster/Monster%20Admin%20Template%20-%20The%20Most%20Complete%20&amp;%20Trusted%20Bootstrap%204%20Admin%20Template_files/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                        <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Monster Admin by wrappixel.com
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
    <!-- ============================================================== -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?= base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Chart JS -->
    <script src="<?= base_url(); ?>assets/plugins/echarts/echarts-all.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?= base_url(); ?>assets/js/dashboard1.js"></script>
    <script src="<?= base_url(); ?>assets/js/toastr.js"></script>
    <script>
        $.toast({
            heading: 'Welcome to Monster admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3000,
            stack: 6
        });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


</body>

</html>