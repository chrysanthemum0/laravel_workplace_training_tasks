<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals TOP</title>
</head>
<body>
    <h1>動物一覧</h1>
    <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><a href="/animals/<?php echo e($animal->id); ?>"><?php echo e($animal->name); ?></a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel-kadai\picture-book\resources\views/index.blade.php ENDPATH**/ ?>