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

                <div class="x_panel">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="x_content">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu</th>
                                    <th>Akses</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td> <?= $m['menu']; ?> </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">

                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>


                        </table>
                        Jumlah menu : <?= $i - 1; ?>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
<!-- /page content -->