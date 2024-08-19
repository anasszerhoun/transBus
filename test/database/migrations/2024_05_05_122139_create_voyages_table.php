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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id('idVoyage');
            $table->date('DateDepart');
            $table->time('HeureDepart');
            $table->time('HeureDArrivee');
            $table->float('Prix');
            $table->unsignedBigInteger('idBus');
            $table->unsignedBigInteger('idChauffeur');
            $table->unsignedBigInteger('idItineraire');
            $table->foreign('idBus')->references('idBus')->on('buses');
            $table->foreign('idChauffeur')->references('idChauffeur')->on('chauffeurs');
            $table->foreign('idItineraire')->references('idItineraire')->on('itineraires');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
