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
        Schema::create('bureau_members', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // bureau | department_director
            $table->string('name');
            $table->string('title');
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureau_members');
    }
};
