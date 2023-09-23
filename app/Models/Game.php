<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Classe représentant un jeu de l'application.
 *
 * @property string $name -.
 * @property string $description -.
 *
 */
class Game extends Model
{
    use HasFactory;

    protected $table = "games";
    protected $primaryKey = "name";
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;



}
