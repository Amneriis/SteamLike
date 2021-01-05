<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->id();
            $table->set('note', ['0', '1', '2', '3', '4', '5']);
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
        Schema::dropIfExists('note');
    }
}
