<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    use HasFactory;

    protected $fillable = [ 'nome', 'email', 'nivel_id', ];

    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }
     
    public function getNivelNomeAttribute()
    {
        return $this->nivel->nome ?? '-';
    }


}
