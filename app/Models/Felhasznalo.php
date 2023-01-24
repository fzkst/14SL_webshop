<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Felhasznalo extends Model
{
    use HasFactory;

    protected $table = 'felhasznalok';

    protected $visible = [
        'id',
        'user_id',
        'maganszemely',
        'cegnev',
        'vezeteknev',
        'keresztnev',
        'iranyitoszam',
        'varos',
        'cim',
        'telefon',
        'adoszam',

    ];

    protected $fillable = [
        'user_id',
        'maganszemely',
        'cegnev',
        'vezeteknev',
        'keresztnev',
        'iranyitoszam',
        'varos',
        'cim',
        'telefon',
        'adoszam',
    ];
}

