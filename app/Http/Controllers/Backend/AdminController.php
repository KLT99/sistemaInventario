<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login() {
        return view('admin/login.login');
    }

    public function home(){

        if(Auth::check()){

            $usuario = Auth::user();
            $nombre = $usuario->name;
            $tipo = $usuario->tipo->nombre;
        }

        return view('admin/home.home',compact('usuario','nombre','tipo'));
    }

    public function loginInicio(Request $request){

        $credenciales = $request->validate([

            'email'=>'required',
            'password'=>'required'
        ]);

        $credenciales['email']=strtolower($credenciales['email']);

        if(Auth::attempt($credenciales)){

            $request->session()->regenerate();
            $usuario = Auth::user();

            return redirect()->route('home')->with('success', 'Has iniciado sesión');

        } else {

            return redirect()->route('login')->with('error', 'Credenciales incorrectas');

        }
    }
}
