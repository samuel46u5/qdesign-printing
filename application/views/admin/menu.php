<div data-label="Daftar Menu" class="df-example demo-table">
    <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
        <span class="fa fa-plus-circle"></span> Tambah Data
    </button>
    <hr>
    <table id="example1" class="table">
        <thead>
            <tr>
                <th class="wd-5p">#</th>
                <th class="wd-25p">Menu</th>
                <th class="wd-5p">Icon</th>
                <th class="wd-25p">Kode Icon</th>
                <th class="wd-5p">Action</th>


            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            foreach ($menu as $m) { ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $m['menu']; ?></td>
                    <td><i class="<?= $m['icon']; ?>"></i> </td>
                    <td><?php echo $m['icon']; ?></td>
                    <td>
                        <a id="edit" href='#' data-id='<?= $m['id']; ?>' data-icon='<?= $m['icon']; ?>' data-menu='<?php echo $m['menu']; ?>' data-toggle='modal' data-target='#ubah-data'><span class="fa fa-edit"></span>&nbsp;</a>
                        <!-- <a href="" id="link-delete" class="tombol-hapus"> <span class="fa fa-trash-o"></span>&nbsp;</a> -->
                        <!-- <a href="<?= base_url('master/delete_menu/?id=') . $m['id'] . '&menu=' . $m['menu'] ?>" id="link-delete" class="tombol-hapus"> <span class=" fa fa-trash-o"></span>&nbsp;</a> -->
                        <a id="hapus" href='<?= base_url('admin/delete_menu/?id=') . $m['id'] . '&menu=' . $m['menu'] ?>' data-id='<?= $m['id']; ?>' data-menu='<?php echo $m['menu']; ?>' id="link-delete" class="tombol-hapus"><span class="fa fa-trash"></span>&nbsp;</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div><!-- df-example -->

<script>
    $('#example1').DataTable({
        language: {
            searchPlaceholder: 'cari data',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });
</script>

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
                <form action="<?= base_url('admin/menu'); ?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Menu</label>
                        <input type="text" id="menu" name="menu" class="form-control" placeholder="Masukan menu">
                    </div>

                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Icon menu</label>
                        <input type="text" id="icon" name="icon" class="form-control" placeholder="Masukan icon untuk menu">
                    </div>

            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white btn-xs" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
            </div>
            </form>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->

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
                <form action="<?= base_url('admin/menu'); ?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Menu</label>
                        <input type="text" id="menu2" name="menu2" class="form-control" placeholder="Masukan menu">
                    </div>

                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Icon menu</label>
                        <input type="text" id="icon2" name="icon2" class="form-control" placeholder="Masukan icon untuk menu">
                    </div>


            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white btn-xs" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
            </div>
            </form>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
<script>
    $(document).on("click", "#edit", function() {

        var a = $(this).data('menu');
        var b = $(this).data('icon');

        $("#qq #menu2").val(a);
        $("#qq #icon2").val(b);
        $("#qq #icon_view").val('<i class=' + b + '></i>');

        // $("#qq #area_cetak2").val(c);
        // $("#qq #id_divisi_mesin2").val(d);
        // $("#qq #satuan2").val(e);
        // $("#qq #aktif2").val(f);
        // $("#qq #lebar2").val(g);
        // $("#qq #panjang2").val(h);
        // $("#qq #id_produk").val(i);

        // // // id bahan
        // const x = document.getElementById(b);
        // x.setAttribute("selected", "selected");

        // // id divisi
        // const y = document.getElementById(d);
        // y.setAttribute("selected", "selected");

        // if (e == "M") {
        //     const z = document.getElementById("1M");
        //     z.setAttribute("selected", "selected");
        // } else {
        //     const z = document.getElementById("2M");
        //     z.setAttribute("selected", "selected");
        // }

        // if (f == 1) {

        //     document.getElementById("aktif2").checked = true;
        //     document.getElementById("aktif2").value = "1";
        // } else {

        //     document.getElementById("aktif2").checked = false;
        //     document.getElementById("aktif2").value = "0";
        // };
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