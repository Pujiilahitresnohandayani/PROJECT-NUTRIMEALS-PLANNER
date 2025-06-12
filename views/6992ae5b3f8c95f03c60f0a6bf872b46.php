

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Blog Posts</h1>
    <a href="<?php echo e(route('admin.blogs.create')); ?>" class="btn btn-primary">Add Blog</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success mt-2"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table mt-3">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($blog->title); ?></td>
                <td><?php echo e(Str::limit($blog->content, 50)); ?></td>
                <td>
                    <?php if($blog->image): ?>
                        <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" width="100">
                    <?php else: ?>
                        No Image
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('admin.blogs.show', $blog->id)); ?>" class="btn btn-info">Show</a>
                    <a href="<?php echo e(route('admin.blogs.edit', $blog->id)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('admin.blogs.destroy', $blog->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kasih\Downloads\NutriMealsPlanner\resources\views/admin/blogs/index.blade.php ENDPATH**/ ?>