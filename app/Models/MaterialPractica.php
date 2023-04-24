<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialPractica extends Model
{
    use HasFactory;

    protected $fillable =[
        
        'material',
        'cantidad',
        'descripcion'
    ];

    public function tipom(){
        return $this->belongsTo(TipoMaterial::class, 'material');
    }

   

    public function prestamp(){
        return $this->hasMany(MaterialPractica::class, 'id');
    }

    


}
