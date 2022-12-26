<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ugovor extends Model
{
    use HasFactory;

    protected $fillable = [
        'potpisano',
        'datum_potpisa',
        'pas_id',
        'udomitelj_id'
    ];

    public function pas()
    {
        return $this->belongsTo(Pas::class);
    }
}
