<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals TOP</title>
</head>
<body>
    <h1>動物一覧</h1>
    @foreach ($animals as $animal)
    <p><a href="/animals/{{ $animal->id }}">{{$animal->name}}</a></p>
    @endforeach
</body>
</html>
