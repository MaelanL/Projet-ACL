<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardsController extends Controller
{
    public function getCards()
	{

	    return Card::all();
	    // return Card::query()->where("value","=",$value)->get();

	}

}
