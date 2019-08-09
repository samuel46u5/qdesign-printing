<div data-label=" <?php $subtitle; ?>" class="df-example demo-table">
    <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
        <span class="fa fa-plus-circle"></span> Tambah Data
    </button>
    <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
        <span class="fa fa-plus-circle"></span> Refresh
    </button>
    <hr>
    <table id="datatable" class="table">
        <thead>
            <tr>
                <th width="3%">No.</th>
                <th width="5%">Jenis</th>
                <th width="20%">Nama</th>
                <th width="25%">Alamat</th>
                <th width="10%">Kota</th>
                <th width="10%">Kontak</th>
                <th width="15%">HP</th>
                <th width="15%">Email</th>
                <th width="5%">Aktif</th>
                <th width="5%">Action</th>

            </tr>
        </thead>


        <tbody>
            <?php $no = 0;
            foreach ($customer as $s) { ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $s['jenis']; ?></td>
                    <td><?php echo $s['nama']; ?></td>
                    <td><?php echo $s['alamat']; ?></td>
                    <td><?php echo $s['kota']; ?></td>
                    <td><?php echo $s['contact']; ?></td>
                    <td><?php echo $s['hp']; ?></td>
                    <td><?php echo $s['email']; ?></td>
                    <td>
                        <?php
                        $t = $s['aktif'];

                        if ($t == "1") {
                            echo "&nbsp; &nbsp;<span class ='fa fa-check'> </span>";
                        } else echo "&nbsp; &nbsp;<span class ='fa fa-ban'> </span>";
                        ?>
                    </td>
                    <td>
                        <a id="edit" href='#' data-id_customer='<?= $s['id_customer']; ?>' data-jenis_customer='<?= $s['jenis_customer']; ?>' data-nama='<?= $s['nama']; ?>' data-alamat='<?= $s['alamat']; ?>' data-kota='<?= $s['kota']; ?>' data-contact='<?= $s['contact']; ?>' data-hp='<?= $s['hp']; ?>' data-aktif='<?= $s['aktif']; ?>' data-email='<?= $s['email']; ?>' data-toggle='modal' data-target='#ubah-data'><span class="fa fa-edit"></span>&nbsp;</a>
                        <a href="<?= base_url('master/delete_customer/?id=') . $s['id_customer'];  ?>" id="link-delete" class="tombol-hapus" data-nama='<?= $s['nama']; ?>' data-id_customer='<?= $s['id_customer']; ?>'> <span class=" fa fa-trash-o"></span>&nbsp;</a>

                    </td>

                </tr>
            <?php } ?>


        </tbody>
    </table>
</div><!-- df-example -->