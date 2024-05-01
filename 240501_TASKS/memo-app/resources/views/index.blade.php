<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo APP</title>
</head>
    <body>
        <h1>メモ一覧</h1>
        <p><a href="{{ route('memos.create') }}">+メモ新規作成</a></p>
        @foreach ($memos as $memo)
        <p>
            <a href="{{ route('memos.show', $memo->id) }}">
                {{ $memo->title }}
            </a>
        </p>
    @endforeach
    </body>
</html>
