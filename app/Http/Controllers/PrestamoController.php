<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaterialPractica;
use App\Models\TipoMaterial;
use App\Models\Prestamo;
use App\Models\User;
use App\Models\EstadoPrestamo;

class PrestamoController extends Controller
{

    public function index(){

        $pres = Prestamo::all();
        $mp = MaterialPractica::all();
        $tm = TipoMaterial::all();
       
      
        return view('otherU.pedidos', compact('pres','mp','tm'));

    }
    
    
    public function create(){


        $user = User::all();
        $tipos = TipoMaterial::all();
        return view('otherU.registerp', compact('tipos','user'));
        
    }

    public function store(Request $request){
        
        $pres = new prestamo();
        $pres -> prestado = $request -> prestado;
        $pres -> material = $request -> material;
        $pres -> prestado = $request -> prestado;
        $pres -> estado = $request -> estado;

        $pres->save();

        return redirect()->route('otherU.registerp');


    }

    public function edit($id){

        $pres = prestamo::find($id);
        $estado = EstadoPrestamo::all();

       
        return view('otherU.editpedidos', compact('pres','estado'));

    }

    public function update(Request $request, $id){

        $pres = prestamo::find($id);
        $estado = EstadoPrestamo::all();

        $pres->update($request->all());
        //$tipos->update($request->all());

        //return view('users.crudUser', compact('users'));
        
        return redirect()->route('otherU.pedidos');

    }

    public function destroy($id){
        
        $pres = prestamo::find($id);

        $pres->delete();

        return redirect()->route('otherU.pedidos');

    }

   

   

    
}
