<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin/login.login');
    }

    public function loginInicio(Request $request){

        dd($request);
    }
}
