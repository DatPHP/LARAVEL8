<?php $__env->startSection('title', 'All Laravel - Liên hệ với chúng tôi'); ?>

<?php $__env->startSection('content'); ?>
   <?php echo Form::open(array('url' => '/contact', 'class' => 'form-horizontal')); ?>

      <div class="form-group">
         <?php echo Form::label('name', 'Họ và tên', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
            <?php echo Form::text('name', isset($name)?$name:'', array('class' => 'form-control', 'placeholder' => 'Nhập họ tên đầy đủ')); ?>

         </div>
      </div>

      <div class="form-group">
         <?php echo Form::label('email', 'Địa chỉ email', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
            <?php echo Form::email('email', isset($email)?$email:'', array('class' => 'form-control', 'placeholder' => 'Địa chỉ email thật để nhận phản hồi')); ?>

         </div>
      </div>

      <div class="form-group">
         <?php echo Form::label('title', 'Tiêu đề', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
            <?php echo Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Tiêu đề tin nhắn')); ?>

         </div>
      </div>

      <div class="form-group">
         <?php echo Form::label('content', 'Nội dung liên hệ', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
            <?php echo Form::textarea('content', '', array('class' => 'form-control', 'placeholder' => 'Nội dung không quá 200 từ', 'rows' => '3')); ?>

         </div>
      </div>

      <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
            <?php echo Form::submit('Gửi tin nhắn', array('class' => 'btn btn-success')); ?>

         </div>
      </div>
   <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LARAVEL8/resources/views/fontend/contact.blade.php ENDPATH**/ ?>