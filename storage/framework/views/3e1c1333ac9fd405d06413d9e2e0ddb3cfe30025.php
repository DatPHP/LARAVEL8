<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<form method="POST" action="<?php echo e(route('admin.login')); ?>">
    <?php echo csrf_field(); ?>
    <h1>Admin</h1>
    <input type="text" name="email" placeholder="Nhập địa chỉ email">
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>
<?php /**PATH /var/www/html/LARAVEL8/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>