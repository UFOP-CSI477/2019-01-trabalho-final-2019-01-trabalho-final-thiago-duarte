<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class loginadminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('nome') == 'admin@admin.com' && $request->input('senha') == 'admin') {
            return redirect('admin');
        } else {
            return redirect('adminlogin');
        }
    }

    public function logincliente(Request $request)
    {
        $user = Cliente::where('email', $request->input('email'))->first();
        if ($request->input('senha') == $user->senha) {
            session_start();
            $_SESSION["namelogin"] = $user->nome;
            return redirect('monte');
        } else {
            return redirect('login');
        }
    }
}
