<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Laboratorio;


class LaboratorioController extends Controller
{
    public function index(){

        $lab = Laboratorio::all();
        return view('laboratorio.crudLaboratorio', compact('lab'));

    }

    public function create(){

        $encar = User::whereIn('rol',[1])->get();
       
        
        return view('laboratorio.registerLaboratorio', compact('encar'));
    }

    public function store(Request $request){
        $lab = new Laboratorio();

        $lab -> nombre = $request -> nombre;
        $lab -> descripcion = $request -> descripcion;
        $lab -> encargado = $request -> encargado;
        

        $lab->save();

        return redirect()->route('laboratorio.crudLaboratorio');
    }

    public function edit($id){

        $lab = Laboratorio::find($id);
        $encar = User::whereIn('rol',[1])->get();
        return view('laboratorio.editLaboratorio', compact('lab','encar'));

    }

    public function update(Request $request, $id){

        $lab = Laboratorio::find($id);
        $lab->update($request->all());
        return redirect()->route('laboratorio.crudLaboratorio');

    }

    public function destroy($id){
        
        $lab = Laboratorio::find($id);

        $lab->delete();

        return redirect()->route('laboratorio.crudLaboratorio');

    }
}
