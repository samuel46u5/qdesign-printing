 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>

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
     <button type="button" class="btn btn-outline-primary btn-xs" onclick="KategoriMesin()">
         <span class="fas fa-sync"></span> Refresh
     </button>
     <hr>
     <table id="kategori_mesin" class="table">
         <thead>
             <tr>
                 <th width="3%">No.</th>
                 <th width="15%">Kategori Mesin</th>
                 <th width="5%">Aktif</th>
                 <th width="5%">Action</th>
             </tr>
         </thead>


         <tbody>
             <?php $no = 0;
                foreach ($kategori_mesin as $km) { ?>
                 <tr>
                     <td align="center"><?php echo ++$no; ?></td>
                     <td><?php echo $km['kategori']; ?></td>
                     <td>
                         <?php
                                $t = $km['aktif'];

                                if ($t == "1") {
                                    echo "&nbsp; &nbsp;<span class ='fa fa-check'> </span>";
                                } else echo "&nbsp; &nbsp;<span class ='fa fa-ban'> </span>";
                                ?>
                     </td>
                     <td>
                         <button type="button" id="edit-btn"   data-id_kategori-edit='<?= $km['id_kategori']; ?>' data-kategori-edit='<?= $km['kategori']; ?>' data-id_mesin_default-edit='<?= $km['id_mesin_default']; ?>' data-aktif-edit='<?= $km['aktif']; ?>' class="btn btn-primary btn-icon btn-xs" data-toggle="modal" data-target="#edit-data" data-backdrop="static">
                             <span class="fas fa-edit"></span>
                         </button>                       
                         <button type="button" id="delete-btn" data-id_kategori='<?= $km['id_kategori']; ?>' data-kategori='<?= $km['kategori']; ?>' data-id_mesin_default='<?= $km['id_mesin_default']; ?>' class="btn btn-danger btn-icon btn-xs" data-toggle="modal" data-target="#hapus-data" data-backdrop="static">
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
                 <form role="form" class="" method="POST" id="forminputkategorimesin" action="">
                     <div class="form-group">

                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kategori Mesin</label>
                         <input type="text" class="form-control" placeholder="Kategori Mesin" id="kategori" name="kategori">

                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Default Mesin</label>
                         <select name='id_mesin_default' id="id_mesin_default" class="form-control selectpicker">
                             <option value="0">no default</option>
                             <?php foreach ($mesin as $m) : ?>
                                 <option id="<?= $m['id_mesin']; ?>" value="<?= $m['id_mesin']; ?>"> <?= $m['nama_mesin']; ?> </option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                 </form>
             </div><!-- modal-body -->
             <div class="modal-footer pd-x-5 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">
                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doTambahKategoriMesin()">
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
                 <div id='qq-edit'>
                     <form role="form" class="" method="POST" id="forminputkategorimesin" action="">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="" id="id_kategori-edit" name="id_kategori-edit" hidden>
                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kategori Mesin</label>
                             <input type="text" class="form-control" placeholder="Kategori Mesin" id="kategori-edit" name="kategori-edit">

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Default Mesin</label>
                             <select name='id_mesin_default-edit' id="id_mesin_default-edit" class="form-control selectpicker">
                                 <option value="0">no default</option>
                                 <?php foreach ($mesin as $m) : ?>
                                     <option id="<?= $m['id_mesin']; ?>" value="<?= $m['id_mesin']; ?>"> <?= $m['nama_mesin']; ?> </option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <div class="form-group">

                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="aktif-edit" name="aktif-edit">
                                 <label class="custom-control-label" for="aktif-edit">Status kategori</label>

                             </div>
                         </div>
                     </form>
                     <script>
                         $(document).on("click", "#edit-btn", function() {

                             var a = $(this).data('id_kategori-edit');
                             var c = $(this).data('kategori-edit');
                             var d = $(this).data('id_mesin_default-edit');
                             var e = $(this).data('aktif-edit');

                                              
                             $("#qq-edit #kategori-edit").val(a);
                             $("#qq-edit #id_kategori-edit").val(c);
                             $("#qq-edit #id_mesin_default-edit").val(d);
                             $("#qq-edit #aktif-edit").val(e);


                             const y = document.getElementById(d);
                             y.setAttribute("selected", "selected");

                             if (e == 1) {

                                 document.getElementById("aktif-edit").checked = true;
                                 document.getElementById("aktif-edit").value = "1";
                             } else {

                                 document.getElementById("aktif-edit").checked = false;
                                 document.getElementById("aktif-edit").value = "0";
                             };
                         })
                     </script>
                 </div><!-- modal-body -->


                 <div class="modal-footer pd-x-5 pd-y-15">
                     <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">
                         <span class="fas fa-ban"></span> Batal
                     </button>
                     <button type="button" class="btn btn-outline-primary btn-xs" onclick="doEditKategoriMesin()">
                         <span class="far fa-save"></span> Simpan
                     </button>

                     <!-- <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button> -->
                 </div>
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

                     <input hidden disabled type="text" class="form-control" placeholder="nama" id="id_kategori-delete" name="id_kategori-delete">
                     <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kategori</label>
                     <input disabled type="text" class="form-control" placeholder="nama tinta" id="kategori-delete" name="kategori-delete">
                     <br>
                     <h6> Akan dihapus? </h6>
                 </div><!-- modal-body -->
             </div>
             <div class="modal-footer pd-x-20 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">

                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doDeleteKategoriMesin()">
                     <span class="far fa-trash-alt"></span> Hapus
                 </button>
                 <script>
                     $(document).on("click", "#delete-btn", function() {

                         var a = $(this).data('kategori');
                         var b = $(this).data('id_kategori');


                         $("#ww #kategori-delete").val(a);
                         $("#ww #id_kategori-delete").val(b);
                     })
                 </script>
             </div>
         </div><!-- modal-content -->
     </div><!-- modal-dialog -->
 </div><!-- modal -->


 <script type="text/javascript">
     function calculate() {
         var harga_tinta = document.getElementById("harga_tinta").value;
         var isi = document.getElementById("isi").value;
         if (isi > 0) {
             var hargaml = harga_tinta / isi;
             document.getElementById("hargaml").value = hargaml;
         } else {
             document.getElementById("hargaml").value = 0
         }
     }

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


     function doTambahKategoriMesin() {
         var valid = $('#forminputkategorimesin').valid();
         //  console.log(valid);
         if (valid == true) {
             var form = $('#forminputkategorimesin').get(0);
             console.log(form);
             $('#loader').show();
             $.ajax({
                 url: '<?php echo base_url('d/Master/do_upload_kategori_mesin') ?>',
                 method: "POST",
                 data: new FormData(form),
                 contentType: false,
                 processData: false,
                 success: function(resp) {
                     $('#alert').html(resp); //menampilkan alert
                     $('#loader').hide(); //menyembunyikan loader
                     $('#tambah-data').modal('hide'); //menutup modal
                     //update isi tinta
                     KategoriMesin();
                 }
             });
         }
     }

     function doEditKategoriMesin() {


         var id_kategori = document.getElementById("id_kategori-edit").value;
         var kategori = document.getElementById("kategori-edit").value;
         var aktif = document.getElementById("aktif-edit").value;
         var id_mesin_default = document.getElementById("id_mesin_default-edit").value;


         $.ajax({
             url: "<?php echo base_url('d/Master/do_update_kategori_mesin'); ?>",
             method: "POST",
             data: {
                 "id_kategori": id_kategori,
                 "kategori": kategori,
                 "aktif": aktif,
                 "id_mesin_default": id_mesin_default

             },
             success: function(data) {
                 $('#edit-data').modal('hide'); //menutup modal
                 $('#alert').html(data);
                 KategoriMesin();
             }
         });
     }

     function doDeleteKategoriMesin() {
         var id_kategori = document.getElementById("id_kategori-delete").value;
         var kategori = document.getElementById("kategori-delete").value;
         //  alert(id_kategori);
         $.ajax({
             url: "<?php echo base_url('d/Master/do_delete_kategori_mesin'); ?>",
             method: "POST",
             data: {
                 "id_kategori": id_kategori,
                 "kategori": kategori
             },
             success: function(data) {
                 $('#hapus-data').modal('hide'); //menutup modal
                 $('#alert').html(data);
                 KategoriMesin();
             }
         });
     }
 </script>