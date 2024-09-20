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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->integer('phone');
            $table->string('location');
            $table->string('illenss');
            $table->string('gender');
            $table->string('age');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
            Schema::dropIfExists('users'); 
     
    }
};