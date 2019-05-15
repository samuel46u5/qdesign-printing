<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true" id="ubah-data">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Ubah Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body isi dari isian modal -->
            <form action="<?= base_url('menu/update_submenu') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group" id="mm">
                        <input type="hidden" class=" form-control" id="id" name="id">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <!-- <select name='menu_id' id="menu_idx" class="form-control"> -->

                            <select name='menu_id2' id="menu_id2" class="form-control">
                                <option value="" disabled>Select menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option id=" <?= $m['id']; ?>" value="<?= $m['id'];  ?>"> <?= $m['menu'];  ?> </option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <p id="demo"></p>

                        <div class="form-group">
                            <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <!-- <input type="checkbox" name="is_active2" value="1" /> <label class=" custom-control-label" for="is_active2">Active?</label> -->
                                <input type="checkbox" name="is_active2" class="custom-control-input" id="is_active2" onchange="setvalue()"> <label class=" custom-control-label" for="is_active2">Active?</label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button href="<?= base_url('menu/submenu');  ?>" type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-trash-o"> Batal</button>
                    <button class="btn btn-info" type="submit"><span class="fa fa-floppy-o"> Simpan&nbsp;</button>
                </div>
            </form>
            <!-- end of body -->




            <script>
                $(document).on("click", "#edit", function() {
                    var a = $(this).data('id');
                    var b = $(this).data('title');
                    var c = $(this).data('url');
                    var d = $(this).data('icon');
                    var e = $(this).data('is_active');
                    var f = $(this).data('menu_id');
                    var g = $(this).data('menu');

                    // alert(e);

                    $("#mm #id").val(a);
                    $("#mm #title").val(b);
                    $("#mm #url").val(c);
                    $("#mm #icon").val(d);
                    $("#mm #is_active2").val(e);
                    $("#mm #menu_id2").val(f);
                    $("#mm #menu").val(g);



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