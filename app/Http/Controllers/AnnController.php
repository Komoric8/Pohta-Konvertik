<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class AnnController extends Controller
{
    public function index()  
    {
        Role::firstOrCreate(['name'=>'Администратор']);//1
        Role::firstOrCreate(['name'=>'Клиент']);//2
        Role::firstOrCreate(['name'=>'Сотрудник']);//3
        User::firstOrCreate([
            "email"=>"test@mail.ru",
            "name"=>"AnnP",
            'password' => Hash::make(env('ADMIN_PWD')),
            "role_id" => '1'
        ]);
        return "УСПЕХ";
    }
}