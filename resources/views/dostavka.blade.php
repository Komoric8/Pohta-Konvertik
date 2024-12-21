@php
use Illuminate\Support\Facades\Auth;
@endphp
@extends('base')

@section('content')
    <center>
        <h1>Проверка статуса доставки</h1>
        <form action="{{ route('dostavka.check') }}" method="POST">
            @csrf
            <input type="text" name="hpi" placeholder="Введите номер отправления" required>
            <button type="submit">Проверить</button>
        </form>

        @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
    </center>
@endsection
