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

        Schema::create('clothes_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('percentageDiscount');
            $table->timestamps();
        });

        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clotheType_id');
            $table->foreign('clotheType_id')->references('id')->on('clothes_types');
            $table->string('size');
            $table->string('color');
            $table->decimal('price');
            $table->string('gender');
            $table->timestamps();
        });


        Schema::create('bank_data', function (Blueprint $table) {
            $table->id();
            $table->string('iban');
            $table->decimal('money');
            $table->timestamps();
        });



        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('isAdmin');
            $table->unsignedBigInteger('bankData_id');
            $table->foreign('bankData_id')->references('id')->on('bank_data');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('clothes');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('discounts');
        Schema::dropIfExists('clothes_types');
        Schema::dropIfExists('bank_data');
    }
};
