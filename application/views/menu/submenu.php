<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>

        <div class="clearfix"></div>

        <div class="row">
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

            <!-- ini -->

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">

                        <h2>Button Example <small>Users</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tes2">
                            <span class="fa fa-plus-circle"></span> Tambah Data
                        </button>
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Icon Name</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $sm['title']; ?> </td>
                                        <td><?= $sm['menu']; ?> </td>
                                        <td><?= $sm['url']; ?> </td>
                                        <td><span class='<?= $sm['icon']; ?>'> </span> </td>
                                        <td><?= $sm['icon']; ?> </td>
                                        <td>
                                            <?php
                                            $t = $sm['is_active'];

                                            if ($t == "1") {
                                                echo "&nbsp; &nbsp;<span class ='fa fa-check'> </span>";
                                            } else echo "&nbsp; &nbsp;<span class ='fa fa-ban'> </span>";
                                            ?>
                                        <td>
                                            <a id="edit" href='#' data-id='<?= $sm['id']; ?>' data-menu='<?= $sm['menu']; ?>' data-menu_id='<?= $sm['menu_id']; ?>' data-title='<?= $sm['title']; ?>' data-url='<?= $sm['url']; ?>' data-icon='<?= $sm['icon']; ?>' data-is_active='<?= $sm['is_active']; ?>' data-toggle='modal' data-target='#ubah-data'><span class="fa fa-edit"></span>&nbsp;</a>
                                            <a href="<?= base_url('menu/delete_subMenu/?id=') . $sm['id'];  ?>" onclick="javascript: return confirm('Anda yakin hapus?')">
                                                <span class=" fa fa-trash-o"></span>&nbsp;</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end  -->

        </div>
    </div>
</div>
<!-- /page content -->
<script>
    $('#data_submenu').dataTable({
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

<!-- Form Tambah -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>

                    <div class="form-group">
                        <select name='menu_id' id="menu_id" class="form-control">
                            <option value="" disabled>Select menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id'];  ?> "> <?= $m['menu'];  ?> </option>
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


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- edit data new style -->
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
                    <div class="x_content" id="qq">
                        <br />
                        <div id="qq">
                            <form action="<?= base_url('menu/update_submenu'); ?>" method="post" class="form-horizontal form-label-left input_mask">

                                <div class="form-group">
                                    <input type="hidden" class=" form-control" id="id" name="id">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Menu title</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select name='menu_id2' id="menu_id2" class="form-control">
                                            <option value="" disabled>Select menu</option>
                                            <?php foreach ($menu as $m) : ?>
                                                <option id="<?= $m['id']; ?>" value="<?= $m['id']; ?>"> <?= $m['menu']; ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Submenu URL</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon Menu<span class="required"></span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required"></span>
                                    </label>
                                    <div class="custom-control custom-checkbox">
                                        <label> &nbsp;&nbsp;&nbsp; </label>
                                        <input type="checkbox" name="is_active2" class="custom-control-input" id="is_active2">
                                        <!-- <label class=" custom-control-label" for="is_active2">Active?</label> -->

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
                            </form>
                        </div>
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
                                // alert(b);


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
                        </script>

                    </div>
                </div>
            </div>
            <!-- end isi form -->
        </div>
    </div>
</div>


<!-- Form tambah new style -->
<div class="modal fade" id="tes2" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel">
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

                        <form action="<?= base_url('menu/submenu'); ?>" method="post" class="form-horizontal form-label-left input_mask">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Menu title</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select name='menu_id' id="menu_id" class="form-control">
                                        <option value="" disabled>Select menu</option>
                                        <?php foreach ($menu as $m) : ?>
                                            <option value="<?= $m['id'];  ?> "> <?= $m['menu'];  ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Submenu URL</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon Menu<span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">

                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required"></span>
                                </label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" value="1" name="is_active" class="custom-control-input" id="is_active" checked>

                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5">
                                        <button href="" type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-trash-o"> Batal</button>
                                        <button class="btn btn-info" type="submit"><span class="fa fa-floppy-o"> Simpan</button>
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
</div>

<!-- kosongan modal form -->
<div class="modal fade" id="kosongan" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <br>


        </div>
    </div>
</div>
<!-- kosongan modal form -->