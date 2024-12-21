@extends('base')
@section('content')
    <center>
    <h1>Почта Конвертик </h1>
    <h2>Отправка отправлени</h2>
    
    <p>Сотрудник</p>
    </center>
    <form action="{{ route('otprav') }}" method="POST">
    @csrf
    <p> <input type="text" name="hpi" placeholder="ШПИ" required></p>
    <p><p><input type="text" name="name" placeholder="ФИО кому" required></p> </p>
    <p><input type="email" name="email" placeholder="Email" required></p>
    <p><input type="text" name="otkuda" placeholder="Откуда" required></p>
    <p><input type="text" name="kuda" placeholder="Куда" required></p>
    <p><button type="submit">К оплате</button></p>
    </form>

   
@endsection