<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Create the 'categories' table
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); 
            $table->string('name')->unique(); 
            $table->string('slug')->unique(); 
            $table->timestamps(); 
        });
    }
    
    public function down(): void
    {
        // Drop the 'categories' table if it exists
        Schema::dropIfExists('categories');
    }
};
