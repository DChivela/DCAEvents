<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

//use App\Models\Model;

class EventController extends Controller
{
    
    public  function index() {

        $events = Event::all(); //Para buscar todos os dados da banco de dados, noutra situação seria usar um SELECT.

        return view('welcome', ['events' => $events]); //Passando para a views.
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/'); //Para voltar ao Home
    }
}
