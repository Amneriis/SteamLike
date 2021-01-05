<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->dateTime('transaction_date');
            $table->enum("status", ['en cours', 'réussi', 'echouer'])->default('en cours');
            $table->foreignId('user_id');
            $table->foreignId('id_jeu');
            $table->timestamps();

            $table->foreign('id_jeu')->references('id')->on('jeu')->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')
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
        Schema::dropIfExists('transactions');
    }
}
