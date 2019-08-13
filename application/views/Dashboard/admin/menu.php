<div class="content content-components mg-r-0-f">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Website Analytics</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Menu</h4>
        </div>
        <div class="d-none d-md-block">
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="save" class="wd-10 mg-r-5"></i> Save</button>
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="share-2" class="wd-10 mg-r-5"></i> Share</button>
            <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="plus" class="wd-10 mg-r-5"></i> Add New Ticket</button>
        </div>
    </div>
    <div data-label="" class="df-example demo-table">
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
                        <a id="hapus" href='<?= base_url('admin/delete_menu/?id=') . $m['id'] . '&menu=' . $m['menu'] ?>' data-id='<?= $m['id']; ?>' data-menu='<?php echo $m['menu']; ?>' id="link-delete" class="tombol-hapus"><span class="fa fa-trash" style="color:red;"></span>&nbsp;</a>
                    </td>
                </tr>
                <?php } ?>
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
    </div><!-- df-content -->
</div> <!-- df-content -->



<!-- <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
                <span class="fa fa-plus-circle"></span> Tambah Data
            </button> -->


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
                        <h4 class="tx-18 tx-sm-20 mg-b-2">Tambah data sub menu</h4>

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
                <form action="<?= base_url('admin/update_menu'); ?>" method="post" class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Menu</label>
                        <input type="hidden" id="id2" name="id2">
                        <input type="text" id="menu2" name="menu2" class="form-control" placeholder="Masukan menu">
                    </div>

                    <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Icon menu</label>
                        <input type="text" id="icon2" name="icon2" class="form-control" placeholder="Masukan icon untuk menu">
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

        var a = $(this).data('menu');
        var b = $(this).data('icon');
        var c = $(this).data('id');

        $("#qq #menu2").val(a);
        $("#qq #icon2").val(b);
        $("#qq #id2").val(c);
        $("#qq #icon_view").val('<i class=' + b + '></i>');

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