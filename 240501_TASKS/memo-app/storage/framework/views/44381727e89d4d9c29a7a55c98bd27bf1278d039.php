<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo APP</title>
</head>
    <body>
        <h1>メモ新規作成</h1>
        <form action="<?php echo e(route('memos.store')); ?>" method="post" >
            <?php echo csrf_field(); ?>
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title"></dd>
                <dt>本文</dt>
                <dd><textarea name="content" cols="22" rows="5"></textarea></dd>
            </dl>
            <button type="submit">登録する</button>
        </form>
        <hr>
        <a href="/">キャンセル</a>
    </body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel-kadai\memo-app\resources\views/create.blade.php ENDPATH**/ ?>