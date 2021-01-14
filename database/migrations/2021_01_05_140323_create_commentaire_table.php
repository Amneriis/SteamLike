<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
            $table->id();
            $table->string('commentaire');
            $table->foreignId('id_jeu');
            $table->foreign('id_jeu')->references('id')->on('jeu')->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreignId('id_users');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaire');
    }
}
