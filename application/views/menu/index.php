<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $title; ?> <small> - Setting <?= $title; ?></small></h3>
            </div>
        </div>


        <div class="x_panel">

            <div class="x_content">
                <div class="row">
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newMenuModal">
                            <span class="fa fa-plus-circle"></span> Tambah Menu
                        </button>

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

                        <?php if (form_error('menu')) : ?>
                            <script>
                                Command: toastr["error"]('<?php if (form_error('menu')) ?>')
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



                        <table id="data_menu" class="display" style="width:150%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($menu as $m) { ?>
                                    <tr>
                                        <td><?php echo ++$no; ?></td>
                                        <td><?php echo $m['menu']; ?></td>
                                        <td>
                                            <a id="edit" href='#' data-id='<?= $m['id']; ?>' data-menu='<?php echo $m['menu']; ?>' data-toggle='modal' data-target='#ubah-data'><span class="fa fa-edit"></span>&nbsp;</a>
                                            <a id="hapus" href='#' data-id='<?= $m['id']; ?>' data-menu='<?php echo $m['menu']; ?>' data-toggle='modal' data-target='#hapus-data'><span class="fa fa-trash"></span>&nbsp;</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>

                    </div>




                </div>

            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script>
    $('#data_menu').dataTable({
        "language": {
            "search": "cari",
            "searchPlaceholder": "",
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Nothing found - sorry",
            "info": "Halaman : _PAGE_ dari _PAGES_",
            "infoEmpty": "Data tidak ada",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },



    });
</script>


<!-- data baru -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- isi form -->
            <div class="col-md-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah <small>Data Menu</small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        <form action="<?= base_url('menu'); ?>" method="post" class="form-horizontal form-label-left input_mask">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu<span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="menu" name="menu" aria-describedby="emailHelp" placeholder="Nama Menu" autofocus>

                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5">
                                        <!-- <button href="" type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-trash-o"> Batal</button>
                                        <button class="btn btn-info" type="submit"><span class="fa fa-floppy-o"> Simpan</button> -->
                                        <button href="<?= base_url('menu/submenu');  ?>" type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-trash-o"> Batal</button>
                                        <button class="btn btn-info" type="submit"><span class="fa fa-floppy-o"> Simpan&nbsp;</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end isi form -->
    </div>
</div>


<!-- edit menu -->
<div class="modal fade" id="ubah-data" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- isi form -->
            <div class="col-md-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit <small>Data Menu</small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" id="mm">
                        <br />

                        <form action="<?= base_url('menu/update_menu'); ?>" method="post" class="form-horizontal form-label-left input_mask">

                            <div class="form-group">
                                <input type="hidden" class=" form-control" id="id" name="id">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu<span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="menu" name="menu" aria-describedby="emailHelp" placeholder="Nama Menu" autofocus>

                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5">
                                        <button href="<?= base_url('menu');  ?>" type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-trash-o">
                                                Batal</button>
                                        <button class="btn btn-info" type="submit"><span class="fa fa-floppy-o">
                                                Simpan&nbsp;</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                    <script>
                        $(document).on("click", "#edit", function() {
                            var a = $(this).data('id');
                            var b = $(this).data('menu');


                            $("#mm #id").val(a);
                            $("#mm #menu").val(b);
                            //-> #mm ini dari div id dari atas supaya bisa diakses

                        })
                    </script>
                </div>
            </div>
        </div>
        <!-- end isi form -->
    </div>
</div>



//modal konfirmasi hapus
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true" id="hapus-data">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Hapus menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body isi dari isian modal -->
            <form action="<?= base_url('menu/delete_menu') ?>" method="post">
                <div>
                    <div class="modal-body">
                        <div class="form-group" id="mm">
                            <!-- id "mm" -> ini supaya bisa diakses dari script di bawah -->
                            <!-- <input type="text" class="form-control" id="menu" name="menu" aria-describedby="emailHelp" placeholder="Nama Menu" autofocus> -->

                            <input type="hidden" class=" form-control" id="id" name="id">
                            <input type="text" class="form-control" id="menu" name="menu">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button href="<?= base_url('menu');  ?>" type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                        <button class="btn btn-info" type="submit"><span class="fa fa-trash-o"> Hapus&nbsp;</button>
                    </div>

            </form>
            <!-- end of body -->

            <script>
                $(document).on("click", "#hapus", function() {
                    var a = $(this).data('id');
                    var b = $(this).data('menu');


                    $("#mm #id").val(a);
                    $("#mm #menu").val(b);
                    //-> #mm ini dari div id dari atas supaya bisa diakses

                })
            </script>
        </div>
    </div>
</div>