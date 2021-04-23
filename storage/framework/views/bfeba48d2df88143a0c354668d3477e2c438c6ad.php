<!-- Fixed navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">All Laravel TEnv</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ví dụ <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/first-blade-example">Ví dụ Blade 1</a></li>
                        <li><a href="/second-blade-example">Ví dụ Blade 2</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Liên hệ</a></li>
            </ul>
        </div><!--/.nav-collapse -->

        <h1> Hello <?php echo e($username ?? ''); ?>

    </div>
</nav><?php /**PATH /var/www/html/LARAVEL8/resources/views/layouts/menu.blade.php ENDPATH**/ ?>