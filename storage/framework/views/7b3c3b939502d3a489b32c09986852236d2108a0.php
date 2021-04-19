
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>All Laravel - <?php echo $__env->yieldContent('title'); ?></title>

<link href="<?php echo e(asset('css/dashboard_home.css')); ?>" rel="stylesheet" type="text/css" >
<!------ Include the above in your HEAD tag ---------->
        <!--===================   Header   =======================-->
      <header class="header">
         <?php echo $__env->make('admin.layouts.top_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </header>
      <div class="main">
         <div class="row" id="allocate_dashboard"> 
            <div class="col-2">
               <!------ left menu ------> 

               <?php echo $__env->make('admin.layouts.left_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <div class="col-10">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
          </div> 
 <script type="text/javascript" src="<?php echo e(URL::asset('js/dashboard_home.js')); ?>"></script>
  <?php /**PATH /var/www/html/LARAVEL8/resources/views/admin/layouts/default.blade.php ENDPATH**/ ?>