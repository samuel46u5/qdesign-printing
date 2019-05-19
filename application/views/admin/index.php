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
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="<?= base_url(); ?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.dashboard.css">
</head>

<body>

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
                    <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
                    <div class="aside-alert-link">
                        <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
                        <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
                        <a href="" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
                    </div>
                </div>
                <div class="aside-loggedin-user">
                    <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
                        <h6 class="tx-semibold mg-b-0"><?= $user['nama']; ?> </h6>
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
                        <li class="nav-item"><a href="" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
                    </ul>
                </div>
            </div><!-- aside-loggedin -->
            <ul class="nav nav-aside">

                <!-- <li class="nav-label mg-t-25">Pages</li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="user"></i> <span>User Pages</span></a>
                    <ul>
                        <li><a href="page-profile-view.html">View Profile</a></li>
                        <li><a href="page-connections.html">Connections</a></li>
                        <li><a href="page-groups.html">Groups</a></li>
                        <li><a href="page-events.html">Events</a></li>
                    </ul>
                </li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="file"></i> <span>Other Pages</span></a>
                    <ul>
                        <li><a href="page-timeline.html">Timeline</a></li>
                    </ul>
                </li> -->
                <?php
                $this->session->userdata('adm_role_id');
                $queryMenu = "SELECT `adm_menu`.`id`,`menu`,`icon`
                    FROM `adm_menu` JOIN `adm_access_menu`
                     ON `adm_menu`.`id` = `adm_access_menu`.`menu_id`
                      WHERE `adm_access_menu`.`role_id` = 1
                      ORDER BY `adm_access_menu`.`menu_id` ASC";
                $menu = $this->db->query($queryMenu)->result_array(); ?>
                <?php foreach ($menu as $m) : ?>
                    <li class="nav-item with-sub">
                        <a href="" class="nav-link"><i data-feather="user"></i> <span> <?= $m['menu']; ?></span></a>
                        <ul>
                            <!-- query submenu -->
                            <?php
                            $menuId = $m['id'];

                            $querySubMenu = "SELECT * FROM `adm_sub_menu` JOIN `adm_menu`
                                         ON `adm_sub_menu`.`menu_id` = `adm_menu`.`id`
                                         WHERE `adm_sub_menu`.`menu_id` = $menuId
                                         AND `adm_sub_menu`.`is_active` = 1";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                            ?>
                            <?php foreach ($subMenu as $sm) : ?>
                                <a href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a>
                            <?php endforeach; ?>

                        </ul>

                    </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </aside>

    <div class="content ht-100v pd-0">
        <div class="content-header">
            <div class="content-search">
                <i data-feather="search"></i>
                <input type="search" class="form-control" placeholder="Search...">
            </div>
            <nav class="nav">
                <a href="" class="nav-link"><i data-feather="help-circle"></i></a>
                <a href="" class="nav-link"><i data-feather="grid"></i></a>
                <a href="" class="nav-link"><i data-feather="align-left"></i></a>
            </nav>
        </div><!-- content-header -->

        <div class="content-body">
            <div class="container pd-x-0">
                <h1>ini isi</h1>
            </div><!-- container -->
        </div>
    </div>

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
    <script src="<?= base_url(); ?>assets/js/dashforge.aside.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.sampledata.js"></script>

    <!-- append theme customizer -->
    <script src="<?= base_url(); ?>assets/lib/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.settings.js"></script>


</body>

</html>