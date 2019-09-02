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
                         <button type="button" id="edit-btn" class="btn btn-primary btn-icon btn-xs" data-id_tinta='<?= $s['id_tinta']; ?>' data-id_warna='<?= $s['id_warna']; ?>' data-nama_tinta='<?= $s['nama_tinta']; ?>' data-keterangan='<?= $s['keterangan']; ?>' data-id_supplier='<?= $s['id_supplier']; ?>' data-isi='<?= $s['isi']; ?>' data-harga_tinta='<?= $s['harga_tinta']; ?>' data-hargaml='<?= $s['hargaml']; ?>' data-aktif='<?= $s['aktif']; ?>' data-hpp='<?= $s['hpp']; ?>' data-toggle='modal' data-target='#edit-data'><span class="fas fa-edit"></span>&nbsp;</button>
                         <button type="button" id="delete-btn" class="btn btn-danger btn-icon btn-xs" data-id_tinta='<?= $s['id_tinta']; ?>' data-nama_tinta='<?= $s['nama_tinta']; ?>' data-toggle="modal" data-target="#hapus-data" data-backdrop="static">
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
                         <input type="text" class="form-control" placeholder="Kategori Mesin" id="kategori_mesin" name="kategori_mesin">

                         <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Default Mesin</label>

                         <select name='id_supplier' id="id_supplier" class="form-control">
                             <option value="">Pilih Default Mesin</option>
                             <?php foreach ($supplier as $s) : ?>
                                 <option id="<?= $s['id_supplier']; ?>" value="<?= $s['id_supplier']; ?>"> <?= $s['nama']; ?> </option>
                             <?php endforeach; ?>
                         </select>
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
                 <div id='qq'>
                     <form role="form" class="" method="POST" id="forminputtinta" action="">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="" id="id_tinta-edit" name="id_tinta-edit" hidden>
                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nama Tinta</label>
                             <input type="text" class="form-control" placeholder="Nama tinta" id="nama_tinta-edit" name="nama_tinta-edit">

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Warna</label>
                             <div class="row row-sm">
                                 <div class="col-sm">
                                     <select name="id_warna-edit" id="id_warna-edit" class="custom-select">
                                         <option selected>Pilih warna</option>
                                         <?php foreach ($warna as $w) : ?>
                                             <option id="<?= $w['id_warna']; ?>" value="<?= $w['id_warna']; ?>" data-kode_warna="<?= $w['kode_warna']; ?>"> <?= $w['nama_warna']; ?> </option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div><!-- col -->
                                 <div class="col-sm-5 mg-t-20 mg-sm-t-0">
                                     <canvas id="mycanvas-edit" width=" 30" height="30" style="border:1px" position="absolute" background-color="white"> </canvas>
                                 </div><!-- col -->
                             </div>
                             <script>
                                 $('#id_warna-edit').change(function() {
                                     const x = document.getElementById("mycanvas-edit");
                                     x.style.backgroundColor = $(this.options[this.selectedIndex]).attr('data-kode_warna');
                                 });
                             </script>


                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Keterangan</label>
                             <input type="text" class="form-control" rows="2" placeholder="Keterangan" id="keterangan-edit" name="keterangan-edit"></textarea>

                             <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Supplier</label>

                             <select name='id_supplier-edit' id="id_supplier-edit" class="form-control">
                                 <option value="">Pilih Supplier</option>
                                 <?php foreach ($supplier as $s) : ?>
                                     <option id="<?= $s['id_supplier']; ?>" value="<?= $s['id_supplier']; ?>"> <?= $s['nama']; ?> </option>
                                 <?php endforeach; ?>
                             </select>


                             <div class="form-group row mg-b-10 mg-t-10">
                                 <label for="inputEmail3" class="col-sm-4 col-form-label tx-color-03 tx-10 tx-uppercase tx-medium">Isi (Gln) </label>
                                 <div class="col-sm-3">
                                     <input type="number" class="form-control" id="isi-edit" name="isi-edit" value="0" style="text-align: right" min="0" oninput="calculate2()">
                                 </div>
                             </div>
                             <div class=" form-group row mg-b-10">
                                 <label for="inputEmail3" class="col-sm-4 col-form-label tx-color-03 tx-10 tx-uppercase tx-medium">Harga Tinta / Gln</label>
                                 <div class=" col-sm-3">
                                     <input type="number" class="form-control" id="harga_tinta-edit" name="harga_tinta-edit" value="0" style="text-align: right" min="0" oninput="calculate2()">
                                 </div>
                             </div>
                             <div class="form-group row mg-b-10">
                                 <label for="inputEmail3" class="col-sm-4 col-form-label tx-color-03 tx-10 tx-uppercase tx-medium">Harga/ML</label>
                                 <div class=" col-sm-3">
                                     <input type="number" class="form-control" id="hargaml-edit" name="hargaml-edit" style="text-align: right" min="0" readonly>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-4 col-form-label tx-color-03 tx-10 tx-uppercase tx-medium">HPP/ML</label>
                                 <div class=" col-sm-3">
                                     <input type="number" class="form-control" id="hpp-edit" name="hpp-edit" style="text-align: right" min="0" readonly>
                                 </div>
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="custom-control custom-switch">
                                 <input type="checkbox" class="custom-control-input" id="aktif-edit" name="aktif-edit" checked>
                                 <label class="custom-control-label" for="aktif">Status tinta aktif</label>
                             </div>
                         </div>

                     </form>

                     <script>
                         $(document).on("click", "#edit-btn", function() {

                             var a = $(this).data('nama_tinta');
                             var b = $(this).data('id_warna');
                             var c = $(this).data('keterangan');
                             var d = $(this).data('id_supplier');
                             var e = $(this).data('isi');
                             var f = $(this).data('hargaml');

                             var g = $(this).data('aktif');
                             var h = $(this).data('hpp');
                             var i = $(this).data('harga_tinta');
                             var j = $(this).data('id_tinta');



                             $("#qq #nama_tinta-edit").val(a);
                             $("#qq #id_warna-edit").val(b);
                             $("#qq #keterangan-edit").val(c);
                             $("#qq #id_supplier-edit").val(d);
                             $("#qq #isi-edit").val(e);
                             $("#qq #hargaml-edit").val(f);
                             $("#qq #aktif-edit").val(g);
                             $("#qq #hpp-edit").val(h);
                             $("#qq #harga_tinta-edit").val(i);
                             $("#qq #id_tinta-edit").val(j);


                             // id warna
                             const x = document.getElementById(b);
                             x.setAttribute("selected", "selected");
                             // alert(x.getAttribute("data-kode_warna"));
                             const z = document.getElementById("mycanvas-edit");
                             z.style.backgroundColor = x.getAttribute("data-kode_warna");
                             // id supplier
                             // alert(d);
                             const y = document.getElementById(d);
                             y.setAttribute("selected", "selected");

                             if (g == 1) {
                                 document.getElementById("aktif-edit").checked = true;
                                 document.getElementById("aktif-edit").value = "1";
                             } else {
                                 document.getElementById("aktif-edit").checked = false;
                                 document.getElementById("aktif-edit").value = "0";
                             };



                         })

                         function calculate2() {
                             var harga_tinta = document.getElementById("harga_tinta-edit").value;

                             var isi = document.getElementById("isi-edit").value;
                             if (isi > 0) {
                                 var hargaml = harga_tinta / isi;
                                 document.getElementById("hargaml-edit").value = hargaml;
                             } else {
                                 document.getElementById("hargaml-edit").value = 0
                             }
                         }
                     </script>
                 </div>
             </div><!-- modal-body -->
             <div class="modal-footer pd-x-20 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">

                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doEditTinta()">

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

                     <input hidden disabled type="text" class="form-control" placeholder="nama" id="id_tinta-delete" name="id_tinta-delete">
                     <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nama Tinta</label>
                     <input disabled type="text" class="form-control" placeholder="nama tinta" id="nama_tinta-delete" name="nama_tinta-delete">
                     <br>
                     <h6> Akan dihapus? </h6>
                 </div><!-- modal-body -->
             </div>
             <div class="modal-footer pd-x-20 pd-y-15">
                 <button type="button" class="btn btn-outline-danger btn-xs" data-dismiss="modal" data-backdrop="static">

                     <span class="fas fa-ban"></span> Batal
                 </button>
                 <button type="button" class="btn btn-outline-primary btn-xs" onclick="doDeleteTinta()">
                     <span class="far fa-trash-alt"></span> Hapus
                 </button>
                 <script>
                     $(document).on("click", "#delete-btn", function() {

                         var a = $(this).data('nama_tinta');
                         var b = $(this).data('id_tinta');


                         $("#ww #nama_tinta-delete").val(a);
                         $("#ww #id_tinta-delete").val(b);
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
         var valid = $('#forminputinta').valid();
         //  console.log(valid);
         if (valid == true) {
             var form = $('#forminputinta').get(0);
             console.log(form);
             $('#loader').show();
             $.ajax({
                 url: '<?php echo base_url('d/Master/do_upload_tinta') ?>',
                 method: "POST",
                 data: new FormData(form),
                 contentType: false,
                 processData: false,
                 success: function(resp) {
                     $('#alert').html(resp); //menampilkan alert
                     $('#loader').hide(); //menyembunyikan loader
                     $('#tambah-data').modal('hide'); //menutup modal
                     //update isi tinta
                     Tinta();
                 }
             });
         }
     }

     function doEditTinta() {


         var id_tinta = document.getElementById("id_tinta-edit").value;
         var nama_tinta = document.getElementById("nama_tinta-edit").value;
         var id_supplier = document.getElementById("id_supplier-edit").value;
         var harga_tinta = document.getElementById("harga_tinta-edit").value;
         var hargaml = document.getElementById("hargaml-edit").value;
         var isi = document.getElementById("isi-edit").value;
         var hpp = document.getElementById("hpp-edit").value;
         var id_warna = document.getElementById("id_warna-edit").value;
         var keterangan = document.getElementById("keterangan-edit").value;
         var aktif = document.getElementById("aktif-edit").value;

         $.ajax({
             url: "<?php echo base_url('d/Master/do_update_tinta'); ?>",
             method: "POST",
             data: {
                 "id_tinta": id_tinta,
                 "nama_tinta": nama_tinta,
                 "id_supplier": id_supplier,
                 "harga_tinta": harga_tinta,
                 "hargaml": hargaml,
                 "isi": isi,
                 "hpp": hpp,
                 "id_warna": id_warna,
                 "keterangan": keterangan,
                 "aktif": aktif
             },
             success: function(data) {
                 $('#edit-data').modal('hide'); //menutup modal
                 $('#alert').html(data);
                 Tinta();
             }
         });
     }

     function doDeleteTinta() {
         var id_tinta = document.getElementById("id_tinta-delete").value;
         var nama_tinta = document.getElementById("nama_tinta-delete").value;
         //  alert(id_tinta);
         $.ajax({
             url: "<?php echo base_url('d/Master/do_delete_tinta'); ?>",
             method: "POST",
             data: {
                 "id_tinta": id_tinta,
                 "nama_tinta": nama_tinta
             },
             success: function(data) {
                 $('#hapus-data').modal('hide'); //menutup modal
                 $('#alert').html(data);
                 Tinta();
             }
         });
     }
 </script>