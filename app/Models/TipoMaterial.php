<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'descripcion'
    ];
   

    public function material(){
        return $this->hasMany(MaterialPractica::class, 'id');
    }

    public function pres(){
        return $this->hasMany(Prestamo::class, 'id');
    }

    
}
