<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\AdminController;

class SessionsController extends Controller
{
    public function create(){

        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false) {
            return back()->withErrors([
              'message' => 'The email or password is incorrect',
            ]);
        } else {
            if(auth()->user()->rol == '1'){
                return redirect()->route('admin.index');

            }else{
                return redirect()->route('otherU.index');

            }

        }
        
    }
    public function destroy(){
        auth()->logout();
        return redirect()->to('/login');
    }
}
