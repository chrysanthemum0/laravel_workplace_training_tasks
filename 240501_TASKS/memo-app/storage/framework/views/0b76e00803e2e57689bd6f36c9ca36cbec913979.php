<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo APP</title>
</head>
    <body>
        <h1>メモの編集</h1>
        <form action="<?php echo e(route('memos.update', $memo->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title"
                    value="<?php echo e($memo->title); ?>"></dd>
                <dt>著者</dt>
                <dd><textarea name="content" value="<?php echo e($memo->content); ?>"
                    cols="22" rows="5"></textarea></dd>
            <button type="submit">更新する</button>
        </form>
        <hr>
        <a href="/">キャンセル</a>
    </body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel-kadai\memo-app\resources\views/edit.blade.php ENDPATH**/ ?>