<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoMaterial;
use App\Models\MaterialPractica;

class MaterialPracticaController extends Controller
{
    public function index(){

        $material = MaterialPractica::all();
        return view('MaterialPractica.crudMP', compact('material'));
    }

    public function create(){

        $tipos = TipoMaterial::all();
        return view('MaterialPractica.registerMP', compact('tipos'));

    }

    public function store(Request $request){
        $material = new MaterialPractica();

        $material -> material = $request -> material;
        $material -> cantidad = $request -> cantidad;
        $material -> descripcion = $request ->descripcion;
        $material->save();

        return redirect()->route('MaterialPractica.crudMP');


    }

    public function edit($id){

        $material = MaterialPractica::find($id);
        $tipos = TipoMaterial::all();
        return view('MaterialPractica.editMP', compact('material','tipos'));

    }

    public function update(Request $request, $id){

        $material = MaterialPractica::find($id);
        $tipos = TipoMaterial::all();

        $material->update($request->all());
        //$tipos->update($request->all());

        //return view('users.crudUser', compact('users'));
        
        return redirect()->route('MaterialPractica.crudMP');

    }

    public function destroy($id){
        
        $material = MaterialPractica::find($id);

        $material->delete();

        return redirect()->route('MaterialPractica.crudMP');

    }
}
