<?php

use App\Models\Koko;
use App\Models\User;
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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id('achievement_id');
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('koko_id');
            $table->foreign('koko_id')->references('koko_id')->on('kokos')->onDelete('cascade'); 
            $table->string('name');
            $table->string('years');
            $table->string('tier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
