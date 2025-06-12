

<?php $__env->startSection('content'); ?>

<style>
  form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #f9f9f9;
  }
  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
  }
  select, input[type="time"], input[type="checkbox"] {
    width: 100%;
    padding: 8px 6px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="checkbox"] {
    width: auto;
    margin-right: 6px;
  }
  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  button:hover {
    background-color: #0056b3;
  }
</style>

<form action="<?php echo e(isset($reminder) ? route('pengingat.update', $reminder) : route('pengingat.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if(isset($reminder)): ?> 
        <?php echo method_field('PUT'); ?> 
    <?php endif; ?>

    <label for="meal_type">Jenis Makan</label>
    <select name="meal_type" id="meal_type" required>
        <option value="sarapan" <?php echo e(isset($reminder) && $reminder->meal_type == 'sarapan' ? 'selected' : ''); ?>>Sarapan</option>
        <option value="makan siang" <?php echo e(isset($reminder) && $reminder->meal_type == 'makan siang' ? 'selected' : ''); ?>>Makan Siang</option>
        <option value="makan malam" <?php echo e(isset($reminder) && $reminder->meal_type == 'makan malam' ? 'selected' : ''); ?>>Makan Malam</option>
    </select>

    <label for="reminder_time">Jam Pengingat</label>
    <input type="time" name="reminder_time" id="reminder_time" value="<?php echo e($reminder->reminder_time ?? ''); ?>" required>

    <label>
        <input type="checkbox" name="active" value="1" <?php echo e(isset($reminder) && $reminder->active ? 'checked' : ''); ?>>
        Status Aktif
    </label>

    <button type="submit">Simpan</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kasih\Downloads\NutriMealsPlanner\resources\views/pengingat/create.blade.php ENDPATH**/ ?>