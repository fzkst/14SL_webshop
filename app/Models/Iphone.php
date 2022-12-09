<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'modell',
        'szin',
        'tarhely',
        'ar',
        'keszlet',
        'kepfajl'
    ];

    protected $fillable = [
        'modell',
        'szin',
        'tarhely',
        'ar',
        'keszlet',
        'kepfajl'
    ];
}
