 <?php if ($this->session->flashdata('message')) : ?>
     <script>
         Command: toastr["success"]('<?= $this->session->flashdata('message') ?>')
         toastr.options = {
             "closeButton": false,
             "debug": true,
             "newestOnTop": true,
             "progressBar": false,
             "positionClass": "toast-top-right",
             "preventDuplicates": false,
             "onclick": null,
             "showDuration": "300",
             "hideDuration": "1000",
             "timeOut": "2000",
             "extendedTimeOut": "1000",
             "showEasing": "swing",
             "hideEasing": "linear",
             "showMethod": "fadeIn",
             "hideMethod": "fadeOut"
         }
         toastr.success(command);
     </script>
 <?php endif; ?>

 <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-20">
     <div>
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                 <li class="breadcrumb-item"><a href=""><?= $title ?></a></li>
                 <li class="breadcrumb-item active" aria-current="page"><?= $subtitle ?></li>
             </ol>
         </nav>
         <h4 class="mg-b-0 tx-spacing--1"><?= $subtitle ?></h4>
     </div>
     <div class="d-none d-md-block">
         <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i class="fas fa-file-export"></i> Export</button>
         <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"> <i class="fas fa-print"></i> Print</button>
     </div>
 </div>
 <div data-label="Daftar <?= $subtitle ?>" class="df-example demo-table">
     <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
         <span class="far fa-plus-square"></span> Tambah Data
     </button>
     <button type="button" class="btn btn-outline-primary btn-xs" onclick="Customer()">
         <span class="fas fa-sync"></span> Refresh
     </button>
     <hr>



     <table id="example2" class="table">
         <thead>
             <tr>
                 <th>#</th>
                 <th>Role</th>
                 <th>Action</th>

             </tr>
         </thead>
         <tbody>
             <?php $i = 1; ?>
             <?php foreach ($role as $r) : ?>
                 <tr>
                     <th scope="row"><?= $i ?></th>
                     <td> <?= $r['role_id']; ?> </td>
                     <td>

                         <a href="<?= base_url('admin/roleaccess/') . $r['id'];  ?>"><span class="fa fa-key"></span> &nbsp;</a>

                         <a href="<?= base_url('admin/roleaccess/') . $r['id'];  ?>"> <span class="fa fa-edit"></span>&nbsp;</a>
                         <a href="<?= base_url('admin/roleaccess/') . $r['id'];  ?>"> <span class="fa fa-trash-o"></span>&nbsp;</a>
                         <!-- <button class="btn btn-xs btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Akses"><i class="fa fa-key"></i></button>
                                                                                                                                                                                                                                                                                                                                            <button class="btn btn-xs btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                                                                                                                                                                                                                                                                                                            <button class="btn btn-xs btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button> -->
                     </td>
                     </td>
                 </tr>
                 <?php $i++; ?>
             <?php endforeach; ?>
         </tbody>


     </table>

 </div> <!-- df-content -->



 <!-- Modal -->
 <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newRoleModalLabel">Role Name</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('admin/role'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="role" name="role" aria-describedby="emailHelp" placeholder="Role name">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Add</button>
                 </div>
             </form>
         </div>
     </div>
 </div>