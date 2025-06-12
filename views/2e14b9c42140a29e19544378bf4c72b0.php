

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center mb-4">Detail Makanan</h1>
    
    <div class="card shadow-sm">
        <div class="card-header text-center bg-success text-white fw-bold">
            <?php echo e($meal->day); ?>

        </div>
        <div class="card-body">
            <img src="<?php echo e(asset('storage/' . $meal->image_1)); ?>" class="img-fluid rounded mb-3 w-100 " style="height: 400px; object-fit: contain;">
            <div class="text-center">
                <h3 class="text-center mt-3"><?php echo e($meal->menu_1); ?></h3>
            </div>

           

            <div class="row justify-content-center">
                <!-- Kolom Kiri: Cara Membuat -->
                <div class="col-md-6 d-flex align-items-center flex-column">
                    <h5 class="fw-bold">Cara Membuat:</h5>
                    <?php
                        $langkah = explode('|', $meal->membuat_menu_1);
                    ?>
                    <ol>
                        <?php $__currentLoopData = $langkah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($step); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>

                <!-- Kolom Kanan: Bahan-bahan -->
                <div class="col-md-6 d-flex align-items-center flex-column">
                    <h5 class="fw-bold">Bahan-bahan:</h5>
                    <?php
                        $bahan = explode('|', $meal->bahan_menu_1);
                    ?>
                    <ol>
                        <?php $__currentLoopData = $bahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>

            <hr>

            <div class="text-center mt-5">
                <img src="<?php echo e(asset('storage/' . $meal->image_2)); ?>" class="img-fluid rounded mb-3 w-100 " style="height: 400px; object-fit: contain;">
                <h3 class="text-center mt-4"><?php echo e($meal->menu_2); ?></h3>
            </div>
            <div class="row justify-content-center">
                <!-- Kolom Kiri: Cara Membuat -->
                <div class="col-md-6 d-flex align-items-center flex-column">
                    <h5 class="fw-bold">Cara Membuat:</h5>
                    <?php
                        $langkah = explode('|', $meal->membuat_menu_2);
                    ?>
                    <ol>
                        <?php $__currentLoopData = $langkah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($step); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>

                <!-- Kolom Kanan: Bahan-bahan -->
                <div class="col-md-6 d-flex align-items-center flex-column">
                    <h5 class="fw-bold">Bahan-bahan:</h5>
                    <?php
                        $bahan = explode('|', $meal->bahan_menu_2);
                    ?>
                    <ol>
                        <?php $__currentLoopData = $bahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>

            <hr>

            <div class="text-center mt-5">
                <img src="<?php echo e(asset('storage/' . $meal->image_3)); ?>" class="img-fluid rounded mb-3 w-100 " style="height: 400px; object-fit: contain;">
                <h3 class="text-center mt-4"><?php echo e($meal->menu_3); ?></h3>
            </div>
            <div class="row justify-content-center">
                <!-- Kolom Kiri: Cara Membuat -->
                <div class="col-md-6 d-flex align-items-center flex-column">
                    <h5 class="fw-bold">Cara Membuat:</h5>
                    <?php
                        $langkah = explode('|', $meal->membuat_menu_3);
                    ?>
                    <ol>
                        <?php $__currentLoopData = $langkah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($step); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>

                <!-- Kolom Kanan: Bahan-bahan -->
                <div class="col-md-6 d-flex align-items-center flex-column">
                    <h5 class="fw-bold">Bahan-bahan:</h5>
                    <?php
                        $bahan = explode('|', $meal->bahan_menu_3);
                    ?>
                    <ol>
                        <?php $__currentLoopData = $bahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <a href="<?php echo e(route('perencanaan')); ?>" class="btn btn-primary mt-3">Kembali</a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kasih\Downloads\NutriMealsPlanner\resources\views/perencanaan/show.blade.php ENDPATH**/ ?>