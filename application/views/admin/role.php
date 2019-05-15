<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $title; ?> <small> - Setting <?= $title; ?></small></h3>
            </div>




        </div>



        <div class="row">

            <div class="clearfix"></div>

            <div class="col-md-6 col-sm-4 col-xs-12">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newRoleModal">
                    <span class="fa fa-plus-circle"></span> Tambah Role
                </button>

                <div class="x_panel">

                    <div class="x_content">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($role as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td> <?= $r['role_id']; ?> </td>
                                        <td>

                                            <a href="<?= base_url('admin/roleaccess/') . $r['id'];  ?>"><span class="fa fa-key"></span> &nbsp;</a>

                                            <a href="<?= base_url('admin/roleaccess/') . $r['id'];  ?>"> <span class="fa fa-edit"></span>&nbsp;</a>
                                            <a href="<?= base_url('admin/roleaccess/') . $r['id'];  ?>"> <span class="fa fa-trash-o"></span>&nbsp;</a>
                                            <!-- <button class="btn btn-xs btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Akses"><i class="fa fa-key"></i></button>
                                                                                                                                                                                                                                                            <button class="btn btn-xs btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                                                                                                                                                                                                                            <button class="btn btn-xs btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button> -->
                                        </td>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>


                        </table>
                        Jumlah role : <?= $i - 1; ?>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
<!-- /page content -->

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Role Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" aria-describedby="emailHelp" placeholder="Role name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>