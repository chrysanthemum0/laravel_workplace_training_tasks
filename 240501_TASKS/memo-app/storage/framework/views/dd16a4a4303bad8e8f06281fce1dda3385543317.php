<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo APP</title>
</head>
    <body>
        <h1>メモ一覧</h1>
        <p><a href="<?php echo e(route('memos.create')); ?>">+メモ新規作成</a></p>
        <?php $__currentLoopData = $memos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            <a href="<?php echo e(route('memos.show', $memo->id)); ?>">
                <?php echo e($memo->title); ?>

            </a>
        </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel-kadai\memo-app\resources\views/index.blade.php ENDPATH**/ ?>