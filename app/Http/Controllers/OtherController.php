<?php

namespace App\Http\Controllers;
use App\Models\TipoMaterial;
use App\Models\User;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function index(){
        return view('otherU.index');
        
    }

    
}
