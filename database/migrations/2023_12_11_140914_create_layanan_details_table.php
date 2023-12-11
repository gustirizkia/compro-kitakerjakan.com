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
        Schema::create('layanan_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("layanan_id");
            $table->string("image")->nullable();
            $table->string("nama");
            $table->bigInteger("harga")->default(0);
            $table->longText("deskripsi_singkat")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_details');
    }
};
