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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('age');
            $table->string('phone',20);
            $table->string('address');
            $table->string('city');
            $table->string('location');
            $table->date('date');
            $table->string('time');
            $table->string('type');
            $table->string('theme');
            $table->string('package');
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
