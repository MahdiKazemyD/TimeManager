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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('day_id');
            $table->foreignId('target_id')->nullable();
            $table->foreignId('category_id')->nullable()->comment('for any task not target');
            $table->string('title');
            $table->integer('timeMoment');
            $table->text('description');
            $table->enum('priority', ['A','B','C','D']);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
