<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function cadastrar(Request $req){
        $contato = new Contato();
        $contato-> nome = $req->nome;
        $contato -> telefone = $req ->telefone;
        $contato -> email = $req ->email;
        $contato -> save();
        return redirect()->back();
    }
}
