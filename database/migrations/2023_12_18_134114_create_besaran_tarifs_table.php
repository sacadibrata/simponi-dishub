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
        Schema::create('besaran_tarifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zonaparkir_id');
            $table->unsignedBigInteger('kendaraan_id');
            $table->unsignedBigInteger('jenistarif_id');
            $table->decimal('besaran_tarif', 10, 2);

            $table->foreign('zonaparkir_id')->references('id')->on('zona_parkirs');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraans');
            $table->foreign('jenistarif_id')->references('id')->on('jenis_tarifs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('besaran_tarifs');
    }
};
