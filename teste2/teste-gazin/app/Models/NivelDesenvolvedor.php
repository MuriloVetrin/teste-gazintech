<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelDesenvolvedor extends Model
{
    use HasFactory;

    public function desenvolvedores()
{
    return $this->hasMany(Desenvolvedor::class);
}

public function nivel()
{
    return $this->belongsTo(Nivel::class);
}
}
