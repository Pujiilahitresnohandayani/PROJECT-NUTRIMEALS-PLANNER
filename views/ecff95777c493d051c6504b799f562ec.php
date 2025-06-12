

<?php $__env->startSection('content'); ?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm" style="width: 400px;">
        <div class="card-body text-center">
            <h1 class="mb-4">Profil Saya</h1>
            <h4>Nama :<?php echo e($user->name); ?></h4>
            <p><strong>Email:</strong> <?php echo e($user->email); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kasih\Downloads\NutriMealsPlanner\resources\views/profile/show.blade.php ENDPATH**/ ?>