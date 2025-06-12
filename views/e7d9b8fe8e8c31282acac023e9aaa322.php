

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Detail Meal Plan</h2>
    <a href="<?php echo e(route('admin.meal_plans.index')); ?>" class="btn btn-secondary mb-3">Back</a>

    <table class="table">
        <tr>
            <th>Hari</th>
            <td><?php echo e($mealPlan->day); ?></td>
        </tr>
        <tr>
            <th>Menu </th>
            <td><?php echo e($mealPlan->menu_1); ?></td>
        </tr>
        <tr>
            <th>Gambar Menu </th>
            <td>
                <?php if($mealPlan->image_1): ?>
                    <img src="<?php echo e(asset('storage/' . $mealPlan->image_1)); ?>" width="150">
                <?php else: ?>
                    <p>No image</p>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>Cara Membuat </th>
            <td><?php echo e($mealPlan->membuat_menu_1); ?></td>
        </tr>
        <tr>
            <th>Bahan Bahan</th>
            <td><?php echo e($mealPlan->bahan_menu_1); ?></td>
        </tr>
        <tr>
            <th>Menu </th>
            <td><?php echo e($mealPlan->menu_2); ?></td>
        </tr>
        <tr>
            <th>Gambar Menu</th>
            <td>
                <?php if($mealPlan->image_2): ?>
                    <img src="<?php echo e(asset('storage/' . $mealPlan->image_2)); ?>" width="150">
                <?php else: ?>
                    <p>No image</p>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>Cara Membuat</th>
            <td><?php echo e($mealPlan->membuat_menu_2); ?></td>
        </tr>
        <tr>
            <th>Bahan Bahan</th>
            <td><?php echo e($mealPlan->bahan_menu_2); ?></td>
        </tr>
        <tr>
            <th>Menu</th>
            <td><?php echo e($mealPlan->menu_3); ?></td>
        </tr>
        <tr>
            <th>Gambar Menu</th>
            <td>
                <?php if($mealPlan->image_3): ?>
                    <img src="<?php echo e(asset('storage/' . $mealPlan->image_3)); ?>" width="150">
                <?php else: ?>
                    <p>No image</p>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>Cara Membuat</th>
            <td><?php echo e($mealPlan->membuat_menu_3); ?></td>
        </tr>
        <tr>
            <th>Bahan Bahan</th>
            <td><?php echo e($mealPlan->bahan_menu_3); ?></td>
        </tr>
        <tr>
            <th>Diet Type</th>
            <td><?php echo e($mealPlan->diet_type); ?></td>
        </tr>
    </table>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad\Downloads\28 - Ndevcode_NutriMeals Planner\28 - Ndevcode_NutriMeals Planner\resources\views/admin/meal_plans/show.blade.php ENDPATH**/ ?>