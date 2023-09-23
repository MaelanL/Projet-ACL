<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Card;

class CardsController extends Controller
{
    /**
     * On retourne les cartes d'un jeu donné.
     *
     * @param string $game_name - Le nom du jeu.
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getCards(string $game_name)
	{
        return Card::query()
            ->whereHas("cards_games_links", function (Builder $query) use ($game_name){
                return $query->where("game_name","=",$game_name);
            })
            ->get();
	}

}
