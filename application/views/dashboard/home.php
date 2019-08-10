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

    <!-- icon qdesign -->
    <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/img/logo_q.png">
    <link rel="shortcut icon" href="<?= base_url('assets'); ?>/img/logo_q.ico">



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

    <!-- sweetalert2 -->
    <script src="<?= base_url(); ?>assets/lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/lib/sweetalert2/sweetalert2.min.css">


    <!-- ini harusnya diletakkan di footer -->
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

    <!-- datatables -->
    <script src="<?= base_url(); ?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

</head>

<body>

    <?php if ($this->session->flashdata('sukses')) : ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                type: 'success',
                title: '<?= $this->session->flashdata('sukses') ?>'
            })
        </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('gagal')) : ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                type: 'error',
                title: '<?= $this->session->flashdata('gagal') ?>'
            })
        </script>
    <?php endif; ?>
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
            <ul class="nav nav-aside">
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

                    <?php if ($title == $m['menu']) : ?>
                        <li class=" nav-item with-sub active show">
                        <?php else : ?>
                        <li class="nav-item with-sub">
                        <?php endif; ?>




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
                                <!-- <li class="active">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </li> -->

                                <?php if ($subtitle == $sm['title']) : ?>
                                    <li class="active">

                                    <?php else : ?>
                                    <li>

                                    <?php endif; ?>
                                    <!-- <a href="<?= base_url($sm['url']); ?>"> <i class="fa fa-fw fa-circle fa-xs"></i><?= $sm['title']; ?> </a> -->


                                    <a href="JavaScript:void(0);" onclick="<?= str_replace(' ', '', $sm['title']) . '()' ?>"> <i class="fa fa-fw fa-circle fa-xs"></i><?= $sm['title']; ?> </a>
                                    <!-- <a href="JavaScript:void(0);" onclick="master_customer();">Customer</a> -->
                                </li>

                            <?php endforeach; ?>


                        </ul>

                    </li>

                <?php endforeach; ?>



            </ul>
        </div>
    </aside>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- ini untuk menampilkan alert -->
            <div id="alert"></div>
            <div id="data"></div>
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    </div>


    <script>
        window.onload = date_time('date_time');
        $(function() {
            $(".textarea").wysihtml5();
        });
    </script>

    <!-- datatables -->
    <script src="<?= base_url(); ?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <!-- end datatables -->

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

    <!-- memangil fungsi ketika diklik tombol -->
    <?php $this->load->view('dashboard/home_js'); ?>

</body>

</html>