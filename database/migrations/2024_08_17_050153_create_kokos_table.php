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
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Koko::class)->constrained()->cascadeOnDelete();
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
