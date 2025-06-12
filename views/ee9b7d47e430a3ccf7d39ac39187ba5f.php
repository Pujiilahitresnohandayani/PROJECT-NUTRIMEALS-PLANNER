

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Edit Perencanaan Makanan</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.meal_plans.update', $mealPlan->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="day" class="form-label">Hari</label>
            <input type="text" name="day" id="day" class="form-control" value="<?php echo e(old('day', $mealPlan->day)); ?>" required>
        </div>

        <?php for($i = 1; $i <= 3; $i++): ?>
            <div class="border p-3 mb-3">
                <h5>Menu <?php echo e($i); ?></h5>
                <div class="mb-3">
                    <label for="menu_<?php echo e($i); ?>" class="form-label">Nama Menu</label>
                    <input type="text" name="menu_<?php echo e($i); ?>" id="menu_<?php echo e($i); ?>" class="form-control" value="<?php echo e(old('menu_'.$i, $mealPlan['menu_'.$i])); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="image_<?php echo e($i); ?>" class="form-label">Gambar Menu</label>
                    <input type="file" name="image_<?php echo e($i); ?>" id="image_<?php echo e($i); ?>" class="form-control">
                    <?php if($mealPlan['image_'.$i]): ?>
                        <p>Gambar Saat Ini:</p>
                        <img src="<?php echo e(asset('storage/'.$mealPlan['image_'.$i])); ?>" alt="Menu <?php echo e($i); ?>" class="img-thumbnail" width="150">
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="membuat_menu_<?php echo e($i); ?>" class="form-label">Cara Membuat</label>
                    <textarea name="membuat_menu_<?php echo e($i); ?>" id="membuat_menu_<?php echo e($i); ?>" class="form-control" rows="3" required><?php echo e(old('membuat_menu_'.$i, $mealPlan['membuat_menu_'.$i])); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="bahan_menu_<?php echo e($i); ?>" class="form-label">Bahan-bahan</label>
                    <textarea name="bahan_menu_<?php echo e($i); ?>" id="bahan_menu_<?php echo e($i); ?>" class="form-control" rows="3" required><?php echo e(old('bahan_menu_'.$i, $mealPlan['bahan_menu_'.$i])); ?></textarea>
                </div>
            </div>
        <?php endfor; ?>

        <!-- Input untuk diet type -->
        <div class="mb-3">
            <label for="diet_type" class="form-label">Tipe Diet</label>
            <select name="diet_type" id="diet_type" class="form-select" required>
                <option value="">-- Pilih Tipe Diet --</option>
                <option value="vegan" <?php echo e(old('diet_type', $mealPlan->diet_type) == 'vegan' ? 'selected' : ''); ?>>Vegan</option>
                <option value="gluten-free" <?php echo e(old('diet_type', $mealPlan->diet_type) == 'gluten-free' ? 'selected' : ''); ?>>Gluten-Free</option>
                <option value="low-carb" <?php echo e(old('diet_type', $mealPlan->diet_type) == 'low-carb' ? 'selected' : ''); ?>>Low-Carb</option>
                <option value="vegetarian" <?php echo e(old('diet_type', $mealPlan->diet_type) == 'vegetarian' ? 'selected' : ''); ?>>Vegetarian</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo e(route('admin.meal_plans.index')); ?>" class="btn btn-secondary">Batal</a>
    </form>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad\Downloads\28 - Ndevcode_NutriMeals Planner\28 - Ndevcode_NutriMeals Planner\resources\views/admin/meal_plans/edit.blade.php ENDPATH**/ ?>