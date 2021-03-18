<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IngresoController extends Controller
{
    public function LoginGet(Request $req) {
        $usr=['name'=>'','password'=>''];

        return view('login',['usr'=>$usr]);
    }

    public function LoginPost(Request $req) {
        $usrArreglo=['name'=>$req->post('username'),'password'=>$req->post('password')];
        $usr=new User();
        $usr->name=$req->post('username');
        $usr->password=$req->post('password');


        $validar=Auth::attempt($usrArreglo,true); // inicia session y la va a recordar.
        if($validar) {
            return redirect('/privada');
        }
        return view('login',['usr'=>$usr]);
    }
    public function Logout() {
        Auth::logout();
        return redirect('/login');
    }
    public function PaginaPrivada() {
        if(Auth::check()===false) {
            return redirect('/login');
        }
        $usr=Auth::user();

        return view('privada',['usr'=>$usr]);
    }


}
