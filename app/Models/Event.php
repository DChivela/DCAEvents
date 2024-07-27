<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //Sintaxe propícia do Laravel que usamos para indicar ao sistema que esse dado é um array e não um String
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date']; //Informando ao Laravel que temos um campo novo que é o DATE.
    
    public function user(){
         return $this ->belongsTo('App/Models/User');
    }
}
