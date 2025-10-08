<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre', 'numero', 'empresa', 'email', 'foto'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}