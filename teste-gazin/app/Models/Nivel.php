<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    protected $fillable = [ 'nome', ];

    public function desenvolvedor()
    {
        return $this->hasMany(Desenvolvedor::class, 'nivel_id');
    }
}