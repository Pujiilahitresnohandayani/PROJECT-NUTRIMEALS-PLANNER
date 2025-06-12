

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<div class="hero-section text-center text-white d-flex align-items-center justify-content-center"
     style="background: url('<?php echo e(asset('images/hero3.jpg')); ?>') center/cover no-repeat; 
            height: 500px; position: relative; margin-top: -24px;">
    <div class="overlay" style="background: rgba(0, 0, 0, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
    <div class="container position-relative">
        <h1 class="fw-bold">Temukan Info Menarik Disini</h1>
        <p class="lead">Temukan pilihan makanan sehat setiap hari untuk gaya hidup lebih baik!</p>
    </div>
</div>


<div class="container mt-4">
    <h1 class="text-left mb-4">Our Blog</h1>
    
    <div class="row">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($blog->title); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($blog->content, 100)); ?></p>
                        <a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<footer class="bg-success text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">&copy; <?php echo e(date('Y')); ?> NutriMeals Planner. All Rights Reserved.</p>
        <p class="mb-0">
            <a href="<?php echo e(url('/about')); ?>" class="text-white text-decoration-none mx-2">Tentang Kami</a> |
            <a href="<?php echo e(url('/contact')); ?>" class="text-white text-decoration-none mx-2">Kontak</a> |
            <a href="<?php echo e(url('/privacy')); ?>" class="text-white text-decoration-none mx-2">Kebijakan Privasi</a>
        </p>
    </div>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad\Downloads\28 - Ndevcode_NutriMeals Planner\28 - Ndevcode_NutriMeals Planner\resources\views/blog/index.blade.php ENDPATH**/ ?>