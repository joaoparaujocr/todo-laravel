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
            $table->string('title')->nullable(false);
            $table->boolean('is_done')->default(false);
            $table->text('description')->nullable(false);
            $table->dateTime('due_date')->nullable(false);
            $table->foreignId('category_id')->constrained('categories', 'id');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->dropForeign(['category_id', 'user_id']);
        });
        Schema::dropIfExists('tasks');
    }
};
