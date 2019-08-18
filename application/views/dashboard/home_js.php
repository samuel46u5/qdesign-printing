<!-- berisi fungsi untuk memangil menu yang diklik -->
<script type="text/javascript">
    //admin Dashboard
    function Dashboard() {
        alert('dashboard');
        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('Admin/index'); ?>',
            method: "POST",
            success: function(resp) {
                console.log(resp);
                $('#data').html(resp);
                $('#loader').hide();
                $('#example2').DataTable();
            }
        });
    }

    //master customer
    function Customer() {
        // alert('customer ini home js');
        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('d/Master/customer'); ?>',
            method: "POST",
            success: function(resp) {
                console.log(resp);
                $('#data').html(resp);
                $('#loader').hide();
                $('#datatable-customer').DataTable({
                    responsive: true,
                    "language": {
                        "search": "cari",
                        "searchPlaceholder": "",
                        "lengthMenu": "Tampilkan _MENU_ data per halaman",
                        "zeroRecords": "Nothing found - sorry",
                        "info": "Halaman : _PAGE_ dari _PAGES_",
                        "infoEmpty": "Data tidak ada",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                    },
                });
            }
        });
    }

    function KategoriMesin() {

    }
</script>