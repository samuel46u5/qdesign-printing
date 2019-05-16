<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.png">

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="<?= base_url(); ?>lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.dashboard.css">


</head>

<body class="page-profile">

    <header class="navbar navbar-header navbar-header-fixed">

        <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
        <div class="navbar-brand">
            <a href="<?= base_url(); ?>index.html" class="df-logo">dash<span>forge</span></a>
        </div><!-- navbar-brand -->
        <div id="navbarMenu" class="navbar-menu-wrapper">
            <div class="navbar-menu-header">
                <a href="<?= base_url(); ?>index.html" class="df-logo">dash<span>forge</span></a>
                <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
            </div><!-- navbar-menu-header -->
            <ul class="nav navbar-menu">
                <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
                <li class="nav-item with-sub active">
                    <a href="" class="nav-link"><i data-feather="pie-chart"></i> Produk</a>
                    <ul class="navbar-menu-sub">
                        <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Spanduk/Banner</a></li>
                        <li class="nav-sub-item"><a href="dashboard-two.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Sticker</a></li>
                        <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Cetakan Kain</a></li>
                        <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Cetakan Kertas</a></li>
                        <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Kaos</a></li>
                        <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Creative Produk</a></li>
                    </ul>
                </li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="package"></i> Mesin</a>
                    <ul class="navbar-menu-sub">
                        <li class="nav-sub-item"><a href="app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>UV Printing</a></li>
                        <li class="nav-sub-item"><a href="app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>Printing Outdoor</a></li>
                        <li class="nav-sub-item"><a href="app-chat.html" class="nav-sub-link"><i data-feather="message-square"></i>Printing Indoor</a></li>
                        <li class="nav-sub-item"><a href="app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Direct Printing Textile</a></li>
                        <li class="nav-sub-item"><a href="app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>Printing Sublim</a></li>
                        <li class="nav-sub-item"><a href="app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>Laser Acrylic</a></li>
                        <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Laser A3+</a></li>
                        <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mesin Finsihing</a></li>
                    </ul>
                </li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="layers"></i> Pages</a>
                    <div class="navbar-menu-sub">
                        <div class="d-lg-flex">
                            <ul>
                                <li class="nav-label">Authentication</li>
                                <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link"><i data-feather="log-in"></i> Sign In</a></li>
                                <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link"><i data-feather="user-plus"></i> Sign Up</a></li>
                                <li class="nav-sub-item"><a href="page-verify.html" class="nav-sub-link"><i data-feather="user-check"></i> Verify Account</a></li>
                                <li class="nav-sub-item"><a href="page-forgot.html" class="nav-sub-link"><i data-feather="shield-off"></i> Forgot Password</a></li>
                                <li class="nav-label mg-t-20">User Pages</li>
                                <li class="nav-sub-item"><a href="page-profile-view.html" class="nav-sub-link"><i data-feather="user"></i> View Profile</a></li>
                                <li class="nav-sub-item"><a href="page-connections.html" class="nav-sub-link"><i data-feather="users"></i> Connections</a></li>
                                <li class="nav-sub-item"><a href="page-groups.html" class="nav-sub-link"><i data-feather="users"></i> Groups</a></li>
                                <li class="nav-sub-item"><a href="page-events.html" class="nav-sub-link"><i data-feather="calendar"></i> Events</a></li>
                            </ul>
                            <ul>
                                <li class="nav-label">Error Pages</li>
                                <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link"><i data-feather="file"></i> 404 Page Not Found</a></li>
                                <li class="nav-sub-item"><a href="page-500.html" class="nav-sub-link"><i data-feather="file"></i> 500 Internal Server</a></li>
                                <li class="nav-sub-item"><a href="page-503.html" class="nav-sub-link"><i data-feather="file"></i> 503 Service Unavailable</a></li>
                                <li class="nav-sub-item"><a href="page-505.html" class="nav-sub-link"><i data-feather="file"></i> 505 Forbidden</a></li>
                                <li class="nav-label mg-t-20">Other Pages</li>
                                <li class="nav-sub-item"><a href="page-timeline.html" class="nav-sub-link"><i data-feather="file-text"></i> Timeline</a></li>
                                <li class="nav-sub-item"><a href="page-pricing.html" class="nav-sub-link"><i data-feather="file-text"></i> Pricing</a></li>
                                <li class="nav-sub-item"><a href="page-help-center.html" class="nav-sub-link"><i data-feather="file-text"></i> Help Center</a></li>
                                <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link"><i data-feather="file-text"></i> Invoice</a></li>
                            </ul>
                        </div>
                    </div><!-- nav-sub -->
                </li>
                <li class="nav-item"><a href="<?= base_url(); ?>components/" class="nav-link"><i data-feather="box"></i> Components</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>collections/" class="nav-link"><i data-feather="archive"></i> Collections</a></li>
            </ul>
        </div><!-- navbar-menu-wrapper -->
        <div class="navbar-right">
            <a id="navbarSearch" href="" class="search-link"><i data-feather="search"></i></a>
            <div class="dropdown dropdown-message">
                <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                    <i data-feather="message-square"></i>
                    <span>5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">New Messages</div>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Socrates Itumay</strong>
                                <p>nam libero tempore cum so...</p>
                                <span>Mar 15 12:32pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Joyce Chua</strong>
                                <p>on the other hand we denounce...</p>
                                <span>Mar 13 04:16am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Althea Cabardo</strong>
                                <p>is there anyone who loves...</p>
                                <span>Mar 13 02:56am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Adrian Monino</strong>
                                <p>duis aute irure dolor in repre...</p>
                                <span>Mar 12 10:40pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <div class="dropdown-footer"><a href="">View all Messages</a></div>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-notification">
                <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                    <i data-feather="bell"></i>
                    <span>2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Notifications</div>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                <span>Mar 15 12:32pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                <span>Mar 13 04:16am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                <span>Mar 13 02:56am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                                <span>Mar 12 10:40pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <div class="dropdown-footer"><a href="">View all Notifications</a></div>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-profile">
                <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                    <div class="avatar avatar-sm"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                </a><!-- dropdown-link -->
                <div class="dropdown-menu dropdown-menu-right tx-13">
                    <div class="avatar avatar-lg mg-b-15"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                    <h6 class="tx-semibold mg-b-5">Katherine Pechon</h6>
                    <p class="mg-b-25 tx-12 tx-color-03">Administrator</p>

                    <a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
                    <a href="page-profile-view.html" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="page-help-center.html" class="dropdown-item"><i data-feather="help-circle"></i> Help Center</a>
                    <a href="" class="dropdown-item"><i data-feather="life-buoy"></i> Forum</a>
                    <a href="" class="dropdown-item"><i data-feather="settings"></i>Account Settings</a>
                    <a href="" class="dropdown-item"><i data-feather="settings"></i>Privacy Settings</a>
                    <a href="page-signin.html" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </div><!-- navbar-right -->
        <div class="navbar-search">
            <div class="navbar-search-header">
                <input type="search" class="form-control" placeholder="Type and hit enter to search...">
                <button class="btn"><i data-feather="search"></i></button>
                <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
            </div><!-- navbar-search-header -->
            <div class="navbar-search-body">
                <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
                <ul class="list-unstyled">
                    <li><a href="dashboard-one.html">modern dashboard</a></li>
                    <li><a href="app-calendar.html">calendar app</a></li>
                    <li><a href="<?= base_url(); ?>collections/modal.html">modal examples</a></li>
                    <li><a href="<?= base_url(); ?>components/el-avatar.html">avatar</a></li>
                </ul>

                <hr class="mg-y-30 bd-0">

                <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>

                <ul class="list-unstyled">
                    <li><a href="dashboard-one.html">cryptocurrency</a></li>
                    <li><a href="app-calendar.html">button groups</a></li>
                    <li><a href="<?= base_url(); ?>collections/modal.html">form elements</a></li>
                    <li><a href="<?= base_url(); ?>components/el-avatar.html">contact app</a></li>
                </ul>
            </div><!-- navbar-search-body -->
        </div><!-- navbar-search -->
    </header><!-- navbar -->



    <div class="content content-fixed">
        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
                        </ol>
                    </nav>
                    <h4 class="mg-b-0 tx-spacing--1">Mesin</h4>
                </div>
                <div class="d-none d-md-block">
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail" class="wd-10 mg-r-5"></i> Email</button>
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
                    <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file" class="wd-10 mg-r-5"></i> Generate Report</button>
                </div>
            </div>

            <div class="row row-lg">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/outdoor.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Printer Outdoor</h6>
                        <div class="chart-three">
                        </div>Tampilkan Produk
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/indoor.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Printer Indoor</h6>
                        Tampilkan Produk
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/directtextile.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Direct Textile</h6>
                        Tampilkan Produk
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/laser.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Laser A3+</h6>

                        Tampilkan Produk
                    </div>
                </div><!-- col -->


            </div><!-- row -->
            <br />
            <div class="row row-lg">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/uvprinting.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">UV Printing</h6>
                        Tampilkan Produk
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/laser acrylic.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Laser Acrylic</h6>
                        Tampilkan Produk
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/sublimation.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Sublimation</h6>
                        Tampilkan Produk
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body">
                        <img src="<?= base_url(); ?>assets/img/mesin/garment.png" alt="outdoor" width="100%">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Garment</h6>
                        Tampilkan Produk
                    </div>
                </div><!-- col -->


            </div><!-- row -->
        </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
        <div>
            <span>&copy; 2019 DashForge v1.0.0. </span>
            <span>Created by <a href="http://themepixels.me">ThemePixels</a></span>
        </div>
        <div>
            <nav class="nav">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="<?= base_url(); ?>change-log.html" class="nav-link">Change Log</a>
                <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer>

    <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/feather-icons/feather.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/jquery.flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>assets/lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url(); ?>assets/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url(); ?>assets/lib/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="<?= base_url(); ?>assets/js/dashforge.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.sampledata.js"></script>

    <!-- append theme customizer -->
    <script src="<?= base_url(); ?>assets/lib/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.settings.js"></script>

    <script>
        $(function() {
            'use strict'

            var plot = $.plot('#flotChart', [{
                data: df3,
                color: '#69b2f8'
            }, {
                data: df1,
                color: '#d1e6fa'
            }, {
                data: df2,
                color: '#d1e6fa',
                lines: {
                    fill: false,
                    lineWidth: 1.5
                }
            }], {
                series: {
                    stack: 0,
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 0,
                        fill: 1
                    }
                },
                grid: {
                    borderWidth: 0,
                    aboveData: true
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 350
                },
                xaxis: {
                    show: true,
                    ticks: [
                        [0, ''],
                        [8, 'Jan'],
                        [20, 'Feb'],
                        [32, 'Mar'],
                        [44, 'Apr'],
                        [56, 'May'],
                        [68, 'Jun'],
                        [80, 'Jul'],
                        [92, 'Aug'],
                        [104, 'Sep'],
                        [116, 'Oct'],
                        [128, 'Nov'],
                        [140, 'Dec']
                    ],
                    color: 'rgba(255,255,255,.2)'
                }
            });


            $.plot('#flotChart2', [{
                data: [
                    [0, 55],
                    [1, 38],
                    [2, 20],
                    [3, 70],
                    [4, 50],
                    [5, 15],
                    [6, 30],
                    [7, 50],
                    [8, 40],
                    [9, 55],
                    [10, 60],
                    [11, 40],
                    [12, 32],
                    [13, 17],
                    [14, 28],
                    [15, 36],
                    [16, 53],
                    [17, 66],
                    [18, 58],
                    [19, 46]
                ],
                color: '#69b2f8'
            }, {
                data: [
                    [0, 80],
                    [1, 80],
                    [2, 80],
                    [3, 80],
                    [4, 80],
                    [5, 80],
                    [6, 80],
                    [7, 80],
                    [8, 80],
                    [9, 80],
                    [10, 80],
                    [11, 80],
                    [12, 80],
                    [13, 80],
                    [14, 80],
                    [15, 80],
                    [16, 80],
                    [17, 80],
                    [18, 80],
                    [19, 80]
                ],
                color: '#f0f1f5'
            }], {
                series: {
                    stack: 0,
                    bars: {
                        show: true,
                        lineWidth: 0,
                        barWidth: .5,
                        fill: 1
                    }
                },
                grid: {
                    borderWidth: 0,
                    borderColor: '#edeff6'
                },
                yaxis: {
                    show: false,
                    max: 80
                },
                xaxis: {
                    ticks: [
                        [0, 'Jan'],
                        [4, 'Feb'],
                        [8, 'Mar'],
                        [12, 'Apr'],
                        [16, 'May'],
                        [19, 'Jun']
                    ],
                    color: '#fff',
                }
            });

            $.plot('#flotChart3', [{
                data: df4,
                color: '#9db2c6'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0
                            }, {
                                opacity: .5
                            }]
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 60
                },
                xaxis: {
                    show: false
                }
            });

            $.plot('#flotChart4', [{
                data: df5,
                color: '#9db2c6'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0
                            }, {
                                opacity: .5
                            }]
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 80
                },
                xaxis: {
                    show: false
                }
            });

            $.plot('#flotChart5', [{
                data: df6,
                color: '#9db2c6'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0
                            }, {
                                opacity: .5
                            }]
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 80
                },
                xaxis: {
                    show: false
                }
            });

            $.plot('#flotChart6', [{
                data: df4,
                color: '#9db2c6'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0
                            }, {
                                opacity: .5
                            }]
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 60
                },
                xaxis: {
                    show: false
                }
            });

            $('#vmap').vectorMap({
                map: 'usa_en',
                showTooltip: true,
                backgroundColor: '#fff',
                color: '#d1e6fa',
                colors: {
                    fl: '#69b2f8',
                    ca: '#69b2f8',
                    tx: '#69b2f8',
                    wy: '#69b2f8',
                    ny: '#69b2f8'
                },
                selectedColor: '#00cccc',
                enableZoom: false,
                borderWidth: 1,
                borderColor: '#fff',
                hoverOpacity: .85
            });


            var ctxLabel = ['6am', '10am', '1pm', '4pm', '7pm', '10pm'];
            var ctxData1 = [20, 60, 50, 45, 50, 60];
            var ctxData2 = [10, 40, 30, 40, 55, 25];

            // Bar chart
            var ctx1 = document.getElementById('chartBar1').getContext('2d');
            new Chart(ctx1, {
                type: 'horizontalBar',
                data: {
                    labels: ctxLabel,
                    datasets: [{
                        data: ctxData1,
                        backgroundColor: '#69b2f8'
                    }, {
                        data: ctxData2,
                        backgroundColor: '#d1e6fa'
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                display: false,
                                beginAtZero: true,
                                fontSize: 10,
                                fontColor: '#182b49'
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                display: true,
                                color: '#eceef4'
                            },
                            barPercentage: 0.6,
                            ticks: {
                                beginAtZero: true,
                                fontSize: 10,
                                fontColor: '#8392a5',
                                max: 80
                            }
                        }]
                    }
                }
            });

        })
    </script>
</body>

</html>