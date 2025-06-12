

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Meal Plans</h1>
    <a href="<?php echo e(route('admin.meal_plans.create')); ?>" class="btn btn-primary">Add Meal Plan</a>
    <table class="table mt-3">
        <tr>
            <th>Day</th>
            <th>Menu 1</th>
            <th>Menu 2</th>
            <th>Menu 3</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $mealPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mealPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($mealPlan->day); ?></td>
                <td><?php echo e($mealPlan->menu_1); ?></td>
                <td><?php echo e($mealPlan->menu_2); ?></td>
                <td><?php echo e($mealPlan->menu_3); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.meal_plans.show', $mealPlan->id)); ?>" class="btn btn-info">Show</a>
                    <a href="<?php echo e(route('admin.meal_plans.edit', $mealPlan->id)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('admin.meal_plans.destroy', $mealPlan->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad\Downloads\28 - Ndevcode_NutriMeals Planner\28 - Ndevcode_NutriMeals Planner\resources\views/admin/meal_plans/index.blade.php ENDPATH**/ ?>