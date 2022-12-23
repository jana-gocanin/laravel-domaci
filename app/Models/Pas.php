<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ime',
        'godine',
        'boja',
        'tezina'
    ];
}
