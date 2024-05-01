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
        <h2>{{ $memo->title }}</h2>
        <p id="content">{{ $memo->content }}</p>
        <p>{{ $memo->created_at }}</p>
        <a href="{{ route('memos.edit', $memo->id) }}">編集する</a>
        <a href="/">メモ一覧へ</a>
        <hr>

        <form action="{{ route('memos.destroy', $memo->id) }}" method="post" >
            @csrf
            @method('delete')
            <button type="submit">削除する</button>
        </form>
    </body>
</html>
