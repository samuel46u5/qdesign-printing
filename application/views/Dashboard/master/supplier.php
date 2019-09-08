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
     <button type="button" class="btn btn-outline-primary btn-xs" onclick="Supplier()">
         <span class="fas fa-sync"></span> Refresh
     </button>
     <hr>
     <table id="datatable-supplier" class="table">
         <thead>
             <tr>
                 <th width="3%">No.</th>
                 <th width="20%">Nama</th>
                 <th width="25%">Alamat</th>
                 <th width="10%">Kota</th>
                 <th width="10%">Kontak</th>
                 <th width="15%">HP</th>
                 <th width="15%">Email</th>
                 <th width="5%">Aktif</th>
                 <th width="5%">Action</th>

             </tr>
         </thead>


         <tbody>
             <?php $no = 0;
                foreach ($supplier as $sp) { ?>
                 <tr>
                     <td><?php echo ++$no; ?></td>
                     <td><?php echo $sp['nama']; ?></td>
                     <td><?php echo $sp['alamat']; ?></td>
                     <td><?php echo $sp['kota']; ?></td>
                     <td><?php echo $sp['contact']; ?></td>
                     <td><?php echo $sp['hp']; ?></td>
                     <td><?php echo $sp['email']; ?></td>
                     <td>
                         <?php
                                $t = $sp['aktif'];

                                if ($t == "1") {
                                    echo "&nbsp; &nbsp;<span class ='fa fa-check'> </span>";
                                } else echo "&nbsp; &nbsp;<span class ='fa fa-ban'> </span>";
                                ?>
                     </td>
                     <td>
                         <!-- <a id="edit" href='#' data-id_supplier='<?= $sp['id_supplier']; ?>' data-nama='<?= $sp['nama']; ?>' data-alamat='<?= $sp['alamat']; ?>' data-kota='<?= $sp['kota']; ?>' data-contact='<?= $sp['contact']; ?>' data-hp='<?= $sp['hp']; ?>' data-aktif='<?= $sp['aktif']; ?>' data-email='<?= $sp['email']; ?>' data-toggle='modal' data-target='#ubah-data'><span class="fa fa-edit"></span>&nbsp;</a>
                         <a href="<?= base_url('master/delete_supplier/?id=') . $sp['id_supplier'];  ?>" id="link-delete" class="tombol-hapus" data-nama='<?= $sp['nama']; ?>' data-id_supplier='<?= $sp['id_supplier']; ?>'> <span class=" fa fa-trash-o"></span>&nbsp;</a> -->
                         <button type="button" id="edit-btn" data-id_supplier='<?= $sp['id_supplier']; ?>' data-jenis_customer='<?= $sp['jenis_customer']; ?>' data-nama='<?= $sp['nama']; ?>' data-alamat='<?= $sp['alamat']; ?>' data-kota='<?= $sp['kota']; ?>' data-contact='<?= $sp['contact']; ?>' data-hp='<?= $sp['hp']; ?>' data-aktif='<?= $sp['aktif']; ?>' data-email='<?= $sp['email']; ?>' class="btn btn-primary btn-icon btn-xs" data-toggle="modal" data-target="#edit-data" data-backdrop="static">
                             <span class="fas fa-edit"></span>
                         </button>
                         <button type="button" id="delete-btn" class="btn btn-danger btn-icon btn-xs" data-id_supplier='<?= $sp['id_supplier']; ?>' data-nama='<?= $sp['nama']; ?>' data-toggle="modal" data-target="#hapus-data" data-backdrop="static">
                             <span class="far fa-trash-alt"></span>
                         </button>

                     </td>

                 </tr>
             <?php } ?>


         </tbody>
     </table>

 </div><!-- df-content -->



 <!-- modal tambah data -->
 <div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered wd-sm-650" role="document">
         <div class="modal-content">
             <div class="modal-header pd-y-20 pd-x-20 pd-sm-x-30">
                 <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </a>
                 <div class="media align-items-center">
                     <div class="media-body mg-sm-l-0">
                         <h4 class="tx-18 tx-sm-20 mg-b-2">Tambah Data <?= $subtitle ?></h4>

                     </div>
                 </div><!-- media -->
             </div><!-- modal-header -->
             <div class="modal-body pd-sm-t-10 pd-sm-b-20 pd-sm-x-20">
                 <form role="form" class="" method="POST" id="forminputsupplier" action="">
                     <div class="form-group">

                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nama</label>
                         <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama">

                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Alamat</label>
                         <textarea class="form-control" rows="2" placeholder="Textarea" id="alamat" name="alamat"></textarea>

                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kota</label>
                         <input type="text" class="form-control" rows="2" placeholder="text" id="kota" name="kota"></textarea>

                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kontak </label>
                         <input type="text" class="form-control" placeholder="Kontak" id="contact" name="contact">

                         <div class="row row-sm">
                             <div class="col-sm">
                                 <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Email</label>
                                 <input type="text" class="form-control" placeholder="email" id="email" name="email">
                             </div><!-- col -->
                             <div class="col-sm-5 mg-t-20 mg-sm-t-0">
                                 <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">HP</label>
                                 <input type="text" class="form-control" placeholder="Handphone" id="hp" name="hp">
                             </div><!-- col -->
                         </div>
                     </div>

                     <!-- <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="aktif" name="aktif" checked>
                            <label class="custom-control-label" for="aktif">Status customer aktif</label>
                        </div>
                    </div> -->
                 </form>
             </div><!-- modal-body -->
             <div class="modal-footer pd-x-20 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">

                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doTambahSupplier()">
                     <span class="far fa-save"></span> Simpan
                 </button>

                 <!-- <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button> -->
             </div>
         </div><!-- modal-content -->
     </div><!-- modal-dialog -->
 </div><!-- modal -->

 <!-- modal edit data -->
 <div class="modal fade" id="edit-data" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered wd-sm-650" role="document">
         <div class="modal-content">
             <div class="modal-header pd-y-20 pd-x-20 pd-sm-x-30">
                 <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </a>
                 <div class="media align-items-center">
                     <div class="media-body mg-sm-l-0">
                         <h4 class="tx-18 tx-sm-20 mg-b-2">Edit Data <?= $subtitle ?></h4>

                     </div>
                 </div><!-- media -->
             </div><!-- modal-header -->
             <div class="modal-body pd-sm-t-10 pd-sm-b-20 pd-sm-x-20">
                 <div id='qq'>
                     <form role="form" class="" method="POST" id="forminputcustomer" action="">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="" id="id_supplier-edit" name="id_supplier-edit" hidden>


                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nama</label>
                             <input type="text" class="form-control" placeholder="nama" id="nama-edit" name="nama-edit">

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Alamat</label>
                             <textarea class="form-control" rows="2" placeholder="Textarea" id="alamat-edit" name="alamat-edit"></textarea>

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kota</label>
                             <input type="text" class="form-control" rows="2" placeholder="kota" id="kota-edit" name="kota-edit"></textarea>

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kontak </label>
                             <input type="text" class="form-control" placeholder="Kontak" id="contact-edit" name="contact-edit">

                             <div class="row row-sm">
                                 <div class="col-sm">
                                     <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Email</label>
                                     <input type="text" class="form-control" placeholder="email" id="email-edit" name="email-edit">
                                 </div><!-- col -->
                                 <div class="col-sm-5 mg-t-20 mg-sm-t-0">
                                     <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">HP</label>
                                     <input type="text" class="form-control" placeholder="Handphone" id="hp-edit" name="hp-edit">
                                 </div><!-- col -->
                             </div>
                         </div>

                         <div class="form-group">

                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="aktif-edit" name="aktif-edit">
                                 <label class="custom-control-label" for="aktif-edit">Status</label>

                             </div>
                         </div>
                     </form>

                     <script>
                         $(document).on("click", "#edit-btn", function() {

                             var a = $(this).data('nama');
                             var b = $(this).data('alamat');
                             var c = $(this).data('kota');
                             var d = $(this).data('contact');
                             var e = $(this).data('hp');
                             var f = $(this).data('email');
                             var g = $(this).data('aktif');
                             var h = $(this).data('id_supplier');



                             $("#qq #nama-edit").val(a);
                             $("#qq #alamat-edit").val(b);
                             $("#qq #kota-edit").val(c);
                             $("#qq #contact-edit").val(d);
                             $("#qq #hp-edit").val(e);
                             $("#qq #email-edit").val(f);
                             $("#qq #aktif-edit").val(g);
                             $("#qq #id_supplier").val(h);
                             $("#qq #id_supplier-edit").val(h);

                             //asign value ke chekbox

                             if (g == 1) {

                                 document.getElementById("aktif-edit").checked = true;
                                 document.getElementById("aktif-edit").value = "1";
                             } else {

                                 document.getElementById("aktif-edit").checked = false;
                                 document.getElementById("aktif-edit").value = "0";
                             };
                         })
                     </script>
                 </div>
             </div><!-- modal-body -->
             <div class="modal-footer pd-x-20 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">

                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doEditSupplier()">
                     <span class="far fa-save"></span> Simpan
                 </button>


             </div>
         </div><!-- modal-content -->
     </div><!-- modal-dialog -->
 </div><!-- modal -->


 <!-- modal hapus data -->
 <div class="modal fade" id="hapus-data" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered wd-sm-650" role="document">
         <div class="modal-content">
             <div class="modal-header pd-y-20 pd-x-20 pd-sm-x-30">
                 <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </a>
                 <div class="media align-items-center">
                     <div class="media-body mg-sm-l-0">
                         <h4 class="tx-18 tx-sm-20 mg-b-2">Konfirmasi ?</h4>

                     </div>
                 </div><!-- media -->
             </div><!-- modal-header -->
             <div id="ww">
                 <div class="modal-body pd-sm-t-10 pd-sm-b-20 pd-sm-x-10">
                     <h6> Apakah data <?= $subtitle ?> : </h6>

                     <input hidden disabled type="text" class="form-control" placeholder="nama" id="id_supplier-delete" name="id_supplier-delete">
                     <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nama</label>
                     <input disabled type="text" class="form-control" placeholder="nama" id="nama-delete" name="nama-delete">
                     <br>
                     <h6> Akan dihapus? </h6>
                 </div><!-- modal-body -->
             </div>
             <div class="modal-footer pd-x-20 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">

                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doDeleteSupplier()">
                     <span class="far fa-trash-alt"></span> Hapus
                 </button>
                 <script>
                     $(document).on("click", "#delete-btn", function() {

                         var a = $(this).data('nama');
                         var b = $(this).data('id_supplier');


                         $("#ww #nama-delete").val(a);
                         $("#ww #id_supplier-delete").val(b);
                     })
                 </script>
             </div>
         </div><!-- modal-content -->
     </div><!-- modal-dialog -->
 </div><!-- modal -->


 <script type="text/javascript">
     document.getElementById('aktif-edit').onclick = function() {
         // access properties using this keyword
         if (this.checked) {
             document.getElementById("aktif-edit").checked = true;
             document.getElementById("aktif-edit").value = "1";
         } else {
             document.getElementById("aktif-edit").checked = false;
             document.getElementById("aktif-edit").value = "0";
         }


     };


     function doTambahSupplier() {
         var valid = $('#forminputsupplier').valid();
         // console.log(valid);
         if (valid == true) {
             var form = $('#forminputsupplier').get(0);
             $('#loader').show();
             $.ajax({
                 url: '<?php echo base_url('d/Master/do_upload_supplier') ?>',
                 method: "POST",
                 data: new FormData(form),
                 contentType: false,
                 processData: false,
                 success: function(resp) {
                     $('#alert').html(resp); //menampilkan alert
                     $('#loader').hide(); //menyembunyikan loader
                     $('#tambah-data').modal('hide'); //menutup modal
                     //update isi customer
                     Supplier();
                 }
             });
         }
     }

     function doEditSupplier() {
         var id_supplier = document.getElementById("id_supplier-edit").value;
         var nama = document.getElementById("nama-edit").value;
         var alamat = document.getElementById("alamat-edit").value;
         var kota = document.getElementById("kota-edit").value;
         var contact = document.getElementById("contact-edit").value;
         var hp = document.getElementById("hp-edit").value;
         var email = document.getElementById("email-edit").value;
         var aktif = document.getElementById("aktif-edit").value;


         $.ajax({
             url: "<?php echo base_url('d/Master/do_update_supplier'); ?>",
             method: "POST",
             data: {
                 "id_supplier": id_supplier,
                 "nama": nama,
                 "alamat": alamat,
                 "kota": kota,
                 "contact": contact,
                 "hp": hp,
                 "email": email,
                 "aktif": aktif
             },
             success: function(data) {
                 $('#edit-data').modal('hide'); //menutup modal
                 $('#alert').html(data);
                 Supplier();
             }
         });
     }

     function doDeleteSupplier() {
         var id_supplier = document.getElementById("id_supplier-delete").value;
         var nama = document.getElementById("nama-delete").value;
         //  alert(id_supplier);
         $.ajax({
             url: "<?php echo base_url('d/Master/do_delete_supplier'); ?>",
             method: "POST",
             data: {
                 "id_supplier": id_supplier,
                 "nama": nama
             },
             success: function(data) {
                 $('#hapus-data').modal('hide'); //menutup modal
                 $('#alert').html(data);
                 Supplier();
             }
         });
     }
 </script>