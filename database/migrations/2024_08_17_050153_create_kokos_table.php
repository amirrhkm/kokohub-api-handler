<?php

use App\Models\User;
use App\Models\Koko;
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
        Schema::create('kokos', function (Blueprint $table) {
            $table->string('koko_id')->primary();
            $table->string('name');
            $table->integer('student_capacity');
            $table->integer('teacher_capacity');
            $table->timestamps();
        });

        Schema::create('user_koko', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('koko_id');
            $table->foreign('koko_id')->references('koko_id')->on('kokos')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kokos');
    }
};
