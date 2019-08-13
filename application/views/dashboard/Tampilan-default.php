<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- vendor css -->
    <link href="<?= base_url(); ?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.demo.css">

</head>

<body data-spy="scroll" data-target="#navSection" data-offset="120">

    <header class="navbar navbar-header navbar-header-fixed">
        <a href="" id="sidebarMenuOpen" class="burger-menu"><i data-feather="arrow-left"></i></a>
        <div class="navbar-brand">
            <a href="../index.html" class="df-logo">dash<span>forge</span></a>
        </div><!-- navbar-brand -->
        <div id="navbarMenu" class="navbar-menu-wrapper">
            <div class="navbar-menu-header">
                <a href="../index.html" class="df-logo">dash<span>forge</span></a>
                <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
            </div><!-- navbar-menu-header -->
            <ul class="nav navbar-menu">
                <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="pie-chart"></i> Dashboard</a>
                    <ul class="navbar-menu-sub">
                        <li class="nav-sub-item"><a href="../template/classic/dashboard-one.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Sales Monitoring</a></li>
                        <li class="nav-sub-item"><a href="../template/classic/dashboard-two.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Website Analytics</a></li>
                        <li class="nav-sub-item"><a href="../template/classic/dashboard-three.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Cryptocurrency</a></li>
                        <li class="nav-sub-item"><a href="../template/classic/dashboard-four.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Helpdesk Management</a></li>
                    </ul>
                </li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="package"></i> Apps</a>
                    <ul class="navbar-menu-sub">
                        <li class="nav-sub-item"><a href="../template/classic/app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>
                        <li class="nav-sub-item"><a href="../template/classic/app-chat.html" class="nav-sub-link"><i data-feather="message-square"></i>Chat</a></li>
                        <li class="nav-sub-item"><a href="../template/classic/app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li>
                        <li class="nav-sub-item"><a href="../template/classic/app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li>
                        <li class="nav-sub-item"><a href="../template/classic/app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li>
                    </ul>
                </li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="layers"></i> Pages</a>
                    <div class="navbar-menu-sub">
                        <div class="d-lg-flex">
                            <ul>
                                <li class="nav-label">Authentication</li>
                                <li class="nav-sub-item"><a href="../template/classic/page-signin.html" class="nav-sub-link"><i data-feather="log-in"></i> Sign In</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-signup.html" class="nav-sub-link"><i data-feather="user-plus"></i> Sign Up</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-verify.html" class="nav-sub-link"><i data-feather="user-check"></i> Verify Account</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-forgot.html" class="nav-sub-link"><i data-feather="shield-off"></i> Forgot Password</a></li>
                                <li class="nav-label mg-t-20">User Pages</li>
                                <li class="nav-sub-item"><a href="../template/classic/page-profile-view.html" class="nav-sub-link"><i data-feather="user"></i> View Profile</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-connections.html" class="nav-sub-link"><i data-feather="users"></i> Connections</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-groups.html" class="nav-sub-link"><i data-feather="users"></i> Groups</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-events.html" class="nav-sub-link"><i data-feather="calendar"></i> Events</a></li>
                            </ul>
                            <ul>
                                <li class="nav-label">Error Pages</li>
                                <li class="nav-sub-item"><a href="../template/classic/page-404.html" class="nav-sub-link"><i data-feather="file"></i> 404 Page Not Found</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-500.html" class="nav-sub-link"><i data-feather="file"></i> 500 Internal Server</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-503.html" class="nav-sub-link"><i data-feather="file"></i> 503 Service Unavailable</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-505.html" class="nav-sub-link"><i data-feather="file"></i> 505 Forbidden</a></li>
                                <li class="nav-label mg-t-20">Other Pages</li>
                                <li class="nav-sub-item"><a href="../template/classic/page-timeline.html" class="nav-sub-link"><i data-feather="file-text"></i> Timeline</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-pricing.html" class="nav-sub-link"><i data-feather="file-text"></i> Pricing</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-help-center.html" class="nav-sub-link"><i data-feather="file-text"></i> Help Center</a></li>
                                <li class="nav-sub-item"><a href="../template/classic/page-invoice.html" class="nav-sub-link"><i data-feather="file-text"></i> Invoice</a></li>
                            </ul>
                        </div>
                    </div><!-- nav-sub -->
                </li>
                <li class="nav-item active"><a href="index.html" class="nav-link"><i data-feather="box"></i> Components</a></li>
                <li class="nav-item"><a href="../collections/" class="nav-link"><i data-feather="archive"></i> Collections</a></li>
            </ul>
        </div><!-- navbar-menu-wrapper -->
        <div class="navbar-right">
            <a href="http://dribbble.com/themepixels" class="btn btn-social"><i class="fab fa-dribbble"></i></a>
            <a href="https://github.com/themepixels" class="btn btn-social"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/themepixels" class="btn btn-social"><i class="fab fa-twitter"></i></a>
            <a href="https://themeforest.net/item/azia-responsive-bootstrap-4-dashboard-template/22983790" class="btn btn-buy"><i data-feather="shopping-bag"></i> <span>Buy Now</span></a>
        </div><!-- navbar-right -->
    </header><!-- navbar -->

    <aside class="aside aside-fixed">
        <div class="aside-header">
            <a href="../../index.html" class="aside-logo">dash<span>forge</span></a>
            <a href="" class="aside-menu-link">
                <i data-feather="menu"></i>
                <i data-feather="x"></i>
            </a>
        </div>
        <div class="aside-body">
            <div class="aside-loggedin">
                <div class="d-flex align-items-center justify-content-start">
                    <a href="" class="avatar"><img src="http://localhost/qdesign-printing/assets/img/profile-pic/logo_Qdesign.png " class="rounded-circle" alt=""></a>
                    <div class="aside-alert-link">
                        <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
                        <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
                        <a href="http://localhost/qdesign-printing/auth/logout" data-toggle="tooltip" title="Log out"><i data-feather="log-out"></i></a>
                    </div>
                </div>
                <div class="aside-loggedin-user">
                    <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
                        <h6 class="tx-semibold mg-b-0">agus pranoto </h6>
                        <i data-feather="chevron-down"></i>
                    </a>
                    <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
                </div>
                <div class="collapse" id="loggedinMenu">
                    <ul class="nav nav-aside mg-b-0">
                        <li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
                        <li class="nav-item"><a href="http://localhost/qdesign-printing/auth/logout" class="nav-link"><i data-feather="log-out"></i> <span>Log Out</span></a></li>
                    </ul>
                </div>
            </div><!-- aside-loggedin -->
            <ul class="nav nav-aside">


                <li class=" nav-item with-sub active show">
                    <a href="#" class="nav-link"><i class="fa fa-fw fa-user fa-lg"></i> <span> &nbsp; Admin</span></a>
                    <ul>
                        <!-- query submenu -->


                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/admin">Dashboard</a>
                                                         </li> -->

                        <li class="active">

                            <a href="http://localhost/qdesign-printing/admin"> <i class="fa fa-fw fa-circle fa-xs"></i>Dashboard </a>


                            <!-- <a href="JavaScript:void(0);" onclick="Dashboard()"> <i class="fa fa-fw fa-circle fa-xs"></i>Dashboard </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>

                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/admin/role">Role</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/admin/role"> <i class="fa fa-fw fa-circle fa-xs"></i>Role </a>


                            <!-- <a href="JavaScript:void(0);" onclick="Role()"> <i class="fa fa-fw fa-circle fa-xs"></i>Role </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>

                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/admin/menu">Menu</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/admin/menu"> <i class="fa fa-fw fa-circle fa-xs"></i>Menu </a>


                            <!-- <a href="JavaScript:void(0);" onclick="Menu()"> <i class="fa fa-fw fa-circle fa-xs"></i>Menu </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>

                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/admin/submenu">Sub Menu</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/admin/submenu"> <i class="fa fa-fw fa-circle fa-xs"></i>Sub Menu </a>


                            <!-- <a href="JavaScript:void(0);" onclick="SubMenu()"> <i class="fa fa-fw fa-circle fa-xs"></i>Sub Menu </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>

                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/admin/submenu_ajax">Sub Menu Ajax</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/admin/submenu_ajax"> <i class="fa fa-fw fa-circle fa-xs"></i>Sub Menu Ajax </a>


                            <!-- <a href="JavaScript:void(0);" onclick="SubMenuAjax()"> <i class="fa fa-fw fa-circle fa-xs"></i>Sub Menu Ajax </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>



                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-fw fa-address-book fa-lg"></i> <span> &nbsp; Master</span></a>
                    <ul>
                        <!-- query submenu -->


                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/master/customer">Customer</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/master/customer"> <i class="fa fa-fw fa-circle fa-xs"></i>Customer </a>


                            <!-- <a href="JavaScript:void(0);" onclick="Customer()"> <i class="fa fa-fw fa-circle fa-xs"></i>Customer </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>

                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/master/kategori_mesin">Kategori Mesin</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/master/kategori_mesin"> <i class="fa fa-fw fa-circle fa-xs"></i>Kategori Mesin </a>


                            <!-- <a href="JavaScript:void(0);" onclick="KategoriMesin()"> <i class="fa fa-fw fa-circle fa-xs"></i>Kategori Mesin </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>



                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-fw fa-newspaper fa-lg"></i> <span> &nbsp; Laporan</span></a>
                    <ul>
                        <!-- query submenu -->


                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/laporan/harian">Harian</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/laporan/harian"> <i class="fa fa-fw fa-circle fa-xs"></i>Harian </a>


                            <!-- <a href="JavaScript:void(0);" onclick="Harian()"> <i class="fa fa-fw fa-circle fa-xs"></i>Harian </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>



                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-tags fa-lg"></i> <span> &nbsp; Katalog</span></a>
                    <ul>
                        <!-- query submenu -->


                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/katalog/kategori">Kategori</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/katalog/kategori"> <i class="fa fa-fw fa-circle fa-xs"></i>Kategori </a>


                            <!-- <a href="JavaScript:void(0);" onclick="Kategori()"> <i class="fa fa-fw fa-circle fa-xs"></i>Kategori </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>

                        <!-- <li class="active">
                                                         <a href="http://localhost/qdesign-printing/katalog/produk">Produk</a>
                                                         </li> -->

                        <li>

                            <a href="http://localhost/qdesign-printing/katalog/produk"> <i class="fa fa-fw fa-circle fa-xs"></i>Produk </a>


                            <!-- <a href="JavaScript:void(0);" onclick="Produk()"> <i class="fa fa-fw fa-circle fa-xs"></i>Produk </a> -->
                            <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                        </li>



                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-archive fa-lg"></i> <span> &nbsp; Sales</span></a>
                    <ul>
                        <!-- query submenu -->




                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-street-view fa-lg"></i> <span> &nbsp; Marketing</span></a>
                    <ul>
                        <!-- query submenu -->




                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-desktop fa-lg"></i> <span> &nbsp; Design</span></a>
                    <ul>
                        <!-- query submenu -->




                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-envelope fa-lg"></i> <span> &nbsp; Kotak dan Pesan</span></a>
                    <ul>
                        <!-- query submenu -->




                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-comments fa-lg"></i> <span> &nbsp; Customer Service</span></a>
                    <ul>
                        <!-- query submenu -->




                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-cog fa-lg"></i> <span> &nbsp; Widget</span></a>
                    <ul>
                        <!-- query submenu -->




                    </ul>

                </li>


                <li class="nav-item with-sub">
                    <a href="#" class="nav-link"><i class="fa fa-microchip fa-lg"></i> <span> &nbsp; System</span></a>
                    <ul>
                        <!-- query submenu -->




                    </ul>

                </li>




            </ul>
        </div>
    </aside>



    <div class="content content-components">
        <div class="container">
            <ol class="breadcrumb df-breadcrumbs mg-b-10">
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Table Advanced</li>
            </ol>


            <hr class="mg-t-20 mg-b-20">

            <h4 id="section2" class="mg-b-10">Dashboard</h4>
            <!-- <p class="mg-b-30">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p> -->

            <div data-label="Example" class="df-example demo-table">
                <table id="example2" class="table">
                    <thead>
                        <tr>
                            <th class="wd-20p">Name</th>
                            <th class="wd-25p">Position</th>
                            <th class="wd-20p">Office</th>
                            <th class="wd-15p">Age</th>
                            <th class="wd-20p">Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>$313,500</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>$385,750</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>$198,500</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>$725,000</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>$237,500</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>$132,000</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>$217,500</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>$345,000</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>$675,000</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>$106,450</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>$85,600</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>$1,200,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>$92,575</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>$357,650</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>$206,850</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>$850,000</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>$163,000</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>$95,400</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>$114,500</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>$145,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>$235,500</td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>$324,050</td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>$85,675</td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>$164,500</td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>$109,850</td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>$452,500</td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>$136,200</td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td>$645,750</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>$234,500</td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>$163,500</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>$139,575</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>$98,540</td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>$87,500</td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>$138,575</td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>$125,250</td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>$75,650</td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>$145,600</td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>
                            <td>$356,250</td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>
                            <td>$103,500</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>$86,500</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>$112,000</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- df-example -->






        </div><!-- container -->
    </div><!-- content -->

    <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/feather-icons/feather.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/prismjs/prism.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/select2/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/dashforge.js"></script>

    <script>
        $(function() {
            'use strict'
            $('#example2').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });


            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>

</body>

</html>