<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal INFO</title>
</head>
<body>
    <h1>動物詳細</h1>
    <h2><?php echo e($animal->name); ?></h2>
    <p>説明 : <?php echo e($animal->description); ?></p>
    <p>画像ファイル名 : <?php echo e($animal->image); ?></p>
    <p><img src="/images/corgi.png" width="200" height="200"></p>
    <a href="/">戻る</a>
</body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel-kadai\picture-book\resources\views/show.blade.php ENDPATH**/ ?>