<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Spots</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $spot->title }}
        </h1>
        <div class="content">
            <div class="content__spot">
                <h3>本文</h3>
                <p>{{ $spot->body }}</p>
            </div>
            <div class="content__congetion">
                <h3>混雑度</h3>
                <p>{{ $spot->congetion }}</p>
            </div>
            <div class="content__access">
                <h3>アクセスの良さ</h3>
                <p>{{ $spot->access }}</p>
            </div>
            <div class="content__minute">
                <h3>辿り着くまでの時間</h3>
                <p>{{ $spot->access }}分</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
