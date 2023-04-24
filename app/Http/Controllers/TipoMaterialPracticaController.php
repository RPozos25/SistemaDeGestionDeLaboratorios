<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoMaterial;

class TipoMaterialPracticaController extends Controller
{
    public function index(){

        $tmp = TipoMaterial::all();
        return view('TipoMaterialPractica.crudTMP', compact('tmp'));

    }

    public function create(){
        
       
        return view('TipoMaterialPractica.registerTMP');

    }

    public function store(Request $request){
        
        $tmp = new TipoMaterial();
        $tmp -> descripcion = $request -> descripcion;
        $tmp->save();

        return redirect()->route('TipoMaterialPractica.crudTMP');


    }

    public function edit($id){

        $tmp = TipoMaterial::find($id);
        return view('TipoMaterialPractica.editTMP', compact('tmp'));
    }

    public function update(Request $request, $id){

        $tmp = TipoMaterial::find($id);
        

        $tmp->update($request->all());
        
        
        return redirect()->route('TipoMaterialPractica.crudTMP');

    }

    public function destroy($id){
        
        $tmp = TipoMaterial::find($id);

        $tmp->delete();

        return redirect()->route('TipoMaterialPractica.crudTMP');

    }

    
}
