<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoEquipoComputo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'descripcion'
    ];

    public function ec(){
        return $this->hasMany(EquipoComputo::class, 'id');
    }

}
