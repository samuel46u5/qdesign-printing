 <!-- https://www.azlaundry.azostech.com/customer  -->
 <!-- refrensi -->
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
     <a class="btn btn-outline-primary btn-xs" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Filter</a>
     <div class="collapse mg-t-10" id="collapseExample">
         <div data-label="Filter data" class="df-example">
             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Jenis Customer</label>
             <select class="form-control" name="jenis_cust_id2" id="jenis_cust_id2" required="" onchange="">
                 <option disabled="" selected="">Pilih Jenis Customer</option>
                 <?php foreach ($jenis_customer as $v) { ?>
                     <option id="<?php echo $v['id_jenis_cust']; ?>" value="<?php echo  $v['id_jenis_cust']; ?>" data-id_jenis_cust="<?php echo  $v['id_jenis_cust']; ?>" data-jenis="<?php echo $v['jenis']; ?>"><?php echo $v['jenis']; ?> </option>
                 <?php } ?>
             </select>

             <button type="button" class="btn btn-outline-primary btn-xs" onclick="Customer()">
                 <span class="fas fa-sync"></span> Refresh
             </button>
         </div><!-- df-example -->

     </div>
     <hr>
     <table id="datatable-customer" class="table">
         <thead>
             <tr>
                 <!-- <th>Action</th>
                 <th>Jenis</th>
                 <th>Nama</th>
                 <th>Alamat</th>
                 <th>Kota</th>
                 <th>Kontak</th>
                 <th>HP</th>
                 <th>Email</th>
                 <th>Aktif</th> -->

                 <th width="3%">No.</th>
                 <th width="20%">Nama</th>
                 <th width="25%">Alamat</th>
                 <th width="10%">Kota</th>
                 <th width="10%">Kontak</th>
                 <th width="15%">HP</th>
                 <th width="15%">Email</th>
                 <th width="5%">Aktif</th>
                 <th width="5%">Action</th>


                 <!-- <th width="5%">Action</th>
                <th width="5%">Jenis</th>
                <th width="15%">Nama</th>
                <th width="15%">Alamat</th>
                <th width="10%">Kota</th>
                <th width="10%">Kontak</th>
                <th width="10%">HP</th>
                <th width="10%">Email</th>
                <th width="5%">Aktif</th> -->

             </tr>
         </thead>


         <tbody>
             <?php $no = 0;
                foreach ($customer as $s) { ?>
                 <tr>

                     <td><?php echo $s['jenis']; ?></td>
                     <td><?php echo $s['nama']; ?></td>
                     <td><?php echo $s['alamat']; ?></td>
                     <td><?php echo $s['kota']; ?></td>
                     <td><?php echo $s['contact']; ?></td>
                     <td><?php echo $s['hp']; ?></td>
                     <td><?php echo $s['email']; ?></td>
                     <td>
                         <?php
                                $t = $s['aktif'];

                                if ($t == "1") {
                                    echo "&nbsp; &nbsp;<span class ='fa fa-check'> </span>";
                                } else echo "&nbsp; &nbsp;<span class ='fa fa-ban'> </span>";
                                ?>
                     </td>
                     <td>
                         <button type="button" id="edit-btn" class="btn btn-primary btn-icon btn-xs" data-toggle="modal" data-target="#edit-data" data-id_customer='<?= $s['id_customer']; ?>' data-jenis_customer='<?= $s['jenis_customer']; ?>' data-nama='<?= $s['nama']; ?>' data-alamat='<?= $s['alamat']; ?>' data-kota='<?= $s['kota']; ?>' data-contact='<?= $s['contact']; ?>' data-hp='<?= $s['hp']; ?>' data-aktif='<?= $s['aktif']; ?>' data-email='<?= $s['email']; ?>' data-backdrop="static">
                             <span class="fas fa-edit"></span>
                         </button>
                         <button type="button" id="delete-btn" class="btn btn-danger btn-icon btn-xs" data-id_customer='<?= $s['id_customer']; ?>' data-nama='<?= $s['nama']; ?>' data-toggle="modal" data-target="#hapus-data" data-backdrop="static">
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
                 <form role="form" class="" method="POST" id="forminputcustomer" action="">
                     <div class="form-group">
                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Jenis Customer</label>
                         <select class="form-control" name="jenis_customer" id="jenis_customer" required="" onchange="">
                             <option disabled="" selected="">Pilih Jenis Customer</option>
                             <?php foreach ($jenis_customer as $v) { ?>
                                 <option id="<?php echo $v['id_jenis_cust']; ?>" value="<?php echo  $v['id_jenis_cust']; ?>" data-id_jenis_cust="<?php echo  $v['id_jenis_cust']; ?>" data-jenis="<?php echo $v['jenis']; ?>"><?php echo $v['jenis']; ?> </option>
                             <?php } ?>
                         </select>

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
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doTambahCustomer()">
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
                             <input type="text" class="form-control" placeholder="" id="id_customer-edit" name="id_customer-edit" hidden>
                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Jenis Customer</label>
                             <select class="form-control" name="jenis_cust_id2" id="jenis_cust_id2" required="" onchange="">
                                 <option disabled="" selected="">Pilih Jenis Customer</option>
                                 <?php foreach ($jenis_customer as $v) { ?>
                                     <option id="<?php echo $v['id_jenis_cust']; ?>" value="<?php echo  $v['id_jenis_cust']; ?>" data-id_jenis_cust="<?php echo  $v['id_jenis_cust']; ?>" data-jenis="<?php echo $v['jenis']; ?>"><?php echo $v['jenis']; ?> </option>
                                 <?php } ?>
                             </select>

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nama</label>
                             <input type="text" class="form-control" placeholder="nama" id="nama-edit" name="nama-edit">

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Alamat</label>
                             <textarea class="form-control" rows="2" placeholder="Textarea" id="alamat-edit" name="alamat-edit"></textarea>

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kota</label>
                             <input type="text" class="form-control" rows="2" placeholder="kota" id="kota-edit" name="kota-edit">

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
                                 <label class="custom-control-label" for="aktif-edit">Status customer</label>

                             </div>
                         </div>
                     </form>


                 </div>
                 <script>
                     $(document).on("click", "#edit-btn", function() {

                         var a = $(this).data('nama');
                         var b = $(this).data('alamat');
                         var c = $(this).data('kota');
                         var d = $(this).data('contact');
                         var e = $(this).data('hp');
                         var f = $(this).data('email');
                         var g = $(this).data('aktif');
                         var h = $(this).data('id_customer');
                         var i = $(this).data('jenis_customer');


                         $("#qq #nama-edit").val(a);
                         $("#qq #alamat-edit").val(b);
                         $("#qq #kota-edit").val(c);
                         $("#qq #contact-edit").val(d);
                         $("#qq #hp-edit").val(e);
                         $("#qq #email-edit").val(f);
                         $("#qq #aktif-edit").val(g);
                         $("#qq #id_customer").val(h);
                         $("#qq #jenis_cust_id2").val(i);
                         $("#qq #id_customer-edit").val(h);

                         const x = document.getElementById(i);
                         x.setAttribute("selected", "selected");

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
             </div><!-- modal-body -->
             <div class="modal-footer pd-x-20 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">

                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doEditCustomer()">
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

                     <input hidden disabled type="text" class="form-control" placeholder="nama" id="id_customer-delete" name="id_customer-delete">
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
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doDeleteCustomer()">
                     <span class="far fa-trash-alt"></span> Hapus
                 </button>
                 <script>
                     $(document).on("click", "#delete-btn", function() {

                         var a = $(this).data('nama');
                         var b = $(this).data('id_customer');


                         $("#ww #nama-delete").val(a);
                         $("#ww #id_customer-delete").val(b);
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


     function doTambahCustomer() {
         var valid = $('#forminputcustomer').valid();
         // console.log(valid);
         if (valid == true) {
             var form = $('#forminputcustomer').get(0);
             $('#loader').show();
             $.ajax({
                 url: '<?php echo base_url('d/Master/do_upload_customer') ?>',
                 method: "POST",
                 data: new FormData(form),
                 contentType: false,
                 processData: false,
                 success: function(resp) {
                     $('#alert').html(resp); //menampilkan alert
                     $('#loader').hide(); //menyembunyikan loader
                     $('#tambah-data').modal('hide'); //menutup modal
                     //update isi customer
                     Customer();
                 }
             });
         }
     }

     function doEditCustomer() {
         var id_customer = document.getElementById("id_customer-edit").value;
         var jenis_customer = document.getElementById("jenis_cust_id2").value;
         var nama = document.getElementById("nama-edit").value;
         var alamat = document.getElementById("alamat-edit").value;
         var kota = document.getElementById("kota-edit").value;
         var contact = document.getElementById("contact-edit").value;
         var hp = document.getElementById("hp-edit").value;
         var email = document.getElementById("email-edit").value;
         var aktif = document.getElementById("aktif-edit").value;

        
        


         $.ajax({
             url: "<?php echo base_url('d/Master/do_update_customer'); ?>",
             method: "POST",
             data: {
                 "id_customer": id_customer,
                 "jenis_customer": jenis_customer,
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
                 Customer();
             }
         });
     }

     function doDeleteCustomer() {
         var id_customer = document.getElementById("id_customer-delete").value;
         var nama = document.getElementById("nama-delete").value;
         //  alert(id_customer);
         $.ajax({
             url: "<?php echo base_url('d/Master/do_delete_customer'); ?>",
             method: "POST",
             data: {
                 "id_customer": id_customer,
                 "nama": nama
             },
             success: function(data) {
                 $('#hapus-data').modal('hide'); //menutup modal
                 $('#alert').html(data);
                 Customer();
             }
         });
     }
 </script>