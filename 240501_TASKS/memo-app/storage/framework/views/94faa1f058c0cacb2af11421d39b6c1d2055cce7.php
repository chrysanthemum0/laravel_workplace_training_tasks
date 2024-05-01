<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Memo APP</title>
</head>
    <body>
        <h1>メモ詳細</h1>
        <h2><?php echo e($memo->title); ?></h2>
        <p id="content"><?php echo e($memo->content); ?></p>
        <p><?php echo e($memo->created_at); ?></p>
        <a href="<?php echo e(route('memos.edit', $memo->id)); ?>">編集する</a>
        <a href="/">メモ一覧へ</a>
        <hr>

        <form action="<?php echo e(route('memos.destroy', $memo->id)); ?>" method="post" >
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit">削除する</button>
        </form>
    </body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel-kadai\memo-app\resources\views/show.blade.php ENDPATH**/ ?>