<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
}
