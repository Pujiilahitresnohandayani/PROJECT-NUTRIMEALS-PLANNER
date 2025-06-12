

<?php $__env->startSection('content'); ?>
<div class="container">
    
<h3>Daftar Pengingat Makan</h3>
<a href="<?php echo e(route('pengingat.create')); ?>" class="btn btn-primary mb-3">Tambah Pengingat</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Waktu</th>
            <th>Jenis</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $reminders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($r->reminder_time); ?></td>
                <td><?php echo e(ucfirst($r->meal_type)); ?></td>
                <td>
                    <?php if($r->active): ?>
                        <span class="badge bg-success">Aktif</span>
                    <?php else: ?>
                        <span class="badge bg-secondary">Nonaktif</span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('pengingat.edit', $r->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('pengingat.destroy', $r->id)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus pengingat ini?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad\Downloads\28 - Ndevcode_NutriMeals Planner\28 - Ndevcode_NutriMeals Planner\resources\views/pengingat/index.blade.php ENDPATH**/ ?>