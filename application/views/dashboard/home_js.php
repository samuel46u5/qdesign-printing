<!-- berisi fungsi untuk memangil menu yang diklik -->
<script type="text/javascript">
    function reset_menu() {
        // $("#menu-samping").load("<?= base_url('view/dashboard/menu.php') ?>");
        // alert('reset menu');
        // $('.ini-menu').removeAttr('active');
        // $('.ini-submenu').removeAttr('active');
        $('.ini-menu').removeAttr('active show');
        $('.ini-submenu').removeAttr('active');
    }


    //admin Dashboard
    function Dashboard() {
        alert('dashboard');
        reset_menu();
        $('#menu-Admin').attr("class", "nav-item with-sub active show");
        $('#submenu-Dashboard').attr("class", "active");
        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('Admin/index'); ?>',
            method: "POST",
            success: function(resp) {
                $('#data').html(resp);
                $('#loader').hide();
                $('#example2').DataTable();
            }
        });
    }

    //admin Dashboard
    function Role() {
        // alert('role');
        reset_menu();
        $('#menu-Admin').attr("class", "nav-item with-sub active show");
        $('#submenu-Role').attr("class", "active");
        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('Admin/role'); ?>',
            method: "POST",
            success: function(resp) {
                $('#data').html(resp);
                $('#loader').hide();
                $('#example2').DataTable();
            }
        });
    }

    //admin Dashboard
    function Menu() {
        // alert('role');
        reset_menu();
        $('#menu-Admin').attr("class", "nav-item with-sub active show");
        $('#submenu-Menu').attr("class", "active");
        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('Admin/menu'); ?>',
            method: "POST",
            success: function(resp) {
                $('#data').html(resp);
                $('#loader').hide();
                $('#datatable').DataTable();
            }
        });
    }

    //admin Dashboard
    function SubMenu() {
        // alert('role');
        reset_menu();
        $('#menu-Admin').attr("class", "nav-item with-sub active show");
        $('#submenu-SubMenu').attr("class", "active");
        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('Admin/submenu'); ?>',
            method: "POST",
            success: function(resp) {
                $('#data').html(resp);
                $('#loader').hide();
                $('#datatable').DataTable();
            }
        });
    }




    //master customer
    function Customer() {
        // alert('customer ini home js');
        reset_menu();
        $('#menu-Master').attr("class", "nav-item with-sub active show");
        $('#submenu-Customer').attr("class", "active");

        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('d/Master/customer'); ?>',
            method: "POST",
            success: function(resp) {
                // console.log(resp);
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

    //master customer
    function Supplier() {
        // alert('customer ini home js');
        reset_menu();
        $('#menu-Master').attr("class", "nav-item with-sub active show");
        $('#submenu-Supplier').attr("class", "active");

        $('#loader').show();
        $.ajax({
            url: '<?php echo base_url('d/Master/supplier'); ?>',
            method: "POST",
            success: function(resp) {
                // console.log(resp);
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