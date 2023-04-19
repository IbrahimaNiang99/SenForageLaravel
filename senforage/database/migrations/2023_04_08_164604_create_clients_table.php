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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nom');
            $table->string('adresse');
            $table->integer('telephone');
            $table->date('date');
            $table->boolean('etreChef');
            $table->string('chefVillage');

            $table->integer('village_id')->unsigned();
            $table->foreign('village_id')->references('id')->on('villages');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
