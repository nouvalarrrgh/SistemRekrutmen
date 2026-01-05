<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $__env->yieldContent('title', 'Sistem Penerimaan Karyawan'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('themes/plugins/bootstrap/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('themes/plugins/fontawesome-free/css/all.min.css')); ?>">
   <!-- Datatable -->
  <link href="<?php echo e(asset('themes/plugins/datatables/DataTables-1.11.4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

   <!-- Select2 -->
   <link rel="stylesheet" href="<?php echo e(asset('themes/plugins/select2/css/select2.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('themes/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('themes/plugins/jquery-ui/jquery-ui.css')); ?>">

   <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('themes/dist/css/adminlte.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('themes/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<?php echo $__env->yieldContent('custom_css'); ?>
<style>
  @font-face
  {
    font-family: 'Poppins';
    src: url('<?php echo e(asset('themes/font/Poppins/Poppins-Regular.ttf')); ?>);
  }
  aside{
    background: #8199AE;
  }
  body{
    font-family: 'Poppins';
    background-color: #F0F0F0;
  }
  footer{
    bottom: 0;
    position: fixed;
    width: 100%;
  }
  @media  screen and (min-width:992px){
    body{font-size: 14px;}
  }

  @media  screen and (max-width:991px){
    body{font-size: 12px;}
  }

</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php echo $__env->make('layouts.adminlte.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

  <footer class="main-footer">
    <span>PT Surindo Teguh Gemilang</span>
    <span class="float-right"><strong> Sistem Penerimaan Karyawan  &copy; <script>document.write(new Date().getFullYear());</script> .</strong></span>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('themes/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('themes/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('themes/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('themes/plugins/select2/js/select2.min.js')); ?>"></script>
<!-- DataTable-->

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo e(asset('themes/plugins/daterangepicker/daterangepicker.js')); ?>"></script>

<script src="<?php echo e(asset('themes/plugins/datatables/DataTables-1.11.4/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/plugins/datatables/DataTables-1.11.4/js/dataTables.bootstrap4.min.js')); ?>"></script>


<!-- Slimscroll -->

<!-- FastClick -->

<!-- AdminLTE App -->
<script src="<?php echo e(asset('themes/dist/js/adminlte.js')); ?>"></script>

 <!-- Font Awesome -->
 <script type="text/javascript" src="<?php echo e(asset('themes/plugins/fontawesome-free/js/all.min.js')); ?>"></script>

 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
     </script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tugasakhir-master\resources\views/layouts/adminlte/main.blade.php ENDPATH**/ ?>