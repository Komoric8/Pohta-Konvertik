<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Dostavka;
use Illuminate\Http\Request;

class DostavkaController extends Controller
{
    // Этот метод отображает форму для ввода номера отправления
    public function checkForm()
    {
        return view('check_dostavka');  // Это представление для ввода номера отправления
    }

    // Просмотр статуса по номеру отправления
    public function checkStatus(Request $request)
    {
        $hpi = $request->input('hpi');
        $dostavka = Dostavka::where('hpi', $hpi)->first(); // Получаем запись по HPI

        if (!$dostavka) {
            return back()->with('error', 'Отправление не найдено');
        }

        return view('status_dostavka', ['dostavka' => $dostavka]);  // Передаем данные о доставке
    }

    // Обновление статуса доставки (для почтальонов)
    public function updateStatus(Request $request, $id)
    {
        $dostavka = Dostavka::findOrFail($id);  // Получаем запись по ID
        $dostavka->update(['status' => $request->input('status')]);  // Обновляем статус

        return back()->with('success', 'Статус обновлен');
    }

    public function showDashboard()
{
    // Получаем текущего аутентифицированного пользователя
    $user = Auth::user();

    // Возвращаем представление и передаем переменную $user
    return view('your-view', compact('user'));
}
}
    
