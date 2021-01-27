<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    use HasFactory;

    protected $table = 'jeu';

    protected $fillable = [
        'id',
        'nom_jeu',
        'urlAvatar',
        'description',
        'prix',
    ];
}
