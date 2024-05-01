<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo APP</title>
</head>
    <body>
        <h1>メモ新規作成</h1>
        <form action="{{ route('memos.store') }}" method="post" >
            @csrf
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
