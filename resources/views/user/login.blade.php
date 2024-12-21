@extends('base')
@section('content')
<center> <h1>Почта Конвертик </h1><h1>Вход</h1>    </center>

    <form action="{{route('login')}}" method="POST">
        @csrf
        <center> <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required> </center>
        @error('email') <p>{{ $message }}</p> @enderror
        
        <center> <input type="password" name="password" placeholder="Пароль" required> </center>
        @error('password') <p>{{ $message }}</p> @enderror

        <center><button type="submit">Войти</button></center>
    </form>
@endsection
    