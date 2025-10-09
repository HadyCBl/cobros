<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $fillable = ['nombre', 'numero', 'empresa', 'email', 'foto'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}