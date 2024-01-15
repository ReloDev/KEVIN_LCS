<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->integer('age');
            $table->string('sexe');
            $table->string('email')->unique();
            $table->integer('telephone');
            $table->foreignId('id_filiere')->constrained('filieres');
            $table->string('diplome');
            $table->string('toph');
            $table->boolean('encours')->default(1);
            $table->boolean('accepte')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
};
