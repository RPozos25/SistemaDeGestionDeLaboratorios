<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatalogoEquipoComputo;


class CatalogoEquipoController extends Controller
{
    public function index(){


        $equipo = CatalogoEquipoComputo::all();
        
       
        return view('catalogoEquipoComputo.crudCatE', compact('equipo'));

    }

    public function create(){
        
       
        return view('catalogoEquipoComputo.registerCatE');

    }

    public function store(Request $request){
        
        $cate = new CatalogoEquipoComputo();
        $cate -> descripcion = $request -> descripcion;
        $cate->save();

        return redirect()->route('catalogoEquipoComputo.crudCatE');


    }

    public function edit($id){

        $cate = CatalogoEquipoComputo::find($id);
        return view('catalogoEquipoComputo.editCatE', compact('cate'));
    }

    public function update(Request $request, $id){

        $cate = CatalogoEquipoComputo::find($id);
        

        $cate->update($request->all());
        
        
        return redirect()->route('catalogoEquipoComputo.crudCatE');

    }

    public function destroy($id){
        
        $cate = CatalogoEquipoComputo::find($id);

        $cate->delete();

        return redirect()->route('catalogoEquipoComputo.crudCatE');

    }
}
