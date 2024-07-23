<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use App\Models\Model;

class EventController extends Controller
{
    
    public  function index() {

        $events = Event::all(); //Para buscar todos os dados da banco de dados, noutra situação seria usar um SELECT.

        return view('welcome', ['events' => $events]); //Passando para a views.
    }

    public function create() {
        return view('events.create');
    }
}
