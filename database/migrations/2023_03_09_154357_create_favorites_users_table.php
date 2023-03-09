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
        Schema::create('favorites_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');
            $table->unsignedBigInteger('idClothes');
            $table->foreign('idClothes')->references('id')->on('clothes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites_users');
    }
};
