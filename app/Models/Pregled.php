<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregled extends Model
{
    use HasFactory;
    protected $fillable = [
        'ljubimac',
        'veterinar',
        'datum',
        'cena',
        
    ];


    public function veterinar()
    {
       return $this->belongsTo(Veterinar::class);
    }
    public function ljubimac()
    {
       return $this->belongsTo(Ljubimac::class);
    }


}
