<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['nombre', 'cliente_id', 'estado'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
