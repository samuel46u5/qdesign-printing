<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <title>Qdesign</title>

    <!-- vendor css -->
    <link href="<?= base_url(); ?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- vendor css -->
    <link href="<?= base_url(); ?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">


    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.dashboard.css">

    <!-- efek hover CSS lihat demo http://ianlunn.github.io/Hover/ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/hover-min.css">
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

        </div><!-- navbar-menu-wrapper -->
        <div class="navbar-right">
            <a href="http://dribbble.com/themepixels" class="btn btn-social"><i class="fab fa-dribbble"></i></a>
            <a href="https://github.com/themepixels" class="btn btn-social"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/themepixels" class="btn btn-social"><i class="fab fa-twitter"></i></a>
            <a href="https://themeforest.net/item/azia-responsive-bootstrap-4-dashboard-template/22983790" class="btn btn-buy"><i data-feather="shopping-bag"></i> <span>Buy Now</span></a>
        </div><!-- navbar-right -->
    </header><!-- navbar -->

    <div id="sidebarMenu" class="sidebar sidebar-fixed sidebar-components">

        <div class="sidebar-body">
            <ul class="sidebar-nav">
                <li class="nav-label mg-b-15">Admin Area</li>
                <!-- kita akan melakukan query menu -->
                <!-- sementara diisi 1 = admin developemnt mode -->
                <?php
                $role_id = '1';
                // $this->session->userdata('adm_role_id');
                $queryMenu = "SELECT `adm_menu`.`id`,`menu`
                    FROM `adm_menu` JOIN `adm_access_menu`
                     ON `adm_menu`.`id` = `adm_access_menu`.`menu_id`
                      WHERE `adm_access_menu`.`role_id` = $role_id
                      ORDER BY `adm_access_menu`.`menu_id` ASC";
                $menu = $this->db->query($queryMenu)->result_array(); ?>
                <li class="nav-item">
                    <?php foreach ($menu as $m) : ?>
                        <a href="" class="nav-link with-sub"><i data-feather="layers"></i><?= $m['menu']; ?></a>

                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT * FROM `adm_sub_menu` JOIN `adm_menu`
                                                        ON `adm_sub_menu`.`menu_id` = `adm_menu`.`id`
                                                        WHERE `adm_sub_menu`.`menu_id` = $menuId
                                                        AND `adm_sub_menu`.`is_active` = 1";
                        $subMenu = $this->db->query($querySubMenu)->result_array(); ?>

                        <?php foreach ($subMenu as $sm) : ?>
                            <nav class="nav">
                                <?php if ($title == $sm['title']) : ?>
                                    <a href="<?= $sm['title']; ?>">Accordion</a>
                                </nav>

                                <?php endforeach; ?>

                            <!-- <nav class="nav">
                                                                                                                        <a href="el-accordion.html">Accordion</a>
                                                                                                                        <a href="el-alerts.html">Alerts</a>

                                                                                                                    </nav> -->
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div><!-- sidebar-body -->
        </div><!-- sidebar -->


        <div class="content content-components">
            <div class="container">



            </div><!-- container -->
        </div><!-- content -->


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
                'use strict';

                // Leftlet Maps
                var mymap = L.map('leaflet1').setView([51.505, -0.09], 13);

                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
                    id: 'mapbox.streets'
                }).addTo(mymap);


                // Adding a Popup
                var mymap2 = L.map('leaflet2').setView([51.505, -0.09], 13);

                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
                    id: 'mapbox.streets'
                }).addTo(mymap2);

                L.marker([51.5, -0.09]).addTo(mymap2)
                    .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();


                // Adding a Circle
                var mymap3 = L.map('leaflet3').setView([51.505, -0.09], 13);

                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
                    id: 'mapbox.streets'
                }).addTo(mymap3);

                L.circle([51.508, -0.11], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 500
                }).addTo(mymap3);

            });
        </script>

    </body>

    </html>