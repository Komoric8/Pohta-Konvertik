@extends('base')

@section('content')
    <center>
        
    <h1>Почта Конвертик</h1>
        <h2>Личный кабинет</h2>
        @if ($user->role_id == 3) 
            <p>Сотрудник</p>
            <p>Табельный номер:{{ $user->id }}</p>
        @endif
        <p><strong>ФИО:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <button><a href="{{ route('dostavka.check') }}">Проверка статуса доставки</a></button>


    </center>
            
        @if ($user->role_id == 3)
            <button><a href="{{route('showOtpravForm')}}">Отправка</a></button>
            
        @endif

        
@endsection
