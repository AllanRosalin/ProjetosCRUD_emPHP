<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index(Request $req)
    {
        // dd($req); // var_dump($req)
        //return "Estou no controle !!!";

        $nome = $req -> input ('nome');
        $cel = $req -> input ('cel');
        // dd ($nome);

        $matContatos = [
            [ "nome" => "maria", "cel" => "998881121"],
            [ "nome" => "joao", "cel" => "977881111"],
            [ "nome" => $nome, "cel" => $cel],
            ];
        return view("contato.index", compact("matContatos"));
    }
}
?>
