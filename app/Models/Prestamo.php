<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $fillable =[

        'prestado',
        'material',
        'estado' 
    ];

    public function preu(){
        return $this->belongsTo(User::class, 'prestado');
    }

    public function prem(){
        return $this->belongsTo(MaterialPractica::class, 'material');
    }

    public function pree(){
        return $this->belongsTo(EstadoPrestamo::class, 'estado');
    }

    public function pretm(){
        return $this->belongsTo(TipoMaterial::class, 'material');
    }
}
