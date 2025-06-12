

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-left my-3"><?php echo e($blog->title); ?></h1>
    <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" class="img-fluid mb-4" style="width: 100%; height: 400px; object-fit: cover;">
    <p><?php echo e($blog->content); ?></p>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kasih\Downloads\NutriMealsPlanner\resources\views/blog/show.blade.php ENDPATH**/ ?>