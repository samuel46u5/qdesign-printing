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


            <!-- 
            <li class="nav-item with-sub active show">
                <a href="" class="nav-link"><i data-feather="user"></i> <span>User Pages</span></a>
                <ul>
                    <li class="active"><a href="page-profile-view.html">View Profile</a></li>
                    <li><a href="page-connections.html">Connections</a></li>
                    <li><a href="page-groups.html">Groups</a></li>
                    <li><a href="page-events.html">Events</a></li>
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
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                            <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $subtitle; ?></li>
                        </ol>
                    </nav>
                    <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
                </div>

            </div>