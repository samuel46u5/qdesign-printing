 <table id="example1" class="table">
     <thead>
         <tr>
             <th class="wd-5p">#</th>
             <th class="wd-10p">Title</th>
             <th class="wd-10p">Menu</th>
             <th class="wd-10p">Url</th>
             <th class="wd-5p">Icon</th>
             <th class="wd-10p">Icon Name</th>
             <th class="wd-5p">Active</th>
             <th class="wd-5p">Action</th>


         </tr>
     </thead>
     <tbody>
         <?php $i = 1; ?>
         <?php foreach ($subMenu as $sm) : ?>
             <tr>
                 <th><?= $i ?></th>
                 <td><?= $sm['title']; ?> </td>
                 <td><?= $sm['menu']; ?> </td>
                 <td><?= $sm['url']; ?> </td>
                 <td><span class='<?= $sm['icon']; ?>'> </span> </td>
                 <td><?= $sm['icon']; ?> </td>
                 <td>
                     <?php
                        $t = $sm['is_active'];

                        if ($t == "1") {
                            echo "&nbsp; &nbsp;<span class ='fa fa-check'> </span>";
                        } else echo "&nbsp; &nbsp;<span class ='fa fa-ban'> </span>";
                        ?>
                 <td>
                     <a id="edit" href='#' data-id='<?= $sm['id']; ?>' data-menu='<?= $sm['menu']; ?>' data-menu_id='<?= $sm['menu_id']; ?>' data-title='<?= $sm['title']; ?>' data-url='<?= $sm['url']; ?>' data-icon='<?= $sm['icon']; ?>' data-is_active='<?= $sm['is_active']; ?>' data-toggle='modal' data-target='#ubah-data'><span class="fa fa-edit"></span>&nbsp;</a>
                     <!-- <a href="<?= base_url('menu/delete_subMenu/?id=') . $sm['id'];  ?>"> <span class=" fa fa-trash-o"></span>&nbsp;</a> -->
                     <a id="hapus" href='<?= base_url('admin/delete_menu/?id=') . $m['id'] . '&menu=' . $m['menu'] ?>' data-id='<?= $m['id']; ?>' data-menu='<?php echo $m['menu']; ?>' id="link-delete" class="tombol-hapus"><span class="fa fa-trash" style="color:red;"></span>&nbsp;</a>
                 </td>
             </tr>
             <?php $i++; ?>
         <?php endforeach; ?>


     </tbody>
 </table>


 <script>
     $('#example1').DataTable({
         language: {
             searchPlaceholder: 'cari data',
             sSearch: '',
             lengthMenu: '_MENU_ items/page',
         }
     });
 </script>