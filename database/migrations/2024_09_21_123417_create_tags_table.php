<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Create the 'tags' table
        Schema::create('tags', function (Blueprint $table) {
            $table->id(); 
            $table->string('name')->unique(); 
            $table->string('slug')->unique(); 
            $table->timestamps(); 
        });
    }
    
    public function down(): void
    {
        // Drop the 'tags' table if it exists
        Schema::dropIfExists('tags');
    }
};
