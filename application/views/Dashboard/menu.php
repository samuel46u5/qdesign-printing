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