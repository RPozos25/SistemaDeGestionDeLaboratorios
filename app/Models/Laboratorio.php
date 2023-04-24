<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use HasFactory;
    protected $fillable =[
        
        'nombre',
        'descripcion',
        'encargado'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'encargado');
    }

    public function ec(){
        return $this->hasMany(EquipoComputo::class, 'id');
    }
}
