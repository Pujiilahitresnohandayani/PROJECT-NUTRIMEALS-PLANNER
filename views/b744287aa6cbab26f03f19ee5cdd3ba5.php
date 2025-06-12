<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Brand Logo" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav me-auto">
    </ul>

    <!-- Centered Links -->
    <!-- Centered Links -->
        <ul class="navbar-nav mx-auto">
            <?php if(Auth::check()): ?>
                <?php if(Auth::user()->role == 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(route('admin.meal_plans.index')); ?>">Data Perencanaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(route('admin.blogs.index')); ?>">Data Blog</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(route('perencanaan')); ?>">Perencanaan Makanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(route('pengingat.index')); ?>">Pengingat</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                        Notifikasi
                        <?php if(auth()->user()->unreadNotifications->count() > 0): ?>
                            <span class="badge bg-danger"><?php echo e(auth()->user()->unreadNotifications->count()); ?></span>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php $__empty_1 = true; $__currentLoopData = auth()->user()->notifications->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <?php echo e($notification->data['message']); ?> <br>
                                    <small><?php echo e($notification->created_at->diffForHumans()); ?></small>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li><span class="dropdown-item">Tidak ada notifikasi</span></li>
                        <?php endif; ?>
                    </ul>
                </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(route('blog.index')); ?>">Blog</a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>


    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto">
        <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
            <?php endif; ?>
        <?php else: ?>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?>

                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('profile.show')); ?>">
                        <?php echo e(__('Profile')); ?>

                    </a>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
        <?php endif; ?>
    </ul>
</div>

            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\kasih\Downloads\NutriMealsPlanner\resources\views/layouts/app.blade.php ENDPATH**/ ?>