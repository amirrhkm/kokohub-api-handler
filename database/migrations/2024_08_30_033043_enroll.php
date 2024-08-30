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
        Schema::create('enroll', function (Blueprint $table) {
            $table->id('enroll_id');
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('koko_id');
            $table->foreign('koko_id')->references('koko_id')->on('kokos')->onDelete('cascade'); 
            $table->string('roles');
            $table->boolean('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enroll');
    }
};
