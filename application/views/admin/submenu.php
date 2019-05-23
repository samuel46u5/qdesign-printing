<div data-label="Daftar Menu" class="df-example demo-table">
    <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
        <span class="fa fa-plus-circle"></span> Tambah Data
    </button>
    <hr>

    <table class="table table-striped table-data">
        <thead>
            <tr>
                <th class="wd-5p">#</th>
                <th class="wd-10p">Title</th>
                <th class="wd-10p">Menu</th>
                <th class="wd-10p">Url</th>
                <th class="wd-5p">Icon</th>
                <th class="wd-10p">Icon Name</th>
                <th class="wd-5p">Active</th>
                <th class="wd-5p">action</th>
            </tr>
        </thead>

    </table>

</div><!-- df-example -->

<script type="text/javascript">
    $(".table-data").DataTable({
        ordering: false,
        processing: true,
        serverSide: true,
        ajax: {
            url: "<?php echo base_url('admin/submenu_ajax') ?>",
            type: 'POST',
        }
    });




    // $('.table-data').DataTable({
    //     ordering: false,
    //     processing: true,
    //     serverSide: true,
    //     "ajax": {
    //         url: "<?php echo site_url("admin/submenu_ajax") ?>",
    //         type: 'GET'

    //     }
    // });
</script>



<!-- modal tambah data baru -->
<div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered wd-sm-650" role="document">
        <div class="modal-content">
            <div class="modal-header pd-y-20 pd-x-20 pd-sm-x-30">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                <div class="media align-items-center">
                    <span class="tx-color-03 d-none d-sm-block"><i data-feather="plus-circle" class="wd-30 ht-30"></i></span>
                    <div class="media-body mg-sm-l-20">
                        <h4 class="tx-18 tx-sm-20 mg-b-2">Tambah data menu</h4>

                    </div>
                </div><!-- media -->
            </div><!-- modal-header -->
            <div class="modal-body pd-sm-t-30 pd-sm-b-40 pd-sm-x-30">
                <form action="<?= base_url('admin/submenu'); ?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Submenu title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>


                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Menu</label>
                        <select name='menu_id' id="menu_id" class="form-control">
                            <option value="" disabled>Select menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id'];  ?> "> <?= $m['menu'];  ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Submenu URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL">
                    </div>

                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Submenu icon</label>
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">

                            <input type="checkbox" value="1" name="is_active" class="custom-control-input" id="is_active" checked>
                            <label class="custom-control-label" for="is_active">Active?</label>
                        </div>
                    </div>

            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white btn-xs" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
            </div>
            </form>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div>
<!-- end modal tambah data baru -->


<!-- modal ubah data -->
<div class="modal fade" id="ubah-data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered wd-sm-650" role="document">
        <div class="modal-content">
            <div class="modal-header pd-y-20 pd-x-20 pd-sm-x-30">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                <div class="media align-items-center">
                    <span class="tx-color-03 d-none d-sm-block"><i data-feather="plus-circle" class="wd-30 ht-30"></i></span>
                    <div class="media-body mg-sm-l-20">
                        <h4 class="tx-18 tx-sm-20 mg-b-2">Ubah data menu</h4>

                    </div>
                </div><!-- media -->
            </div><!-- modal-header -->
            <div id='qq' class="modal-body pd-sm-t-30 pd-sm-b-40 pd-sm-x-30">
                <form action="<?= base_url('admin/update_submenu'); ?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>

                    <div class="form-group">
                        <select name='menu_id2' id="menu_id2" class="form-control">
                            <option value="" disabled>Select menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option id="<?= $m['id']; ?>" value="<?= $m['id']; ?>"> <?= $m['menu']; ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="1" name="is_active" class="custom-control-input" id="is_active" checked>
                            <label class="custom-control-label" for="is_active">Active?</label>
                        </div>
                    </div>


            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button href="<?= base_url('admin/menu');  ?>" ype="button" class="btn btn-white btn-xs" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
            </div>
            </form>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div>
<!-- end modal edit data-->

<script>
    $(document).on("click", "#edit", function() {
        var a = $(this).data('id');
        var b = $(this).data('title');
        var c = $(this).data('url');
        var d = $(this).data('icon');
        var e = $(this).data('is_active');
        var f = $(this).data('menu_id');
        var g = $(this).data('menu');



        $("#qq #id").val(a);
        $("#qq #title").val(b);
        $("#qq #url").val(c);
        $("#qq #icon").val(d);
        $("#qq #is_active2").val(e);
        $("#qq #menu_id2").val(f);
        $("#qq #menu").val(g);



        const x = document.getElementById(f);
        x.setAttribute("selected", "selected");

        //asign value ke chekbox
        if (e == '1') {
            document.getElementById("is_active2").checked = true;
            document.getElementById("is_active2").value = "1";
        } else {
            document.getElementById("is_active2").checked = false;
            document.getElementById("is_active2").value = "0";
        };
    })



    $(document).on("click", ".tombol-hapus", function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        const menu = $(this).attr('data-menu');



        // Swal.fire({
        //         title: "Hapus data?",
        //         text: "Data produk : " + nama + " akan dihapus",
        //         icon: "warning",
        //         buttons: true,
        //         dangerMode: true,
        //     })
        //     .then((willDelete) => {
        //         if (willDelete) {
        //             document.location.href = href;
        //             // swal("Data berhasil dihapus", {
        //             //     icon: "success",
        //             // });
        //         }
        //     });

        Swal.fire({
            title: 'Hapus data?',
            text: "Data menu : " + menu + " akan dihapus",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'hapus',
            cancelButtonColor: '#d33'

        }).then((result) => {
            if (result.value) {
                document.location.href = href;
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
            }
        })
    });
</script>