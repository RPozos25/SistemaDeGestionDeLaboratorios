<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TipoUser;

class AdminRegisterController extends Controller
{
    public function index(){
        $user = User::all();      
        return view('users.crudUser', compact('user'));
    }
    
    public function create(){
        $tipos = TipoUser::all();
        return view('users.registerUsers', compact('tipos'));
    }

    public function store(Request $request){
        $user = new User();
        $user -> name = $request -> name;
        $user -> app = $request -> app;
        $user -> apm = $request ->apm;
        $user -> email = $request -> email;
        $user -> rol = $request -> rol;
        $user -> password = $request -> password;
        $user->save();
        return redirect()->route('users.crudUser');
    }

    public function edit($id){

        $users = User::find($id);
        $tipos = TipoUser::all();
        return view('users.edit', compact('users','tipos'));

    }

    public function update(Request $request, $id){
        $users = User::find($id);
        $tipos = TipoUser::all();
        $users->update($request->all());
        return redirect()->route('users.crudUser');
    }
    
    
    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users.crudUser');
    }
}

