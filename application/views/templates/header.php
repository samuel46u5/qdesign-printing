<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- icon qdesign -->
    <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/img/logo_q.png">
    <link rel="shortcut icon" href="<?= base_url('assets'); ?>/img/logo_q.ico">



    <!-- vendor css -->
    <link href="<?= base_url(); ?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.demo.css">

    <!-- sweetalert2 -->
    <script src="<?= base_url(); ?>assets/lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/lib/sweetalert2/sweetalert2.min.css">

    <!-- datatables -->
    <script src="<?= base_url(); ?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <!-- end datatables -->


    <!-- ini harusnya diletakkan di footer -->
    <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/feather-icons/feather.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/prismjs/prism.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/select2/js/select2.min.js"></script>


</head>

<body>

    <?php if ($this->session->flashdata('sukses')) : ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                type: 'success',
                title: '<?= $this->session->flashdata('sukses') ?>'
            })
        </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('gagal')) : ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                type: 'error',
                title: '<?= $this->session->flashdata('gagal') ?>'
            })
        </script>
    <?php endif; ?>