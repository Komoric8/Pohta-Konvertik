<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Sklad extends Model
{
    use HasFactory;

    protected $fillable = [
        'hpi',
        
    ];
    protected $table = 'sklad';
    

    public function Sklad():HasMany
    {
        return $this->hasMany(Sklad::class);
    }
    
}


