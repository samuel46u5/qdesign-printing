<div class="content content-components mg-r-0-f">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
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
        <table id="datatable-customer" class="table">
            <thead>
                <tr>
                    <th width="3%">No.</th>
                    <th width="5%">Jenis</th>
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
                foreach ($customer as $s) { ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
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
                        <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#edit-data" data-backdrop="static">
                            <span class="fas fa-edit"></span>
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-xs" data-toggle="modal" data-target="#hapus-data" data-backdrop="static">
                            <span class="far fa-trash-alt"></span>
                        </button>
                    </td>

                </tr>
                <?php } ?>


            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
            });
        </script>
    </div><!-- df-content -->
</div> <!-- df-content -->


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


<script type="text/javascript">
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
                    //update isi album
                }
            });
        }
    }
</script>