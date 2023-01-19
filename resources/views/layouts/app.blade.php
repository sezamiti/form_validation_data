<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('navbar')


<div class="container">
    <div class="d-flex flex-row">
        <img class="bg-warning rounded-pill" src="{{asset('img/person.svg')}}" alt="">
        <a class="p-2" href="/">Главная</a>
        <a class="p-2" href="/register">Регистрация</a>
    </div>
</div>


@livewire('register-form')


{{--@include('testbootstrap')--}}

@include('home-1')


@include('footer')
<livewire:scripts />
</body>
</html>
