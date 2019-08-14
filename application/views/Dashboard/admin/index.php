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
    <div data-label="Daftar Sub Menu" class="df-example demo-table">
        <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#tambah-data" data-backdrop="static">
            <span class="fa fa-plus-circle"></span> Tambah Data
        </button>
        <hr>
        <table id="datatable-customer" class="table">
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
            });
        </script>
    </div><!-- df-content -->
</div> <!-- df-content -->