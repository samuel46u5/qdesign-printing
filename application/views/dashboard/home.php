<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="<?= base_url(); ?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/select2/css/select2.min.css" rel="stylesheet">

    <script src="<?= base_url(); ?>assets/js/timer.js"></script>

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.demo.css">

    <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/prismjs/prism.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.js"></script>
    <script src="<?= base_url(); ?>assets/lib/select2/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>


    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.1/css/animsition.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.1/js/animsition.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        .loader {
            border: 5px solid #f3f3f3;
            -webkit-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
            border-top: 5px solid #555;
            border-radius: 50%;
            width: 30px;
            height: 30px;

        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>

    <aside class="aside aside-fixed">
        <div class="aside-header">
            <a href="../../index.html" class="aside-logo">Qdesign<span>Printing</span></a>
            <a href="" class="aside-menu-link">
                <i data-feather="menu"></i>
                <i data-feather="x"></i>
            </a>
        </div>
        <div class="aside-body">
            <div class="aside-loggedin">
                <div class="d-flex align-items-center justify-content-start">
                    <a href="" class="avatar"><img src="<?= base_url('assets/img/profile-pic/') . $user['image'] ?> " class="rounded-circle" alt=""></a>
                    <div class="aside-alert-link">
                        <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
                        <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
                        <a href="<?= base_url('auth/logout'); ?>" data-toggle="tooltip" title="Log out"><i data-feather="log-out"></i></a>
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
                        <li class="nav-item"><a href="<?= base_url('auth/logout'); ?>" class="nav-link"><i data-feather="log-out"></i> <span>Log Out</span></a></li>
                    </ul>
                </div>
            </div><!-- aside-loggedin -->
            <ul class="nav nav-aside" id="menu-samping">

                <?php
                $this->session->userdata('adm_role_id');
                $queryMenu = "SELECT `adm_menu`.`id`,`menu`,`icon`
                    FROM `adm_menu` JOIN `adm_access_menu`
                     ON `adm_menu`.`id` = `adm_access_menu`.`menu_id`
                      WHERE `adm_access_menu`.`role_id` = 1
                      ORDER BY `adm_access_menu`.`menu_id` ASC";
                $menu = $this->db->query($queryMenu)->result_array();
                // var_dump($menu);
                // die;
                ?>
                <?php foreach ($menu as $m) : ?>



                <li class="nav-item with-sub ini-menu" id="menu-<?= $m['menu']; ?>">

                    <a href="#" class="nav-link"><i class="<?= $m['icon'] . ' fa-lg'; ?>"></i> <span> &nbsp; <?= $m['menu']; ?></span></a>
                    <ul>
                        <!-- query submenu -->
                        <?php
                            $menuId = $m['id'];

                            $querySubMenu = "SELECT * FROM `adm_sub_menu` JOIN `adm_menu`
                                         ON `adm_sub_menu`.`menu_id` = `adm_menu`.`id`
                                         WHERE `adm_sub_menu`.`menu_id` = $menuId
                                         AND `adm_sub_menu`.`is_active` = 1";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                            // var_dump($subMenu);
                            // die;
                            ?>
                        <?php foreach ($subMenu as $sm) : ?>




                        <li class="ini-submenu" id="submenu-<?= str_replace(' ', '', $sm['title']) ?>">


                            <a href="JavaScript:void(0);" onclick="<?= str_replace(' ', '', $sm['title']) . '()' ?>"> <i class="fa fa-fw fa-circle fa-xs"></i><?= $sm['title']; ?> </a>

                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </aside>

    <div class="content ht-100v pd-0">
        <div class="content-header">
            <div class="navbar-brand">
                <!-- untuk menampilkan jam -->
                <span class="tx-color-03 tx-12 mg-b-0 mg-x-10" id="date_time"></span>
            </div>
            <nav class="nav">

                <div class="loader" id="loader"></div>
            </nav>
        </div><!-- content-header -->

        <div class="content-body">
            <div class="container-fluid">
                <div id="data"></div>
            </div><!-- container -->
        </div>
    </div>


    <script src="<?= base_url(); ?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/dashforge.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.aside.js"></script>



    <!-- append theme customizer -->
    <script src="<?= base_url(); ?>assets/lib/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.settings.js"></script>

    <script src="<?= base_url(); ?>assets/js/main.js"></script>


    <script>
        window.onload = date_time('date_time');
        $(function() {
            $(".textarea").wysihtml5();
        });
    </script>

    <?php $this->load->view('dashboard/home_js'); ?>







</body>

</html>