<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function chef()
    {
        return view('chef');
    }

    public function card()
    {
        return view('card');
    }

    public function profile()
    {
        return view('profile');
    }
    
    public function sobre()
    {
        return view('sobre');
    }

    public function contato()
    {
        return view('contato');
    }

    public function enviarContato(Request $request)
    {
        $dados = $request->only(['nome', 'email', 'telefone']);
        return view('contato', ['dados' => $dados]);
    }
}

