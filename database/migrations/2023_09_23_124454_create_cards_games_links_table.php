<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards_games_links', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("card_id");
            $table->string("game_name");

            $table->foreign("card_id")
                ->references("id")->on("cards");

            $table->foreign("game_name")
                ->references("name")->on("games");
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards_games_links');
    }
};
