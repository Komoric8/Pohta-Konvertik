<!DOCTYPE html>
<html lang="en">
@php
use Illuminate\Support\Facades\Auth;
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конвертик</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body> 
    <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
    <img src="../images/letter.png" alt="Описание" width="50">
    <div style="display: flex; gap: 10px;">
        <button><a href="/">Главная</a></button>
        @if (Auth::check()) 
            <button><a href="{{route('lk')}}">Кабинет</a></button>
            <button><a href="{{route('logout')}}">Выйти</a> </button>
           
        @else
             <button><a href="{{route('showLoginForm')}}">Войти</a></button>
             <button><a href="{{route('showRegForm')}}">Регистрация</a></button>
        @endif
        
       
    </div>
    </div>
    <div class="content">@yield('content')</div>
</body>
</html>
