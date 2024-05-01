<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo APP</title>
</head>
    <body>
        <h1>メモの編集</h1>
        <form action="{{ route('memos.update', $memo->id) }}" method="post">
            @csrf
            @method('patch')
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title"
                    value="{{ $memo->title }}"></dd>
                <dt>著者</dt>
                <dd><textarea name="content" value="{{ $memo->content }}"
                    cols="22" rows="5"></textarea></dd>
            <button type="submit">更新する</button>
        </form>
        <hr>
        <a href="/">キャンセル</a>
    </body>
</html>
