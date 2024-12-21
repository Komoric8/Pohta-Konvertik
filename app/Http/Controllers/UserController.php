<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Otpravka;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }
   
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/'); // Переход на страницу после входа
        }

        return back()->withErrors([
            'email' => 'Неверный email или пароль.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function showRegForm()
    {
        return view('user.reg');
    }

    public function reg(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed',
            
        ]);
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);
        
        Auth::login($user);
        
        return redirect("/"); // Переход на главную страницу после регистрации
    }   
    public function lk(Request $request)
    {
            $user = Auth::user();
            return view("user.lk",['user'=>$user] );
    }

    public function showOtpravForm()
    {
        return view('otprav');
    }
   

    public function otprav(Request $request)
    {
        // Валидация входящих данных
        $validated = $request->validate([
        'hpi' => 'required|string|max:8',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'otkuda' => 'required|string|max:255',
        'kuda' => 'required|string|max:255',
        ]);

       // Сохранение данных в БД
        Otpravka::create([
        'hpi' => $validated['hpi'],
        'name' => $validated['name'],
        'email' => $validated['email'],
        'otkuda' => $validated['otkuda'],
        'kuda' => $validated['kuda'],
        ]);

        
        // Перенаправление с сообщением об успешном сохранении
        return redirect()->route('lk')->with('success', 'Форма успешно отправлена!');
    }      




     public function oplata(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'hpi' => 'required|string|max:8',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'otkuda' => 'required|string|max:255',
            'kuda' => 'required|string|max:255',
        ]);

        // Сохранение данных в таблицу Otpravka
        $otpravka = Otpravka::create($validated);

        // Перенаправление на страницу оплаты
        return redirect()->route('payment', ['id' => $otpravka->id]);
    }



}