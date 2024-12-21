<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Otpravka extends Model
{
    use HasFactory;

    protected $fillable = [
        'hpi',
        'name',
        'email',
        'otkuda',
        'kuda',
    ];
}


