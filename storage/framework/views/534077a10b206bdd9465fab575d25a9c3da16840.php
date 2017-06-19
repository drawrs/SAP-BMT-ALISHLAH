
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title> <?php echo $__env->yieldContent('page'); ?> <?php echo e(__("site.title")); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(url('assets/css/bootstrap.css')); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo e(url('assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo e(url('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/style-responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('css/style-custom.css')); ?>" rel="stylesheet">
    <!-- <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script> -->
    <link rel="stylesheet" href="<?php echo e(url('assets/css/to-do.css')); ?>">
    <link href="<?php echo e(url('toastr/build/toastr.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo e(url('select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('select2/css/select2-bootstrap.css')); ?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .black-bg {
        background: #5fd500;
      }
    </style>

  </head>

  <body>

  <section id="container" >
      <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper"><!--  site-min-height -->
            <?php echo $__env->yieldContent('main-content'); ?>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(url('assets/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery-ui-1.9.2.custom.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery.ui.touch-punch.min.js')); ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo e(url('assets/js/jquery.dcjqaccordion.2.7.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery.scrollTo.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery.nicescroll.js')); ?>" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo e(url('assets/js/common-scripts.js')); ?>"></script>
    <script src="<?php echo e(url('toastr/build/toastr.min.js')); ?>"></script>

    <!-- select2 -->
    <script src="<?php echo e(url('select2/js/select2.full.js')); ?>"></script>
    <!--script for this page-->

  <?php echo $__env->yieldContent('bottscript'); ?>
  </body>
</html>