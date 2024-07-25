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

        //Image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $ImageName = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;

            $requestImage->move(public_path('img/events'), $ImageName);

            $event->image = $ImageName;

        }

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso!'); //Para voltar ao Home e enviar a mensagem de sucesso para a VIEW caso esteja tudo conforme
    }

    public function show($id){

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }

}
