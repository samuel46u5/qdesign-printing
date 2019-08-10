<!-- berisi fungsi untuk memangil menu yang diklik -->
<script type="text/javascript">
    //master customer
    function Customer() {
        alert('customer ini home js');
        // $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('d/Master/customer'); ?>',
            method: "POST",
            success: function(resp) {
                $('#data').html(resp);
                // $('#loader').hide();
                $('#datatable').DataTable();
            }
        });
    }

    function KategoriMesin() {

    }
</script>