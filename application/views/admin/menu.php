<div data-label="Daftar Menu" class="df-example demo-table">
    <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data">
        <span class="fa fa-plus-circle"></span> Tambah Data
    </button>
    <hr>
    <table id="example1" class="table">
        <thead>
            <tr>
                <th class="wd-5p">#</th>
                <th class="wd-25p">Menu</th>
                <th class="wd-25p">Icon</th>
                <th class="wd-5p">Action</th>


            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            foreach ($menu as $m) { ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $m['menu']; ?></td>
                    <td><?php echo $m['icon']; ?></td>
                    <td>
                        <a id="edit" href='#' data-id='<?= $m['id']; ?>' data-menu='<?php echo $m['menu']; ?>' data-toggle='modal' data-target='#ubah-data'><span class="fa fa-edit"></span>&nbsp;</a>
                        <a id="hapus" href='#' data-id='<?= $m['id']; ?>' data-menu='<?php echo $m['menu']; ?>' data-toggle='modal' data-target='#hapus-data'><span class="fa fa-trash"></span>&nbsp;</a>
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


                <div class="form-group">
                    <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Menu</label>
                    <input type="text" class="form-control" placeholder="Masukan menu">
                </div>

                <div class="form-group">
                    <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Icon menu</label>
                    <input type="text" class="form-control" placeholder="Masukan icon untuk menu">
                </div>

            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white btn-xs" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary btn-xs">Simpan</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->