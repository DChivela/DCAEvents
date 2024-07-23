<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public  function index() {

        $nome = "Domingos";
        $idade = 21;

        $arr = [10,20,30,40,50];

        $nomes = ["Domingos", "Hamba", "Chivela"];

        return view('welcome',
        [
            'nome' => $nome,
            'idade' =>  $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }
}
