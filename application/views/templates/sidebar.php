            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">


                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Qdesign</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('assets'); ?>/img/profile/<?= $user['image'] ?>" alt="..." class="img-circle profile_img">




                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $user['nama']; ?> </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info --> <br />



                    <!-- kita akan melakukan query menu -->
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`,`menu`
                    FROM `user_menu` JOIN `user_access_menu`
                     ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                      WHERE `user_access_menu`.`role_id` = $role_id
                      ORDER BY `user_access_menu`.`menu_id` ASC
                      ";
                    $menu = $this->db->query($queryMenu)->result_array(); ?>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <?php foreach ($menu as $m) : ?>
                                    <li><a><i class="fa fa-home"></i> <?= $m['menu']; ?><span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu open">

                                            <!-- siapkan submenu dari menu ybs -->
                                            <?php
                                            $menuId = $m['id'];
                                            $querySubMenu = "SELECT * 
                                                        FROM `user_sub_menu` JOIN `user_menu`
                                                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                                        WHERE `user_sub_menu`.`menu_id` = $menuId
                                                        AND `user_sub_menu`.`is_active` = 1";
                                            $subMenu = $this->db->query($querySubMenu)->result_array();
                                            ?>

                                            <?php foreach ($subMenu as $sm) : ?>
                                                <?php if ($title == $sm['title']) : ?>
                                                    <li class="nav-item active">
                                                    <?php else : ?>
                                                    <li class="nav-item">
                                                    <?php endif; ?>
                                                    <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?> ">
                                                        <i class="<?= $sm['icon']; ?>"></i>
                                                        <span><?= $sm['title']; ?></span></a>
                                                </li>
                                            <?php endforeach; ?>


                                            <!-- <li><a href="index.html">Dashboard</a></li>
                                                                                                    <li><a href="index2.html">Dashboard2</a></li>
                                                                                                    <li><a href="index3.html">Dashboard3</a></li> -->
                                        </ul>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                    <!-- sidebar menu -->
                    <!-- <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                                        <div class="menu_section">
                                                            <h3>General</h3>
                                                            <ul class="nav side-menu">
                                                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                                                    <ul class="nav child_menu">
                                                                        <li><a href="index.html">Dashboard</a></li>
                                                                        <li><a href="index2.html">Dashboard2</a></li>
                                                                        <li><a href="index3.html">Dashboard3</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                                                    <ul class="nav child_menu">
                                                                        <li><a href="form.html">General Form</a></li>
                                                                        <li><a href="form_advanced.html">Advanced Components</a></li>
                                                                        <li><a href="form_validation.html">Form Validation</a></li>
                                                                        <li><a href="form_wizards.html">Form Wizard</a></li>
                                                                        <li><a href="form_upload.html">Form Upload</a></li>
                                                                        <li><a href="form_buttons.html">Form Buttons</a></li>
                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </div>


                                                    </div> -->
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/logout'); ?>">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>