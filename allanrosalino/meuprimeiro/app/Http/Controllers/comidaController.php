<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function index(Request $req)
    {
        $prato = $req -> input ('prato');
        $sobremesa = $req -> input ('sobremesa');
        $diversos = $req -> input ('diversos');

        $matComidas = [
            [ "prato" => "macarrão", "sobremesa" => "sorvete", "diversos" => "vinagrete"],
            [ "prato" => "feijoada", "sobremesa" => "mousse", "diversos" => "maionese"],
            [ "prato" => $prato, "sobremesa" => $sobremesa, "diversos" => $diversos],
        ];
        return view("comida.index", compact("matComidas"));
    }
}
