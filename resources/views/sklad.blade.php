@extends('base') 

@section('content')
    <center>
        <h1>Список записей из таблицы "Склад"</h1>
        @if ($Sklads->count() > 0)
            <table border="1" style="width: 80%; text-align: center; margin: 20px auto;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>HPI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sklads as $sklad)
                        <tr>
                            <td>{{ $sklad->id }}</td>
                            <td>{{ $sklad->hpi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Нет данных в таблице "Склад".</p>
        @endif
    </center>
@endsection
