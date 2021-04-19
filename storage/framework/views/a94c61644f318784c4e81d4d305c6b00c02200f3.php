<?php $__env->startSection('title', 'Danh sách tin tức'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $news_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3"> 
      <?php if($loop->first): ?>
        <?php echo $__env->make('layouts.news-item', ['title' => $news['title'], 'content' => $news['content'], 'post_date' => $news['post_date'], 'class' => 'success'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
        <?php echo $__env->make('layouts.news-item', ['title' => $news['title'], 'content' => $news['content'], 'post_date' => $news['post_date'], 'class' => 'primary'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LARAVEL8/resources/views/fontend/news-list.blade.php ENDPATH**/ ?>