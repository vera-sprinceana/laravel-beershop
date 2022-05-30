<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('birrificio');
            $table->string('nazione');
            $table->string('stile');
            $table->string('colore');
            $table->unsignedSmallInteger('gradazione');
            $table->string('bicchiere_consigliato');
            $table->float('formato', 4, 3);
            $table->string('confezione');
            $table->decimal('prezzo', 6, 2);
            $table->boolean('sconto')->default(false); 
            $table->text('descrizione');
            $table->float('voto', 3, 2);            
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
        Schema::dropIfExists('beers');
    }
}
