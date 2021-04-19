<?php $__env->startSection('title', 'Ví dụ đầu tiên về Blade template'); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

    <p>Phần phụ của sidebar.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Phần nội dung chính của trang ở đây.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LARAVEL8/resources/views/fontend/first-blade-example.blade.php ENDPATH**/ ?>