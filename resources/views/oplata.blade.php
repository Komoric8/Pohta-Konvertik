@extends('base')
@section('content')
<center> <h1>Почта Конвертик </h1><h2>Оплата отправлений</h2>  
<p>Номер отправления: {{ $id }}</p>
<p>К оплате 100 рублей</p>
<button><a href="/">Наличными</a></button>
<button><a href="/">По карте</a></button>  </center>
@endsection
    