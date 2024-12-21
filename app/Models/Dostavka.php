<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Dostavka extends Model
{
    use HasFactory;

    protected $fillable = ['hpi', 'status'];  // Разрешенные поля для массового заполнения
    protected $table = 'dostavkas';  // Указываем таблицу   
}
