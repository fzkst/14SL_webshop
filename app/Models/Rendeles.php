<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendeles extends Model
{
    use HasFactory;

    //public $timestamps = false;
    protected $visible = [
        'id',
        'userId',
        'iphoneId',
        'rendelesIdeje'
    ];

    protected $fillable = [
        'userId',
        'iphoneId',
        'rendelesIdeje'
    ];

    protected $casts = [
      //  'rendelesIdeje' => 'datetime',
    ];

}

