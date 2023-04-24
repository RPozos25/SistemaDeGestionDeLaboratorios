<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipoComputo;
use App\Models\CatalogoEquipoComputo;
use App\Models\Laboratorio;
use App\Models\EstadoEquipoComputo;


class EquipoComputoController extends Controller
{
    public function index(){

        $equipoc = EquipoComputo::all();
       
        return view('EquipoComputo.crudEC', compact('equipoc'));

    }

    public function create(){
        

        $lab = Laboratorio::all();
        $ec = CatalogoEquipoComputo::all();
        $estado = EstadoEquipoComputo::all();
       
        return view('EquipoComputo.registerEC', compact('lab','ec','estado'));

    }

    public function store(Request $request){
        $equipoc = new  EquipoComputo();

        $equipoc -> codgobierno = $request -> codgobierno;
        $equipoc -> laboratorio = $request -> laboratorio;
        $equipoc -> equipo = $request ->equipo;
        $equipoc -> descripcion = $request -> descripcion;
        $equipoc -> estado = $request -> estado;
       

        $equipoc->save();

        return redirect()->route('EquipoComputo.crudEC');


    }

    public function edit($id){

    
        $equipoc = EquipoComputo::find($id);
        $lab = Laboratorio::all();
        $ec = CatalogoEquipoComputo::all();
        $estado = EstadoEquipoComputo::all();
        return view('EquipoComputo.editEC', compact('equipoc','lab','ec','estado'));

    }

    public function update(Request $request, $id){

        $equipoc = EquipoComputo::find($id);
        $lab = Laboratorio::all();
        $ec = CatalogoEquipoComputo::all();
        $estado = EstadoEquipoComputo::all();

        $equipoc->update($request->all());
        //$tipos->update($request->all());

        //return view('users.crudUser', compact('users'));
        
        return redirect()->route('EquipoComputo.crudEC');

    }

    public function destroy($id){
        
        $equipoc = EquipoComputo::find($id);

        $equipoc->delete();

        return redirect()->route('EquipoComputo.crudEC');

    }
}
