<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinar extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'iskustvo',

         
    ];


    public function pregledi()
    {
       return $this->hasMany(Pregled::class);
    }
}
