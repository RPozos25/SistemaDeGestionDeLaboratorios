<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoComputo extends Model
{
    use HasFactory;
    protected $fillable =[
        
        'codgobierno',
        'laboratorio',
        'equipo',
        'descripcion',
        'estado'
    ];

    public function cateq(){
        return $this->belongsTo(CatalogoEquipoComputo::class, 'equipo');
    }
    
    public function lab(){
        return $this->belongsTo(Laboratorio::class, 'laboratorio');
    }

    public function estadoec(){
        return $this->belongsTo(EstadoEquipoComputo::class, 'estado');
    }
}
