<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'numero',
        'table',
        'date_heure',
        'requete',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
