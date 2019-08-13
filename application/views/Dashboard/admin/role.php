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
    <div data-label="Data Role" class="df-example demo-table">
        <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#newRoleModal" data-backdrop="static">
            <span class="fa fa-plus-circle"></span> Tambah Data
        </button>
        <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
            <span class="fa fa-plus-circle"></span> Refresh
        </button>
        <hr>
        <table id="example2" class="table">
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
    </div><!-- df-content -->
</div> <!-- df-content -->


<script>
    $('#example2').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });
</script>

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