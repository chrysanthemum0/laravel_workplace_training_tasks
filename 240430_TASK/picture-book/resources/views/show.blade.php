<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal INFO</title>
</head>
<body>
    <h1>動物詳細</h1>
    <h2>{{ $animal->name }}</h2>
    <p>説明 : {{ $animal->description }}</p>
    <p>画像ファイル名 : {{ $animal->image }}</p>
    <p><img src="/images/corgi.png" width="200" height="200"></p>
    <a href="/">戻る</a>
</body>
</html>
