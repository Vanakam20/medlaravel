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
        Schema::create('offrirs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Rapport_id');
            $table->unsignedBigInteger('Medicament_id');
            $table->integer('quantite')->unsigned()->default();
            $table->foreign('Rapport_id')->references('id')->on('rapports');
            $table->foreign('Medicament_id')->references('id')->on('medicaments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offrirs');
    }
};
