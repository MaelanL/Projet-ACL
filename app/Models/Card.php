<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * Classe représentant une carte.
 *
 * @property int $id -.
 * @property string $value -.
 * @property string $color -.
 * @property string $type -.
 * @property int $points -.
 */
class Card extends Model
{
    use HasFactory;

	protected $table = "cards";
	protected $primaryKey = "id";
	public $incrementing = true;
	protected $keyType = "integer";
	public $timestamps = false;

    public function cards_games_links(): HasMany
    {
        return $this->hasMany(CardsGamesLink::class);
    }
}
