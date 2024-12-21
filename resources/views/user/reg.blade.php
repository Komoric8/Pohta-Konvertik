@extends('base')
@section('content')
<center> <h1>Почта Конвертик </h1><h1>Регистрация</h1>    </center>
        <form action="{{ route('reg') }}" method="POST">
        @csrf
        <center>  <input type="text" name="name" placeholder="ФИО" value="{{ old('name') }}" required></center>
        @error('name') <p>{{ $message }}</p> @enderror
        
        <center>  <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required></center>
        @error('email') <p>{{ $message }}</p> @enderror

        <center> <input type="password" name="password" placeholder="Пароль" required></center>
        @error('password') <p>{{ $message }}</p> @enderror

        <center> <input type="password" name="password_confirmation" placeholder="Повторите пароль" required></center>

        <center> <button type="submit">Зарегистрироваться</button></center>
        
    </form>
@endsection
