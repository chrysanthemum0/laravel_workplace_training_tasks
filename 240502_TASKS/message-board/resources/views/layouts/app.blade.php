<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <header>
        <div class="container">
            <a class="brand" href="/">{{ config('app.name') }}</a>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

</body>
</html>
