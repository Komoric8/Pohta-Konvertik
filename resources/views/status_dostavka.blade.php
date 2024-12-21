@php
use Illuminate\Support\Facades\Auth;
@endphp
@extends('base')
@section('content')
    <center>
        <h1>Статус доставки</h1>
        <p><strong>Номер отправления:</strong> {{ $dostavka->hpi }}</p>
        <p><strong>Статус доставки:</strong> {{ $dostavka->status }}</p>
        
        @if (Auth::check() && Auth::user()->role_id == 3)
            <h2>Изменение статуса </h2>        
            
            <form action="{{ route('dostavka.update', $dostavka->id) }}" method="POST">
           @csrf
           <select name="status">
               <option value="В обработке" {{ $dostavka->status == 'В обработке' ? 'selected' : '' }}>В обработке</option>
               <option value="В пути" {{ $dostavka->status == 'В пути' ? 'selected' : '' }}>В пути</option>
               <option value="Доставлено" {{ $dostavka->status == 'Доставлено' ? 'selected' : '' }}>Доставлено</option>
               <option value="Отменено" {{ $dostavka->status == 'Отменено' ? 'selected' : '' }}>Отменено</option>
           </select>
           <button type="submit">Обновить статус</button>
           </form>
        @endif
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

    </center>
@endsection
