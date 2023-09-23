<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id -.
 * @property int $card_id -.
 * @property string $game_name -.
 */
class CardsGamesLink extends Model
{
    use HasFactory;

    protected $table = "cards_games_links";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = "integer";
    public $timestamps = false;
}
