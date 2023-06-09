<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;

    public function ville()
    {
        // return $this->belongsTo('App\Models\Ville');
        return $this->belongsTo(Ville::class);
    }
}
