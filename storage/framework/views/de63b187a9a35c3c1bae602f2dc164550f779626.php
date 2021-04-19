<?php $__env->startSection('title', 'Tạo tài khoản mới'); ?>

<?php $__env->startSection('content'); ?>
   <?php echo Form::open(array('url' => '/user/create', 'class' => 'form-horizontal')); ?>

   <?php echo e(csrf_field()); ?>


       <?php if(isset($id)): ?>
       <?php echo Form::hidden('id', $id); ?>

       <?php endif; ?>
      <div class="form-group">
         <?php echo Form::label('name', 'Họ và tên', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
             <?php echo Form::text('name', $user['name'] ?? '', array('class' => 'form-control', 'placeholder' => 'Nhap Ho Va Ten')); ?>                      
         </div>

      </div>

      <div class="form-group">
         <?php echo Form::label('email', 'Địa chỉ email', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
            <?php echo Form::email('email', $user['email']?? '', array('class' => 'form-control', 'placeholder' => 'Địa chỉ email thật để nhận phản hồi')); ?>

         </div>
      </div>

      <div class="form-group">

            <?php echo e(Form::label('password', 'Password',array('class' => 'col-sm-2 control-label'))); ?>


            <div class="col-sm-10">
            <?php echo e(Form::text('password',$user['password']?? '', array('class' => 'form-control','placeholder' => 'Nhap password'))); ?>

            </div>
      </div>


      <div class="form-group">
         <?php echo Form::label('website', 'Nhập website', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
             <?php echo Form::text('website', $user['website']?? '' , array('class' => 'form-control', 'placeholder' => 'Nhap website')); ?>                      
         </div>
      </div>


      <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
            <?php echo Form::submit('Gửi tin nhắn', array('class' => 'btn btn-success')); ?>

         </div>
      </div>

   <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LARAVEL8/resources/views/admin/user/create.blade.php ENDPATH**/ ?>