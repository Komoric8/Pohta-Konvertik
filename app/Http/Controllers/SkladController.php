<?php

namespace App\Http\Controllers;

use App\Models\Sklad;
use Illuminate\Http\Request;

class SkladController extends Controller
{
    public function index()
    {
        // Получаем все записи из таблицы sklad
        $Sklads = sklad::all();

        // Передаем данные во view
        return view('sklad', compact('Sklads'));
    }
}


