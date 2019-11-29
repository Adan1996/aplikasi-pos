<div class="page-content d-flex align-items-stretch">
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5"><?= $user['name']; ?></h1>
                <p>Admin</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <?php
        $roleId = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
            FROM `user_menu` JOIN `user_access_menu`
              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
           WHERE `user_access_menu`.`role_id` = $roleId
           ORDER BY `user_access_menu`.`menu_id` ASC
           ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <?php foreach ($menu as $m) : ?>
            <span class="heading"><?= $m['menu']; ?></span>

            <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu`
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                                ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>

            <?php foreach ($subMenu as $sm) : ?>

                <ul class="list-unstyled pb-0">
                    <?php if ($title == $sm['title']) : ?>
                        <li class="active">
                        <?php else : ?>
                        <li class="">
                        <?php endif; ?>
                        <a href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>"></i><?= $sm['title']; ?></a>
                        </li>
                </ul>
            <?php endforeach; ?>
        <?php endforeach; ?>

    </nav>
    <div class="content-inner">