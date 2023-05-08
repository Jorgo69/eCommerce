<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    public function quartiers()
    {
        // return $this->hasMany('App\Models\Quartier');
        return $this->hasMany(Quartier::class);
    }
}
