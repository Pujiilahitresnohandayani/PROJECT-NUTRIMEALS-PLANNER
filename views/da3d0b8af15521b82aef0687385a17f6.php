

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<div class="hero-section text-center text-white d-flex align-items-center justify-content-center"
     style="background: url('<?php echo e(asset('images/hero2.jpg')); ?>') center/cover no-repeat; 
            height: 500px; position: relative; margin-top: -24px;">
    <div class="overlay" style="background: rgba(0, 0, 0, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
    <div class="container position-relative">
        <h1 class="fw-bold">Perencanaan Makanan Sehat</h1>
        <p class="lead">Temukan pilihan makanan sehat setiap hari untuk gaya hidup lebih baik!</p>
    </div>
</div>

<!-- 3 Card Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white shadow-sm" style="background: url('<?php echo e(asset('images/slider1.png')); ?>') center/cover no-repeat; height: 200px;">
                <!-- <div class="card-body d-flex align-items-center justify-content-center text-center" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
                    <h4 class="fw-bold">Sarapan Sehat</h4>
                </div> -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white shadow-sm" style="background: url('<?php echo e(asset('images/slider2.png')); ?>') center/cover no-repeat; height: 200px;">
                <!-- <div class="card-body d-flex align-items-center justify-content-center text-center" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
                    <h4 class="fw-bold">Makan Siang Bergizi</h4>
                </div> -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white shadow-sm" style="background: url('<?php echo e(asset('images/slider3.png')); ?>') center/cover no-repeat; height: 200px;">
                <!--   -->
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4">
    <h1 class="text-left mb-4">Perencanaan Makanan</h1>

    <label>Diet Type</label>
        <form method="GET" action="<?php echo e(route('perencanaan')); ?>" style="margin-bottom: 20px;">
    <label for="diet_type">Filter Diet:</label>
    <select name="diet_type" id="diet_type">
        <option value="">-- Semua --</option>
        <option value="vegan" <?php echo e(request('diet_type') == 'vegan' ? 'selected' : ''); ?>>Vegan</option>
        <option value="gluten-free" <?php echo e(request('diet_type') == 'gluten-free' ? 'selected' : ''); ?>>Gluten-Free</option>
        <option value="low-carb" <?php echo e(request('diet_type') == 'low-carb' ? 'selected' : ''); ?>>Low-Carb</option>
        <option value="vegetarian" <?php echo e(request('diet_type') == 'vegetarian' ? 'selected' : ''); ?>>Vegetarian</option>
    </select>
    <button type="submit">Filter</button>
</form>


    <div class="row">
        <?php $__currentLoopData = $mealPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <a href="<?php echo e(route('perencanaan.show', $meal->id)); ?>" class="text-decoration-none text-black">
                    <div class="card-header text-center bg-success text-white fw-bold">
                        <?php echo e($meal->day); ?>

                    </div>
                    <div class="card-body text-center">
                        <img src="<?php echo e(asset('storage/' . $meal->image_1)); ?>" class="img-fluid rounded mb-2" style="height: 150px; object-fit: cover;">
                        <h5><?php echo e($meal->menu_1); ?></h5>
                        <h5><?php echo e($meal->menu_2); ?></h5>
                        <h5><?php echo e($meal->menu_3); ?></h5>
                    </div>
                </a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad\Downloads\28 - Ndevcode_NutriMeals Planner\28 - Ndevcode_NutriMeals Planner\resources\views/perencanaan/index.blade.php ENDPATH**/ ?>