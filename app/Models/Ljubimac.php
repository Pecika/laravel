<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ljubimac extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'ime_vlasnika',
        'rasa',
        'godine',

         
    ];

    public function pregledi()
    {
       return $this->hasMany(Pregled::class);
    }
}
