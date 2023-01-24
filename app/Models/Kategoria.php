<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;

    protected $table = 'kategoriak';

    protected $fillable = [
        'nev',
        //'slug',
        'leiras',
        'status',
        'nepszeru',
        'kepfajl'
        //'meta_cim',
        //'meta_leiras',
        //'meta_kulcsszo'
    ];
}
