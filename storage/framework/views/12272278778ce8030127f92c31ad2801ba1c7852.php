<?php $__env->startSection('title', 'Ví dụ thứ hai về Blade template'); ?>

<?php $__env->startSection('content'); ?>
    <p>
      <h3>Comment đã được chuyển đổi ký tự đặc biệt chống tấn công XSS</h3>
      <?php echo e($comment); ?>

    </p>
    <p>
      <h3>Comment chưa được chuyển đổi ký tự đặc biệt</h3>
      <?php echo $comment; ?>

    </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LARAVEL8/resources/views/fontend/second-blade-example.blade.php ENDPATH**/ ?>