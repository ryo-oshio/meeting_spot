<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            　index
        </x-slot>
        <body>
            <h1>Blog Name</h1>
            <div class='spots'>
                @foreach ($spots as $spot)
                    <div class='spot'>
                        <h2 class='title'>
                            <a href="/spots/{{ $spot->id }}">{{ $spot->title }}</a>
                        </h2>
                        <p class='body'>{{ $spot->body }}</p>
                    </div>
                @endforeach
            </div>
            <a href='/spots/create'>create</a>
        </body>
    </x-app-layout>
</html>