<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    
    protected $table = 'transactions';

    protected $fillable = [
        'montant',
        'transaction_date',
        'status',
        'id_user',
        'id_jeu',
    ];
}
